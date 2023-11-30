@props(['bg' => 'white'])

<section
    class="w-full overflow-hidden odd:bg-white odd:text-gray-900 odd:fill-gray-900 even:fill-white even:bg-primary even:text-white">
    <div {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-4 z-10']) }}>
        {{ $slot }}
    </div>
</section>
