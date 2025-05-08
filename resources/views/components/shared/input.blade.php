@props([
    'type' => $type,
    'name' => $name,
    'id' => $id ?? $name,
    'label' => $label,
    'placeholder' => $placeholder ?? '',
    'value' => $value ?? '',
    'required' => $required,
    'disabled' => $disabled,
    'readonly' => $readonly,
    'size' => $size,
    'variant' => $variant,
    'fullWidth' => $fullWidth,
    'leadingIcon' => null,
    'trailingIcon' => null,
    'helperText' => null,
    'error' => null,
])

@php
    $baseClasses = 'block transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500';
    
    $variantClasses = [
        'default' => 'bg-white border border-gray-300 text-gray-900 focus:border-blue-500',
        'filled' => 'bg-gray-100 border border-transparent text-gray-900 focus:bg-white focus:border-blue-500',
        'outline' => 'bg-transparent border border-gray-300 text-gray-900 focus:border-blue-500',
        'underlined' => 'bg-transparent border-t-0 border-x-0 border-b border-gray-300 text-gray-900 rounded-none focus:border-blue-500',
    ];
    
    $sizeClasses = [
        'xs' => 'text-xs px-2 py-1 rounded',
        'sm' => 'text-sm px-3 py-1.5 rounded',
        'md' => 'text-sm px-4 py-2 rounded-md',
        'lg' => 'text-base px-5 py-2.5 rounded-md',
        'xl' => 'text-lg px-6 py-3 rounded-md',
    ];
    
    $stateClasses = [
        'disabled' => 'opacity-50 cursor-not-allowed bg-gray-100',
        'readonly' => 'cursor-default bg-gray-50',
        'error' => 'border-red-500 focus:border-red-500 focus:ring-red-500',
    ];
    
    $fullWidthClass = 'w-full';
    $hasIconClass = 'pl-10';
    $hasTrailingIconClass = 'pr-10';
    
    $classes = $baseClasses . ' ' . 
        $variantClasses[$variant] . ' ' . 
        $sizeClasses[$size] . ' ' . 
        ($disabled ? $stateClasses['disabled'] : '') . ' ' . 
        ($readonly ? $stateClasses['readonly'] : '') . ' ' . 
        ($error ? $stateClasses['error'] : '') . ' ' . 
        ($fullWidth ? $fullWidthClass : '') . ' ' .
        ($leadingIcon ? $hasIconClass : '') . ' ' .
        ($trailingIcon ? $hasTrailingIconClass : '');
    
    $wrapperClass = 'relative' . ($fullWidth ? ' w-full' : '');
@endphp

<div class="space-y-1 {{ $fullWidth ? 'w-full' : '' }}">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="{{ $wrapperClass }}">
        @if ($leadingIcon)
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                {{ $leadingIcon }}
            </div>
        @endif

        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            {{ $disabled ? 'disabled' : '' }}
            {{ $readonly ? 'readonly' : '' }}
            {{ $attributes->merge(['class' => $classes]) }}
        />

        @if ($trailingIcon)
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                {{ $trailingIcon }}
            </div>
        @endif
    </div>

    @if ($helperText && !$error)
        <p class="mt-1 text-sm text-gray-500">{{ $helperText }}</p>
    @endif

    @if ($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>