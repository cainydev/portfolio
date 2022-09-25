@props(['align' => 'left'])

<div class="@if($align != 'left') ml-auto @endif relative w-[calc(100%-3rem)] p-4 col-span-2 border-4 border-gray-900">
    {{ $slot }}
</div>
