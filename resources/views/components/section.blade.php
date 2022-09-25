@props(['bg' => 'white'])

<section class="bg-white @if($bg != 'white') text-white @endif w-full">
    <div {{ $attributes->merge(['class' => 'mx-auto max-w-7xl px-4']) }}>
        {{ $slot }}
    </div>
</section>
