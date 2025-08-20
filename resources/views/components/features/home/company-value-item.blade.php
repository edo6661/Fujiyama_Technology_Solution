@props([
    'title' => null,
    'description' => null,
    'icon' => null,
])

<div class="group bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 hover:border-primary-blue/20 p-6">
    <div class="flex items-start gap-4">
        <div class="container-value-icon flex-shrink-0 mt-1">
            {!! $icon !!}
        </div>
        <div class="space-y-3">
            <h5 class="text-lg font-semibold text-black group-hover:text-primary-blue transition-colors duration-300">
                {{ $title }}
            </h5>
            <p class="text-primary-gray font-nunito-sans text-sm leading-relaxed">
                {{ $description }}
            </p>
        </div>
    </div>
</div>

<style>
    .container-value-icon i {
        font-size: 1.8rem;
        color: var(--primary-blue);
        transition: transform 0.3s ease;
    }
    
    .group:hover .container-value-icon i {
        transform: scale(1.1);
    }
</style>