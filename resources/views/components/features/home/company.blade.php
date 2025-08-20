@php
    $companyStats = [
        [
            'number' => '95%',
            'label' => 'Indonesian Team',
            'description' => 'Local talent with global perspective'
        ],
        [
            'number' => '100+',
            'label' => 'Projects Completed',
            'description' => 'Successful digital solutions delivered'
        ],
        [
            'number' => '5+',
            'label' => 'Years Experience',
            'description' => 'Proven expertise in IT solutions'
        ],
        [
            'number' => '24/7',
            'label' => 'Support Available',
            'description' => 'Round-the-clock technical assistance'
        ]
    ];

    $companyValues = [
        [
            'title' => 'Innovation First',
            'description' => 'We embrace cutting-edge technology to deliver solutions that drive real business value.',
            'icon' => '<i class="fa-solid fa-lightbulb"></i>'
        ],
        [
            'title' => 'Local Expertise',
            'description' => 'Deep understanding of Indonesian market needs combined with global tech standards.',
            'icon' => '<i class="fa-solid fa-users"></i>'
        ],
        [
            'title' => 'Quality Assurance',
            'description' => 'Japanese-rooted precision ensures every solution meets the highest quality standards.',
            'icon' => '<i class="fa-solid fa-shield-halved"></i>'
        ],
        [
            'title' => 'Partnership Focus',
            'description' => 'Building long-term relationships through transparent collaboration and shared success.',
            'icon' => '<i class="fa-solid fa-handshake"></i>'
        ]
    ];
@endphp

<section id="company" class="relative px-4 py-16">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-50 to-white"></div>
    <div class="absolute top-20 left-12 animate-pulse rotate hidden lg:block">
        <div class="w-32 h-32 bg-primary-blue/5 rounded-full"></div>
    </div>
    <div class="absolute bottom-20 right-12 animate-pulse top-bottom hidden lg:block">
        <div class="w-20 h-20 bg-primary-blue/10 rounded-full"></div>
    </div>

    <div class="relative z-10 text-black space-y-16">
        <!-- Header Section -->
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Our Company
            </p>
            <div class="space-y-4">
                <h3 class="text-3xl font-bold">
                    Bridging Japan's Technology Excellence
                </h3>
                <h3 class="text-3xl font-bold">
                    with Indonesia's Digital Future
                </h3>
            </div>
        </div>

        <!-- Company Overview -->
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-12 items-center">
            <div class="space-y-6">
                <div class="space-y-4">
                    <h4 class="text-2xl font-bold text-black">
                        PT Fujiyama Technology Solutions
                    </h4>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        Founded with a vision to transform Indonesia's digital landscape, FTS combines Japanese technological precision with deep local market understanding. We are more than just a technology company – we are digital transformation partners committed to building solutions that truly matter.
                    </p>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        Our diverse team of Indonesian professionals, supported by Japanese methodologies, creates innovative solutions for businesses, government institutions, and communities across the archipelago.
                    </p>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <div class="flex items-start gap-4">
                        <div class="container-vision-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <div class="space-y-2">
                            <h5 class="text-lg font-semibold text-black">Our Vision</h5>
                            <p class="text-primary-gray font-nunito-sans text-sm">
                                To be Indonesia's leading digital transformation partner, empowering businesses and communities through innovative technology solutions that bridge global excellence with local insights.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <div class="flex items-start gap-4">
                        <div class="container-mission-icon">
                            <i class="fa-regular fa-circle-dot"></i>
                        </div>
                        <div class="space-y-2">
                            <h5 class="text-lg font-semibold text-black">Our Mission</h5>
                            <p class="text-primary-gray font-nunito-sans text-sm">
                                To deliver cutting-edge IT solutions that solve real-world challenges, enhance operational efficiency, and drive sustainable growth for our clients while contributing to Indonesia's digital advancement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="bg-gradient-to-br from-primary-blue/10 to-primary-blue/5 rounded-2xl p-8">
                    <img src="{{ asset('images/soho.png') }}" alt="FTS Team" 
                         class="w-full h-80 object-cover rounded-xl shadow-lg">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-primary-blue text-white p-6 rounded-xl shadow-xl">
                    <div class="text-center">
                        <div class="text-2xl font-bold">2019</div>
                        <div class="text-sm">Founded</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Statistics -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8">
                @foreach ($companyStats as $stat)
                    <x-features.home.company-stat-item
                        :number="$stat['number']"
                        :label="$stat['label']"
                        :description="$stat['description']"
                    />
                @endforeach
            </div>
        </div>

        <!-- Company Values -->
        <div class="space-y-8">
            <div class="text-center space-y-4">
                <h4 class="text-2xl font-bold text-black">
                    Our Core Values
                </h4>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    These fundamental principles guide everything we do and shape how we approach every project and partnership.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                @foreach ($companyValues as $value)
                    <x-features.home.company-value-item
                        :title="$value['title']"
                        :description="$value['description']"
                        :icon="$value['icon']"
                    />
                @endforeach
            </div>
        </div>

        <!-- Call to Action -->
        <div class="bg-gradient-to-r from-primary-blue to-primary-blue/90 rounded-2xl p-8 text-center text-white">
            <div class="space-y-6">
                <h4 class="text-2xl font-bold">
                    Ready to Transform Your Business?
                </h4>
                <p class="font-nunito-sans max-w-2xl mx-auto">
                    Join the many organizations that trust FTS to deliver innovative digital solutions. Let's discuss how we can help accelerate your digital transformation journey.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <x-shared.link-button variant="secondary" class="w-fit">
                        START YOUR PROJECT
                    </x-shared.link-button>
                    <x-shared.link-button variant="primary" class="w-fit">
                        LEARN MORE ABOUT US
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .rotate {
        animation: rotate 8s linear infinite;
    }
    
    .top-bottom {
        animation: topBottom 6s ease-in-out infinite;
    }
    
    .container-vision-icon i,
    .container-mission-icon i {
        font-size: 1.5rem;
        color: var(--primary-blue);
        transition: transform 0.3s ease;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes topBottom {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>