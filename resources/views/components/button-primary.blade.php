@props(['href' => false])

@if($href)
    <a {{ $attributes->merge([
        'href' => $href,
        'class' => 'px-3 py-1 text-lg font-bold text-white transition-all border-4 border-transparent max-w-fit hover:bg-white hover:text-primary hover:border-primary bg-primary'
    ]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->class(['px-3 py-1 text-lg font-bold text-white transition-all border-4 border-transparent max-w-fit hover:bg-white hover:text-primary hover:border-primary bg-primary']) }}>
        {{ $slot }}
    </button>
@endif
