@php
$products = [
    [
        'title' => 'Server Rental',
        'description' => 'High-availability, secure, and scalable servers to support your business applications.',
        'image' => '<i class="fa-solid fa-server"></i>',
        'link' => '#'
    ],
    [
        'title' => 'Free Website Development',
        'description' => 'Professional website development included with every server subscription.',
        'image' => '<i class="fa-solid fa-globe"></i>',
        'link' => '#'
    ],
    [
        'title' => 'Free Mobile App Creation',
        'description' => 'We build Android/iOS apps to complement your online presence at no cost.',
        'image' => '<i class="fa-solid fa-mobile-alt"></i>',
        'link' => '#'
    ]
];

@endphp 
<section id="what-we-do" class="relative px-4 ">
    <div class="absolute inset-0">
        <img src="{{ asset("images/what-we-do-bg.jpg") }}" alt="What We Do" class="w-full object-cover h-auto" />
    </div>
    <div class="absolute top-24 right-0 top-bottom hidden lg:block">
        <img src="{{ asset("images/blue-circle.png") }}" alt="Blue Circle" />
    </div>
    <div class="z-10 relative text-black py-16 space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                WHAT WE DO
            </p>
            <div class="space-y-2">
                <h3 class="text-4xl font-bold">
                    Build Your Digital Business
                </h3>
                <h3 class="text-4xl font-bold">
                    With Our Hosting & Dev Solutions
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