@props(['route'])
@php
use Illuminate\Support\Facades\Route;
$isActive = request()->routeIs($route);
@endphp

<li class="@if($isActive) after:bg-primary @else after:bg-gray-200 after:max-w-[1rem] @endif w-min whitespace-nowrap text-gray-900 text-2xl relative transition-transform after:h-1 after:absolute after:w-full after:-bottom-1 after:left-0 after:transition-all">
    <a href="{{ Route::has($route) ? route($route) : '#' }}">
        {{ $slot }}
    </a>
</li>
