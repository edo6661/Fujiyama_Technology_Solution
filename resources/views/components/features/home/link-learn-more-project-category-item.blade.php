@props([
    'href' => '#',
])
<a
    href="{{ $href }}"
    class="text-primary-blue font-semibold text-sm hover:text-primary-blue/80 transition-colors duration-300 flex items-center gap-2 group/btn w-fit">
    Learn More
    <i
        class="fa-solid fa-arrow-right text-xs group-hover/btn:translate-x-1 transition-transform duration-300"></i>
</a>