@props(['href' => '#'])

<a href="{{ $href }}"
   class="px-3 py-1 text-lg font-bold text-white transition-all border-4 border-transparent max-w-fit hover:bg-white hover:text-primary hover:border-primary bg-primary">
    {{ $slot }}
</a>
