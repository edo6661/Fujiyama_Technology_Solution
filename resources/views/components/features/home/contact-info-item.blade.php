@props([
    'title' => null,
    'content' => null,
    'icon' => null,
])

<div class="group flex items-center gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-primary-blue/20">
    <div class="container-contact-icon flex-shrink-0">
        {!! $icon !!}
    </div>
    <div class="space-y-1">
        <h5 class="text-black font-semibold text-sm group-hover:text-primary-blue transition-colors duration-300">
            {{ $title }}
        </h5>
        <p class="font-nunito-sans text-primary-gray text-sm">
            {{ $content }}
        </p>
    </div>
</div>

<style>
    .container-contact-icon i {
        font-size: 1.5rem;
        color: var(--primary-blue);
        transition: transform 0.3s ease;
    }
    
    .group:hover .container-contact-icon i {
        transform: scale(1.1);
    }
</style>