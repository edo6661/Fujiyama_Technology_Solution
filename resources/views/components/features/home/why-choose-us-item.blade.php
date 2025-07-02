@props([
    'title' => null,
    'description' => null,
    'icon' => null,
])

<div class="group flex items-start text-left gap-4 px-6 py-8 bg-white rounded-lg shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-primary-blue/20">
    <div class="container-icon-why-choose flex-shrink-0 mt-1">
        {!! $icon !!}
    </div>
    <div class="space-y-3">
        <h4 class="text-black text-xl font-semibold group-hover:text-primary-blue transition-colors duration-300">
            {{ $title }}
        </h4>
        <p class="font-nunito-sans text-primary-gray leading-relaxed">
            {{ $description }}
        </p>
    </div>
</div>

<style>
    .container-icon-why-choose i {
        font-size: 2.5rem;
        color: var(--primary-blue);
        transition: transform 0.3s ease;
    }
    
    .group:hover .container-icon-why-choose i {
        transform: scale(1.1);
    }
</style>