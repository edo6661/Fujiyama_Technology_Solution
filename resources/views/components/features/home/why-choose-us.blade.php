{{-- x-features.home.why-choose-us.blade.php --}}
@php
$advantages = [
    [
        'title' => 'Japanese Quality Standards',
        'description' => 'We maintain the highest quality standards and reliability inherited from our Japanese roots.',
        'icon' => '<i class="fa-solid fa-award"></i>',
    ],
    [
        'title' => 'Local Market Expertise',
        'description' => 'Deep understanding of Indonesian market needs and business culture for better solutions.',
        'icon' => '<i class="fa-solid fa-map-location-dot"></i>',
    ],
    [
        'title' => '95% Indonesian Team',
        'description' => 'Our predominantly local team ensures cultural fit, agility, and seamless communication.',
        'icon' => '<i class="fa-solid fa-users"></i>',
    ],
    [
        'title' => 'Global Technology Trends',
        'description' => 'Commitment to staying ahead with the latest global technology innovations and best practices.',
        'icon' => '<i class="fa-solid fa-globe"></i>',
    ],
    [
        'title' => 'Proven Track Record',
        'description' => 'Extensive experience delivering successful solutions for government and enterprise clients.',
        'icon' => '<i class="fa-solid fa-trophy"></i>',
    ],
];
@endphp

<section id="why-choose-us" class="relative px-4 py-16">
    <div class="absolute top-12 left-0 animate-pulse hidden lg:block">
        <div class="w-20 h-20 bg-primary-blue/10 rounded-full"></div>
    </div>
    <div class="absolute bottom-12 right-0 animate-pulse hidden lg:block">
        <div class="w-16 h-16 bg-primary-blue/10 rounded-full"></div>
    </div>
    
    <div class="relative z-10 text-black space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Why Choose Us
            </p>
            <div class="space-y-2">
                <h3 class="text-3xl font-bold">
                    Why FTS is Your Trusted
                </h3>
                <h3 class="text-3xl font-bold">
                    Digital Solutions Partner
                </h3>
            </div>
            <p class="text-primary-gray font-nunito-sans max-w-2xl">
                Combining Japanese excellence with Indonesian expertise to deliver world-class digital solutions tailored for your success.
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($advantages as $advantage)
                <x-features.home.why-choose-us-item
                    :title="$advantage['title']"
                    :description="$advantage['description']"
                    :icon="$advantage['icon']"
                />
            @endforeach
        </div>
    </div>
</section>