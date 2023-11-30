@props(['subtitle', 'cta_text', 'href', 'img'])

<x-section class="grid grid-cols-1 pt-4 pb-24 text-gray-900 md:pt-16 gap-x-16 gap-y-8 md:grid-cols-2">
    <div class="flex flex-col justify-start min-w-min ">
        <h2 class="pt-6 pb-4 text-5xl font-medium leading-tight">{{ $slot }}</h2>
        <p class="pb-4">{{ $subtitle }}</p>
        <x-button-primary href="{{ $href }}">{{ $cta_text }}</x-button-primary>
    </div>

    <div class="md:flex hidden justify-center w-full md:justify-end"
         x-data="{
            img:    {x: 0, y: 0},
            mouse:  {x: 0, y: 0},
            constrain: 150,
            rotate:  '',
            init() {
                $dispatch('mousemove');
                this.updateImage();
            },
            updateImage() {
                const rect = $refs.image.getBoundingClientRect();
                this.img.x = rect.left - window.scrollX + $refs.image.clientWidth/2;
                this.img.y = rect.top - window.scrollY + $refs.image.clientHeight/2;
            },
            updateMouse(e) {
                this.mouse.x = e.clientX;
                this.mouse.y = e.clientY;
            }
        }"
         x-effect="rotate = 'transform: perspective(400px) rotateX(' + (-(mouse.y-img.y)/constrain) + 'deg) rotateY(' + ((mouse.x-img.x)/constrain) + 'deg)'"
         x-on:mousemove.window="updateMouse"
         x-on:scroll.window="updateImage"
         x-on:resize.window="updateImage">
        <x-dynamic-component :component="$img"
                             x-ref="image"
                             x-bind:style="rotate"
                             class="max-w-md"/>

    </div>
</x-section>
