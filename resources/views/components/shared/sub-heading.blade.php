@props([
    'size' => 'base',
])

@php
$classes = '';

// Tambahkan class untuk ukuran
switch ($size) {
    case 'xl':
        $classes .= 'text-lg';
        break;
    case 'lg':
        $classes .= 'text-base';
        break;
    case 'sm':
        $classes .= 'text-xs';
        break;
    default:
        $classes .= 'text-sm';
        break;
}

// Tambahkan text color
$classes .= ' text-zinc-500 dark:text-white/70';
@endphp

<div {{ $attributes->class([$classes]) }} data-blade-subheading>
    {{ $slot }}
</div>