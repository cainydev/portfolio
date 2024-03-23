@props(['white' => false])
<span
    class="relative after:absolute after:-bottom-0 after:left-0 after:w-full after:rounded-sm after:-rotate-1 after:h-[0.12em] @if($white) after:bg-white @else after:bg-primary @endif">{{ $slot }}</span>
