@props(['title', 'img', 'price'])

<div {{ $attributes->merge(['class' => 'gap-4 flex flex-col items-center justify-between w-full p-8 text-gray-900 bg-white border-t-4 sm:flex-row border-primary'])}}>
    <div class="w-full bg-white">
        @if(isset($price))
        <span class="flex mb-2 space-x-1">
            @for($i = 0; $i < $price; $i++) <x-icons.icon-money class="w-5 h-5 stroke-primary">
                </x-icons.icon-money>
                @endfor
                @for($i = $price; $i < 3; $i++) <x-icons.icon-money class="w-5 h-5 opacity-30 stroke-primary">
                    </x-icons.icon-money>
                    @endfor
        </span>
        @endif
        <p class="text-xl">{{ $title }}</p>
        <div class="my-3">{{ $slot }}</div>
    </div>
    @if(isset($img))
    <x-dynamic-component :component="$img" class="w-full max-w-full p-4 bg-white sm:w-auto shrink h-52" />
    @endif


    {{-- <x-button-primary>Ansehen</x-button-primary> --}}
</div>
