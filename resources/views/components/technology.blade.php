@props(['title', 'desc', 'url', 'img'])

<div class="relative flex p-4 pr-24 mr-12 text-white bg-primary group">
    <div class="transition-all group-hover:opacity-0">
        <h3 class="text-2xl">{{ $title }}</h3>
        <p class="mt-4">{{ $desc }}</p>
    </div>
    <a href="https://{{ $url }}"
       class="absolute w-24 h-24 transition-all duration-500 translate-x-1/2 -translate-y-1/2 group-hover:right-1/2 right-2 top-1/2">
        <img src="{{ $img }}"
             class="h-full p-4 bg-white border-4 border-primary"
             alt="Laravel Logo">
        <p
           class="absolute transition-all -translate-x-1/2 opacity-0 whitespace-nowrap group-hover:opacity-100 left-1/2">
            Zu {{ $url }}</p>
    </a>
</div>
