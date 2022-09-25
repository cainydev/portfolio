@props(['x' => 1, 'y' => 1])

<span class="relative flex items-center justify-center w-full h-full">
    @if($x > 0)
    <span class="absolute h-4 w-[55%] translate-x-1/2 bg-primary"></span>
    @else
    <span class="absolute h-4 w-[55%] -translate-x-1/2 bg-primary"></span>
    @endif

    @if($y > 0)
    <span class="absolute w-4 h-[55%] translate-y-1/2 bg-primary"></span>
    @else
    <span class="absolute w-4 h-[55%] -translate-y-1/2 bg-primary"></span>
    @endif

    <span class="absolute w-4 h-4 rounded-xl bg-primary"></span>
</span>
