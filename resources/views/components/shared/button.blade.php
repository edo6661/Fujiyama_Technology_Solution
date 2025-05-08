@props([
    'type' => 'button',
    'variant' => 'primary',
    'href' => null,
    'size' => 'md',
    'disabled' => false,
    'fullWidth' => false,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500';
    
    $variantClasses = [
        'primary' => 'bg-primary-blue text-white hover:bg-blue-700 active:bg-blue-800',
        'secondary' => 'bg-gray-200 text-gray-900 hover:bg-gray-300 active:bg-gray-400',
        'success' => 'bg-green-600 text-white hover:bg-green-700 active:bg-green-800',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 active:bg-red-800',
        'warning' => 'bg-yellow-500 text-white hover:bg-yellow-600 active:bg-yellow-700',
        'info' => 'bg-cyan-600 text-white hover:bg-cyan-700 active:bg-cyan-800',
        'dark' => 'bg-gray-800 text-white hover:bg-gray-900 active:bg-black',
        'light' => 'bg-gray-100 text-gray-800 hover:bg-gray-200 active:bg-gray-300',
        'outline' => 'bg-transparent border border-gray-300 text-gray-700 hover:bg-gray-50 active:bg-gray-100',
        'link' => 'bg-transparent text-primary-blue hover:underline focus:ring-0 p-0',
    ];
    
    $sizeClasses = [
        'xs' => 'text-xs px-2 py-1 rounded',
        'sm' => 'text-sm px-3 py-1.5 rounded',
        'md' => 'text-sm px-4 py-2 rounded-md',
        'lg' => 'text-base px-5 py-2.5 rounded-md',
        'xl' => 'text-lg px-6 py-3 rounded-md',
    ];
    
    $disabledClasses = 'opacity-50 cursor-not-allowed';
    $fullWidthClass = 'w-full';
    
    $classes = $baseClasses . ' ' . 
        $variantClasses[$variant] . ' ' . 
        $sizeClasses[$size] . ' ' . 
        ($disabled ? $disabledClasses : '') . ' ' . 
        ($fullWidth ? $fullWidthClass : '');
@endphp

@if ($href && !$disabled)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $disabled ? 'disabled' : '' }} 
        {{ $attributes->merge(['class' => $classes]) }}
    >
        {{ $slot }}
    </button>
@endif