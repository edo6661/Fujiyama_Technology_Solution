@props([
    'title' => null,
    'description' => null,
    'icon' => null,
    'projects' => [],
    'image' => null,
    'href' => '#', 
])

<div
    class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-blue/20">
    <div class="relative overflow-hidden">
        <div
            class="aspect-video bg-gradient-to-br from-primary-blue/10 to-primary-blue/5 flex items-center justify-center">
            <img src="{{ asset($image) }}" alt="{{ $title }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
        </div>
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
    </div>

    <div class="p-6 space-y-4">
        <div class="flex items-start gap-4">
            <div class="container-category-icon flex-shrink-0 mt-1">
                {!! $icon !!}
            </div>
            <div class="space-y-2">
                <h4
                    class="text-black text-xl font-semibold group-hover:text-primary-blue transition-colors duration-300">
                    {{ $title }}
                </h4>
                <p class="font-nunito-sans text-primary-gray leading-relaxed text-sm">
                    {{ $description }}
                </p>
            </div>
        </div>

        <div class="space-y-2">
            <p class="text-sm font-semibold text-primary-blue">Key Projects:</p>
            <ul class="space-y-1">
                @foreach ($projects as $project)
                    <li class="text-sm text-primary-gray font-nunito-sans flex items-center gap-2">
                        <div class="w-1.5 h-1.5 bg-primary-blue rounded-full flex-shrink-0"></div>
                        {{ $project }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="pt-2">
            <x-features.home.link-learn-more-project-category-item :href="$href"/>
        </div>
    </div>
</div>

<style>
    .container-project-icon i {
        font-size: 4rem;
        color: var(--primary-blue);
        opacity: 0.3;
    }

    .container-category-icon i {
        font-size: 1.5rem;
        color: var(--primary-blue);
        transition: transform 0.3s ease;
    }

    .group:hover .container-category-icon i {
        transform: scale(1.1);
    }
</style>