@props(['title', 'subtitle', 'year', 'alternate' => false])

<x-section :alternate="$alternate">
    <div class="flex flex-col py-8 md:py-16 @if($alternate) lg:flex-row-reverse @else lg:flex-row @endif gap-8 md:gap-16">
        <div class="flex md:max-w-sm flex-col gap-6 w-full mx-auto">
            <h3 class="text-3xl font-medium">{{ $title }}</h3>
            <span class="before:w-16 before:h-3 before:block flex items-center gap-3 text-xs font-semibold @if($alternate) before:bg-white @else before:bg-primary @endif">{{ $year }}</span>
            <p class="">{{ $subtitle }}</p>
        </div>
        <div class="grid items-stretch grid-cols-1 md:grid-cols-5 gap-6 mx-auto max-w-7xl">
            {{ $slot }}
        </div>
    </div>
</x-section>
