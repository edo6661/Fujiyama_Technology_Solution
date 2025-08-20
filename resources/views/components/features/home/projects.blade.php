@php
    $projectCategories = [
        [
            'title' => 'Government Systems',
            'description' =>
                'e-Government portals, digital licensing, and public data platforms that enhance public service efficiency.',
            'icon' => '<i class="fa-solid fa-building-columns"></i>',
            'projects' => ['Digital Licensing System', 'Public Data Portal', 'e-Government Services'],
            'image' => 'images/projects/government-mockup.jpg',
            'href' => route('project.government-systems'), 
        ],
        [
            'title' => 'Enterprise Solutions',
            'description' => 'Custom ERP, CRM, and logistics management systems tailored for business optimization.',
            'icon' => '<i class="fa-solid fa-building"></i>',
            'projects' => ['Custom ERP System', 'CRM Solutions', 'Logistics Management'],
            'image' => 'images/projects/enterprise-mockup.jpg',
            'href' => route('project.enterprise-solutions'), 
        ],
        [
            'title' => 'Community & Social Platforms',
            'description' => 'Mobile apps for communities and social innovation projects connecting people nationwide.',
            'icon' => '<i class="fa-solid fa-users-gear"></i>',
            'projects' => ['Community Mobile Apps', 'Social Innovation Platform', 'Digital Community Hub'],
            'image' => 'images/projects/community-mockup.jpg',
            'href' => route('project.community-social-platforms'), 
        ],
        [
            'title' => 'Technology Integrations',
            'description' =>
                'AI, IoT, and blockchain solutions specifically adapted to the Indonesian market landscape.',
            'icon' => '<i class="fa-solid fa-microchip"></i>',
            'projects' => ['AI-Powered Analytics', 'IoT Smart Solutions', 'Blockchain Integration'],
            'image' => 'images/projects/technology-mockup.jpg',
            'href' => route('project.technology-integrations'), 
        ],
    ];
@endphp

<section id="projects" class="relative px-4 py-16">
    <div class="absolute inset-0 bg-gradient-to-b from-white to-gray-50"></div>
    <div class="absolute top-20 right-12 animate-pulse rotate hidden lg:block">
        <div class="w-24 h-24 bg-primary-blue/10 rounded-full"></div>
    </div>
    <div class="absolute bottom-20 left-12 animate-pulse top-bottom hidden lg:block">
        <div class="w-16 h-16 bg-primary-blue/15 rounded-full"></div>
    </div>

    <div class="relative z-10 text-black space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Our Projects
            </p>
            <div class="space-y-2">
                <h3 class="text-3xl font-bold">
                    Transforming Ideas Into
                </h3>
                <h3 class="text-3xl font-bold">
                    Digital Reality
                </h3>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
            @foreach ($projectCategories as $category)
                <x-features.home.project-category-item 
                    :title="$category['title']" 
                    :description="$category['description']" 
                    :icon="$category['icon']"
                    :projects="$category['projects']" 
                    :image="$category['image']" 
                    :href="$category['href']" />
            @endforeach
        </div>

        {{-- <div class="flex justify-center mt-12">
            <x-shared.link-button variant="primary" class="w-fit">
                VIEW ALL PROJECTS
            </x-shared.link-button>
        </div> --}}
    </div>
</section>

<style>
    .rotate {
        animation: rotate 8s linear infinite;
    }

    .top-bottom {
        animation: topBottom 6s ease-in-out infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @keyframes topBottom {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }
</style>