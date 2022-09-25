@props(['href' => '#'])
<a href="{{ $href }}" class="px-3 py-1 text-lg font-bold transition-all bg-white border-4 border-transparent text-primary max-w-fit hover:-translate-y-1 hover:border-white">
    {{ $slot }}
</a>
