@props([
    'size' => 'base',
    'accent' => false,
    'level' => null,
])

@php
$classes = 'font-medium';

// Tambahkan class untuk accent
if ($accent) {
    $classes .= ' text-[var(--color-accent-content)]';
} else {
    $classes .= ' text-zinc-800 dark:text-white';
}

// Tambahkan class untuk ukuran
switch ($size) {
    case 'xl':
        $classes .= ' text-2xl';
        break;
    case 'lg':
        $classes .= ' text-base';
        break;
    default:
        $classes .= ' text-sm';
        break;
}

$classes .= ' [&:has(+[data-blade-subheading])]:mb-2 [[data-blade-subheading]+&]:mt-2';
@endphp

@switch((int) $level)
    @case(1)
        <h1 {{ $attributes->class([$classes]) }} data-blade-heading>{{ $slot }}</h1>
        @break
    @case(2)
        <h2 {{ $attributes->class([$classes]) }} data-blade-heading>{{ $slot }}</h2>
        @break
    @case(3)
        <h3 {{ $attributes->class([$classes]) }} data-blade-heading>{{ $slot }}</h3>
        @break
    @case(4)
        <h4 {{ $attributes->class([$classes]) }} data-blade-heading>{{ $slot }}</h4>
        @break
    @default
        <div {{ $attributes->class([$classes]) }} data-blade-heading>{{ $slot }}</div>
@endswitch