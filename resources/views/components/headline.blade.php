@props(["subtitle" => null])
<x-section class="mb-6 prose max-w-prose">
    <h1 class="mt-8 mb-4 text-4xl font-medium">
        <x-underline>{{ $slot }}</x-underline>
    </h1>
    @isset($subtitle)
    <h2>{{$subtitle}}</h2>
    @endisset
</x-section>
