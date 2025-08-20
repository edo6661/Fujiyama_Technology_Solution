@php
$contactInfo = [
    [
        'title' => 'Office Address',
        'content' => 'NEO SOHO Mall, Central Park, Jakarta Barat, Indonesia',
        'icon' => '<i class="fa-solid fa-location-dot"></i>',
        'link' => 'https://maps.google.com/?q=NEO+SOHO+Mall',
    ],
    [
        'title' => 'Phone Number',
        'content' => '+62 895-2933-6179',
        'icon' => '<i class="fa-solid fa-phone"></i>',
        'link' => 'tel:+6289529336179',
    ],
    [
        'title' => 'Email Address',
        'content' => 'info@fts.biz.id',
        'icon' => '<i class="fa-solid fa-envelope"></i>',
        'link' => 'mailto:info@fts.biz.id',
    ],
    [
        'title' => 'Business Hours',
        'content' => 'Mon - Fri: 9:00 AM - 6:00 PM WIB',
        'icon' => '<i class="fa-solid fa-clock"></i>',
        'link' => null,
    ],
];

$socialMedia = [
    [
        'name' => 'LinkedIn',
        'icon' => '<i class="fa-brands fa-linkedin-in"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-600 hover:shadow-blue-600/25'
    ],
    [
        'name' => 'Instagram',
        'icon' => '<i class="fa-brands fa-instagram"></i>',
        'url' => '#',
        'color' => 'hover:bg-gradient-to-r hover:from-purple-500 hover:to-pink-500 hover:shadow-pink-500/25'
    ],
    [
        'name' => 'Twitter',
        'icon' => '<i class="fa-brands fa-twitter"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-400 hover:shadow-blue-400/25'
    ],
    [
        'name' => 'Facebook',
        'icon' => '<i class="fa-brands fa-facebook-f"></i>',
        'url' => '#',
        'color' => 'hover:bg-blue-700 hover:shadow-blue-700/25'
    ],
];

$serviceOptions = [
    'General Inquiry',
    'Custom Software Development', 
    'Mobile Apps & Digital Platforms',
    'IT Consulting & System Integration',
    'Smart Government Solutions',
    'Digital Transformation Services',
    'Partnership Opportunities',
    'Technical Support',
];
@endphp

