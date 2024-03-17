@props(['alternate' => true])

<section
    class="w-full overflow-hidden bg-white text-gray-900 fill-gray-900 @if($alternate) even:fill-white even:bg-primary even:text-white @endif">
    <div {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-4 z-10']) }}>
        {{ $slot }}
    </div>
</section>
