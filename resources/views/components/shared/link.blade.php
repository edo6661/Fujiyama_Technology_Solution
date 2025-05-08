@props([
    'external' => null,
    'accent' => true,
    'variant' => null,
    'strong' => false,
])

@php
$classes = 'inline font-medium underline-offset-[6px] hover:decoration-current';

// Variant styling
switch ($variant) {
    case 'ghost':
        $classes .= ' no-underline hover:underline';
        break;
    case 'subtle':
        $classes .= ' no-underline';
        break;
    default:
        $classes .= ' underline';
        break;
}

// Color styling berdasarkan data-color
$classes .= ' [[data-color]>&]:text-inherit [[data-color]>&]:decoration-current/20 dark:[[data-color]>&]:decoration-current/50 [[data-color]>&]:hover:decoration-current';

// Warna berdasarkan variant dan accent
if ($variant === 'subtle') {
    $classes .= ' text-zinc-500 dark:text-white/70 hover:text-zinc-800 dark:hover:text-white';
} else {
    if ($accent) {
        $classes .= ' text-[var(--color-accent-content)] decoration-[color-mix(in_oklab,var(--color-accent-content),transparent_80%)]';
    } else {
        $classes .= ' text-zinc-800 dark:text-white decoration-zinc-800/20 dark:decoration-white/20';
    }
}
@endphp

<a {{ $attributes->class([$classes]) }} data-blade-link @if($external) target="_blank" @endif>{{ $slot }}</a>