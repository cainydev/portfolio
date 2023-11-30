@props(['title', 'subtitle'])

<x-section>
    <div class="flex flex-col items-center max-w-4xl py-16 mx-auto text-center">
        <h2 class="text-3xl">{{ $title }}</h2>
        <p class="mt-4">{{ $subtitle }}</p>
    </div>
    <div class="grid items-stretch grid-cols-1 md:grid-cols-5 gap-6 mx-auto mb-16 max-w-7xl">
        {{ $slot }}
    </div>
</x-section>
