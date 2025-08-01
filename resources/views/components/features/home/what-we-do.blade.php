@php
$products = [
    [
        'title' => 'Custom Software Development',
        'description' => 'Tailored solutions for businesses and governments to optimize operations and services.',
        'image' => '<i class="fa-solid fa-server"></i>',
        'link' => '#'
    ],
    [
        'title' => 'Mobile Apps & Digital Platforms',
        'description' => 'Innovative apps and social media solutions connecting people and communities.',
        'image' => '<i class="fa-solid fa-globe"></i>',
        'link' => '#'
    ],
    [
        'title' => 'IT Consulting & System Integration',
        'description' => 'Expertise to integrate the latest global technologies into your business.',
        'image' => '<i class="fa-solid fa-mobile-alt"></i>',
        'link' => '#'
    ],
    [
        'title' => 'Smart Government Solutions',
        'description' => 'Systems designed to support governance and public service innovation.',
        'image' => '<i class="fa-solid fa-mobile-alt"></i>',
        'link' => '#'
    ],
    [
        'title' => 'Digital Transformation',
        'description' => 'Helping enterprises stay competitive in the rapidly changing digital landscape.',
        'image' => '<i class="fa-solid fa-mobile-alt"></i>',
        'link' => '#'
    ],
];

@endphp 
<section id="what-we-do" class="relative px-4 ">
    <div class="absolute top-24 right-0 top-bottom hidden lg:block">
        <img src="{{ asset("images/blue-circle.png") }}" alt="Blue Circle" />
    </div>
    <div class="z-10 relative text-black py-16 space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Services
            </p>
            <div class="space-y-2">
                <h3 class="text-3xl font-bold">
                    Build Your Digital Business
                </h3>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($products as $product)
                <x-features.home.what-we-do-product-item
                    :title="$product['title']"
                    :description="$product['description']"
                    :image="$product['image']"
                    :link="$product['link']"
                />
            @endforeach
            
        </div>
    </div>
</section>