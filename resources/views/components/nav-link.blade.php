@props(['route'])

<li x-data
    x-bind:class="$current('{{ route($route) }}') && 'duration-0 after:duration-0 after:bg-primary after:max-w-full scale-105 rotate-3'"
    class="relative transition-all active:scale-100 hover:scale-105 hover:rotate-3 after:max-w-4 after:bg-gray-200 hover:after:max-w-full after:h-1 after:absolute after:w-full after:-bottom-1 after:left-0 after:transition-all hover:after:bg-primary">
    <a wire:navigate href="{{ route($route) }}">
        {{ $slot }}
    </a>
</li>
