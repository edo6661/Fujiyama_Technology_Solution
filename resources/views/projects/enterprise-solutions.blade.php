<x-layouts.app title="Enterprise Solutions">
    <section class="relative px-4 py-16">
        <!-- Hero Section -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative z-10 text-center space-y-8">
            <div class="flex justify-center">
                <div class="p-4 bg-primary-blue/10 rounded-full">
                    <i class="fa-solid fa-building text-4xl text-primary-blue"></i>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-black">Enterprise Solutions</h1>
                <p class="text-lg text-primary-gray font-nunito-sans max-w-3xl mx-auto">
                    Enterprise solutions tailored to your business needs. From custom ERP systems, CRM, 
                    to integrated logistics management for optimal company operations.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto space-y-12">
            <!-- Overview -->
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-black">Business Optimization Through Technology</h2>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        FTS develops enterprise systems that enable companies to optimize all 
                        their business processes through targeted and user-friendly technology.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Integrated Custom ERP System</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">CRM Solutions for customer management</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Efficient Logistics Management</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/projects/enterprise-mockup.jpg') }}" 
                         alt="Enterprise Solutions" 
                         class="w-full rounded-lg shadow-xl max-h-[420px]">
                </div>
            </div>

            <!-- Key Projects -->
            <div class="space-y-8">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-black">Solutions We Offer</h2>
                    <p class="text-primary-gray font-nunito-sans">
                        Enterprise systems that have been proven to increase business efficiency
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-sitemap text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">Custom ERP System</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Enterprise resource planning system customized to your business workflow.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-users-cog text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">CRM Solutions</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Customer relationship management solution to increase customer loyalty and retention.
                        </p>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-truck text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">Logistics Management</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Logistics management system for supply chain and inventory management optimization.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Benefits -->
            <div class="bg-gradient-to-r from-primary-blue/5 to-primary-blue/10 rounded-xl p-8">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl font-bold text-black">Our Solution Advantages</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-rocket text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">High Scalability</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">System that can grow with business development</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-cogs text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">Process Automation</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Workflow automation for maximum efficiency</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-chart-bar text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">Real-time Reporting</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Real-time reports and analytics for decision making</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-handshake text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">24/7 Support</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Continuous technical support and maintenance</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industries We Serve -->
            <div class="space-y-8">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-black">Industries We Serve</h2>
                    <p class="text-primary-gray font-nunito-sans">
                        Experience across various industry sectors
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-industry text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Manufacturing</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-store text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Retail & E-commerce</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-heartbeat text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Healthcare</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-graduation-cap text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Education</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-car text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Transportation</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white border border-gray-200 rounded-lg">
                        <i class="fa-solid fa-building text-2xl text-primary-blue"></i>
                        <span class="font-semibold">Real Estate</span>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Optimize Your Business?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Consult your enterprise system needs with our expert team
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Free Consultation
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>