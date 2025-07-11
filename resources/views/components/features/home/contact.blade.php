@php
$contactInfo = [
    [
        'title' => 'Office Address',
        'content' => 'NEO SOHO Mall, Central Park, Jakarta Barat, Indonesia',
        'icon' => '<i class="fa-solid fa-location-dot"></i>',
    ],
    [
        'title' => 'Phone Number',
        'content' => ' 0895-2933-6179',
        'icon' => '<i class="fa-solid fa-phone"></i>',
    ],
    [
        'title' => 'Email Address',
        'content' => 'info@fts.biz.id',
        'icon' => '<i class="fa-solid fa-envelope"></i>',
    ],
    [
        'title' => 'Business Hours',
        'content' => 'Mon - Fri: 9:00 AM - 6:00 PM WIB',
        'icon' => '<i class="fa-solid fa-clock"></i>',
    ],
];

$socialMedia = [
    [
        'name' => 'LinkedIn',
        'icon' => '<i class="fa-brands fa-linkedin-in"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-600'
    ],
    [
        'name' => 'Instagram',
        'icon' => '<i class="fa-brands fa-instagram"></i>',
        'url' => '#',
        'color' => 'hover:bg-pink-600'
    ],
    [
        'name' => 'Twitter',
        'icon' => '<i class="fa-brands fa-twitter"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-400'
    ],
    [
        'name' => 'Facebook',
        'icon' => '<i class="fa-brands fa-facebook-f"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-700'
    ],
];
@endphp

<section id="contact" class="relative px-4 py-16">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white"></div>
    <div class="absolute top-12 right-12 animate-pulse rotate hidden lg:block">
        <div class="w-20 h-20 bg-primary-blue/10 rounded-full"></div>
    </div>
    <div class="absolute bottom-12 left-12 animate-pulse top-bottom hidden lg:block">
        <div class="w-16 h-16 bg-primary-blue/15 rounded-full"></div>
    </div>
    
    <div class="relative z-10 text-black space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Contact Us
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-12">
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <h4 class="text-xl font-semibold text-black flex items-center gap-3">
                            <i class="fa-solid fa-building text-primary-blue"></i>
                            Our Office Location
                        </h4>
                    </div>
                    <div class="relative overflow-hidden">
                        <img 
                            src="{{ asset('images/soho.png') }}" 
                            alt="NEO SOHO Mall Building - Our Office Location"
                            class="w-full h-80 object-cover transition-transform duration-500 hover:scale-105"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-medium">NEO SOHO Mall</p>
                            <p class="text-xs opacity-90">Central Park, Jakarta Barat</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    @foreach ($contactInfo as $info)
                        <x-features.home.contact-info-item
                            :title="$info['title']"
                            :content="$info['content']"
                            :icon="$info['icon']"
                        />
                    @endforeach
                </div>
            </div>
            
            <div class="space-y-8">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 space-y-6">
                    <div class="space-y-2">
                        <h4 class="text-2xl font-bold text-black">Send Us a Message</h4>
                        <p class="text-primary-gray font-nunito-sans">
                            Ready to start your digital transformation? Let's discuss your project.
                        </p>
                    </div>
                    
                    <form class="space-y-4">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-black mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-blue transition-colors duration-300" placeholder="Your full name">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-black mb-2">Email Address</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-blue transition-colors duration-300" placeholder="your.email@example.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-black mb-2">Subject</label>
                            <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-blue transition-colors duration-300">
                                <option>Select a service</option>
                                <option>Custom Software Development</option>
                                <option>Mobile Apps & Digital Platforms</option>
                                <option>IT Consulting & System Integration</option>
                                <option>Smart Government Solutions</option>
                                <option>Digital Transformation</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-black mb-2">Message</label>
                            <textarea rows="7" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary-blue transition-colors duration-300 resize-none" placeholder="Tell us about your project or challenges..."></textarea>
                        </div>
                        
                        <x-shared.link-button variant="primary" class="w-full">
                            SEND MESSAGE
                        </x-shared.link-button>
                    </form>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h4 class="text-xl font-semibold text-black mb-4">Connect With Us</h4>
                    <div class="flex gap-4">
                        @foreach ($socialMedia as $social)
                            <a href="{{ $social['url'] }}" 
                               class="w-12 h-12 bg-primary-blue text-white rounded-lg flex items-center justify-center transition-all duration-300 {{ $social['color'] }} hover:scale-110"
                               title="{{ $social['name'] }}">
                                {!! $social['icon'] !!}
                            </a>
                        @endforeach
                    </div>
                    <p class="text-sm text-primary-gray font-nunito-sans mt-4">
                        Follow us for the latest updates on technology trends and our project highlights.
                    </p>
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
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes topBottom {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>