<section id="contact" class="relative overflow-hidden">
    <!-- Enhanced Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50/30 to-indigo-100/20"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute top-20 right-20 w-32 h-32 bg-primary-blue/5 rounded-full animate-pulse blur-sm"></div>
    <div class="absolute top-40 left-10 w-20 h-20 bg-indigo-200/20 rounded-full animate-bounce" style="animation-delay: 2s;"></div>
    <div class="absolute bottom-20 right-40 w-24 h-24 bg-blue-200/15 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-40 left-20 w-16 h-16 bg-primary-blue/10 rounded-full animate-bounce" style="animation-delay: 3s;"></div>
    
    <!-- Geometric Patterns -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-32 left-32 w-2 h-2 bg-primary-blue rotate-45 animate-pulse"></div>
        <div class="absolute top-64 right-64 w-3 h-3 bg-indigo-400 rotate-45 animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-48 left-48 w-2 h-2 bg-blue-500 rotate-45 animate-pulse" style="animation-delay: 0.5s;"></div>
    </div>

    <div class="relative z-10 px-4 py-20">
        <div class="max-w-7xl mx-auto">
            <!-- Enhanced Header -->
            <div class="text-center mb-16 space-y-6">
                <div class="inline-flex items-center gap-2 bg-primary-blue/10 text-primary-blue px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fa-solid fa-paper-plane animate-pulse"></i>
                    Get In Touch
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                    Let's Start Your
                    <span class="bg-gradient-to-r from-primary-blue to-indigo-600 bg-clip-text text-transparent">
                        Digital Journey
                    </span>
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto font-nunito-sans">
                    Ready to transform your business with innovative technology solutions? We're here to help you succeed.
                </p>
            </div>

            <div class="grid lg:grid-cols-5 gap-12 items-start">
                <!-- Contact Form - Enhanced -->
                <div class="lg:col-span-3 space-y-8">
                    <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-xl border border-white/20 p-8 md:p-10">
                        <div class="space-y-8">
                            <div class="space-y-4">
                                <h3 class="text-2xl font-bold text-gray-900">Send Us a Message</h3>
                                <p class="text-gray-600 font-nunito-sans">
                                    Share your project details and we'll get back to you within 24 hours with a personalized consultation.
                                </p>
                            </div>
                            
                            <form class="space-y-6">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-800">Full Name *</label>
                                        <input 
                                            type="text" 
                                            required
                                            class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all duration-300 hover:bg-white" 
                                            placeholder="Enter your full name"
                                        >
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-800">Email Address *</label>
                                        <input 
                                            type="email" 
                                            required
                                            class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all duration-300 hover:bg-white" 
                                            placeholder="your.email@company.com"
                                        >
                                    </div>
                                </div>
                                
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-800">Phone Number</label>
                                        <input 
                                            type="tel" 
                                            class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all duration-300 hover:bg-white" 
                                            placeholder="+62 xxx-xxxx-xxxx"
                                        >
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block text-sm font-semibold text-gray-800">Service Interest</label>
                                        <select class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all duration-300 hover:bg-white">
                                            @foreach ($serviceOptions as $service)
                                                <option value="{{ $service }}">{{ $service }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="space-y-2">
                                    <label class="block text-sm font-semibold text-gray-800">Project Details *</label>
                                    <textarea 
                                        rows="6" 
                                        required
                                        class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent transition-all duration-300 hover:bg-white resize-none" 
                                        placeholder="Tell us about your project goals, timeline, and any specific requirements..."
                                    ></textarea>
                                </div>

                                <div class="flex items-center gap-3">
                                    <input type="checkbox" id="privacy" class="w-4 h-4 text-primary-blue bg-gray-100 border-gray-300 rounded focus:ring-primary-blue">
                                    <label for="privacy" class="text-sm text-gray-600">
                                        I agree to the <a href="#" class="text-primary-blue hover:underline">Privacy Policy</a> and <a href="#" class="text-primary-blue hover:underline">Terms of Service</a>
                                    </label>
                                </div>
                                
                                <button 
                                    type="submit" 
                                    class="group relative w-full bg-gradient-to-r from-primary-blue to-indigo-600 text-white font-semibold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl hover:shadow-primary-blue/25 transform hover:-translate-y-1 transition-all duration-300"
                                >
                                    <span class="flex items-center justify-center gap-3">
                                        <i class="fa-solid fa-paper-plane group-hover:rotate-12 transition-transform duration-300"></i>
                                        Send Message
                                        <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information & Office - Enhanced -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Contact Cards -->
                    <div class="space-y-4">
                        @foreach ($contactInfo as $info)
                            <div class="group bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/30 hover:bg-white/90 hover:shadow-xl hover:border-primary-blue/20 transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <div class="container-contact-icon-enhanced flex-shrink-0">
                                        {!! $info['icon'] !!}
                                    </div>
                                    <div class="space-y-1 flex-1">
                                        <h5 class="text-gray-900 font-semibold group-hover:text-primary-blue transition-colors duration-300">
                                            {{ $info['title'] }}
                                        </h5>
                                        @if($info['link'])
                                            <a href="{{ $info['link'] }}" class="block font-nunito-sans text-gray-600 hover:text-primary-blue transition-colors duration-300">
                                                {{ $info['content'] }}
                                            </a>
                                        @else
                                            <p class="font-nunito-sans text-gray-600">
                                                {{ $info['content'] }}
                                            </p>
                                        @endif
                                    </div>
                                    @if($info['link'])
                                        <i class="fa-solid fa-external-link-alt text-gray-400 group-hover:text-primary-blue transition-colors duration-300 text-sm"></i>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Office Image -->
                    <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-lg border border-white/30 overflow-hidden">
                        <div class="p-6 border-b border-gray-100">
                            <h4 class="text-xl font-semibold text-gray-900 flex items-center gap-3">
                                <i class="fa-solid fa-building text-primary-blue"></i>
                                Our Office Location
                            </h4>
                        </div>
                        <div class="relative group">
                            <img 
                                src="{{ asset('images/soho.png') }}" 
                                alt="NEO SOHO Mall - FTS Office Location"
                                class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white space-y-1">
                                <p class="text-lg font-semibold">NEO SOHO Mall</p>
                                <p class="text-sm opacity-90">Central Park, Jakarta Barat</p>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                    <span class="text-xs">Open Now</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-white/30">
                        <h4 class="text-xl font-semibold text-gray-900 mb-4 flex items-center gap-3">
                            <i class="fa-solid fa-share-nodes text-primary-blue"></i>
                            Connect With Us
                        </h4>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($socialMedia as $social)
                                <a 
                                    href="{{ $social['url'] }}" 
                                    class="group flex items-center gap-3 p-4 bg-gray-50 rounded-xl hover:shadow-lg transition-all duration-300 {{ $social['color'] }}"
                                    title="Follow us on {{ $social['name'] }}"
                                >
                                    <div class="w-10 h-10 bg-primary-blue text-white rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                        {!! $social['icon'] !!}
                                    </div>
                                    <span class="text-gray-700 font-medium group-hover:text-white transition-colors duration-300">
                                        {{ $social['name'] }}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                        <p class="text-sm text-gray-600 font-nunito-sans mt-4 text-center">
                            Follow us for the latest tech insights and project showcases
                        </p>
                    </div>

                    <!-- Quick Response Promise -->
                    <div class="bg-gradient-to-r from-primary-blue to-indigo-600 text-white rounded-2xl p-6 shadow-lg">
                        <div class="text-center space-y-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto">
                                <i class="fa-solid fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-lg">Quick Response Guarantee</h5>
                                <p class="text-white/90 font-nunito-sans text-sm">
                                    We respond to all inquiries within 24 hours during business days
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA Section -->
            <div class="mt-16 text-center">
                <div class="bg-white/50 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-white/30">
                    <div class="space-y-4">
                        <h4 class="text-2xl font-bold text-gray-900">
                            Ready to Get Started?
                        </h4>
                        <p class="text-gray-600 font-nunito-sans max-w-2xl mx-auto">
                            Schedule a free consultation to discuss your project requirements and explore how we can help transform your business through technology.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-6">
                            <a 
                                href="tel:+6289529336179" 
                                class="group flex items-center gap-3 bg-green-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-600 hover:shadow-lg hover:shadow-green-500/25 transform hover:-translate-y-1 transition-all duration-300"
                            >
                                <i class="fa-solid fa-phone group-hover:rotate-12 transition-transform duration-300"></i>
                                Call Now
                            </a>
                            <a 
                                href="mailto:info@fts.biz.id" 
                                class="group flex items-center gap-3 bg-white text-primary-blue border-2 border-primary-blue px-6 py-3 rounded-xl font-semibold hover:bg-primary-blue hover:text-white hover:shadow-lg hover:shadow-primary-blue/25 transform hover:-translate-y-1 transition-all duration-300"
                            >
                                <i class="fa-solid fa-envelope group-hover:scale-110 transition-transform duration-300"></i>
                                Send Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .container-contact-icon-enhanced i {
        font-size: 1.5rem;
        color: var(--primary-blue);
        padding: 12px;
        background: rgba(59, 130, 246, 0.1);
        border-radius: 12px;
        transition: all 0.3s ease;
    }
    
    .group:hover .container-contact-icon-enhanced i {
        transform: scale(1.1);
        background: var(--primary-blue);
        color: white;
    }

    /* Enhanced form focus states */
    input:focus, textarea:focus, select:focus {
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    /* Custom scrollbar for textarea */
    textarea::-webkit-scrollbar {
        width: 6px;
    }
    
    textarea::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 3px;
    }
    
    textarea::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 3px;
    }
    
    textarea::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }

    /* Smooth animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
</style>