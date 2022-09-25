@props(['route'])
@php
use Illuminate\Support\Facades\Route;
$isActive = request()->routeIs($route);
@endphp

<li class="@if($isActive) after:bg-primary @else after:bg-gray-200 after:max-w-[1rem] @endif  hover:after:max-w-full hover:scale-105 hover:rotate-3  active:rotate-0 active:scale-100 relative transition-transform after:h-1 after:absolute after:w-full after:-bottom-1 after:left-0 after:transition-all hover:after:bg-primary">
    <a href="{{ Route::has($route) ? route($route) : '#' }}">
        {{ $slot }}
    </a>
</li>
