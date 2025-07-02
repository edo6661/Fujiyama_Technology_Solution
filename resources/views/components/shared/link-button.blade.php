@props([
    'variant' => 'primary',
    'tag' => 'a', // default sebagai anchor
    'href' => '#',
    'type' => 'button'
])

@php
    $containerClass = 'relative group cursor-pointer overflow-hidden rounded-md border-2';
    
    switch ($variant) {
        case 'primary':
            $containerClass .= ' border-white bg-white';
            break;
        case 'secondary':
            $containerClass .= ' border-primary-blue bg-primary-blue';
            break;
        case 'tertiary':
            $containerClass .= ' border-primary-blue bg-primary-blue';
            break;
    }
    
    $overlayClass = 'absolute inset-0 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0';
    
    switch ($variant) {
        case 'primary':
            $overlayClass .= ' bg-primary-blue';
            break;
        case 'secondary':
            $overlayClass .= ' bg-white';
            break;
        case 'tertiary':
            $overlayClass .= ' bg-black';
            break;
    }
    
    $textClass = 'relative z-10 md:px-6 md:py-4 px-4 py-2 transition-colors duration-500 font-semibold block w-full h-fit';
    
    switch ($variant) {
        case 'primary':
            $textClass .= ' text-primary-blue group-hover:text-white';
            break;
        case 'secondary':
            $textClass .= ' group-hover:text-black text-white';
            break;
        case 'tertiary':
            $textClass .= ' text-white';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $containerClass]) }}>
    <div class="{{ $overlayClass }}"></div>
    
    @if($tag === 'button')
        <button type="{{ $type }}" class="{{ $textClass }}">
            {{ $slot }}
        </button>
    @else
        <a href="{{ $href }}" class="{{ $textClass }}">
            {{ $slot }}
        </a>
    @endif
</div>