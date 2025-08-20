<x-layouts.app title="Government Systems">
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative z-10 text-center space-y-8">
            <div class="flex justify-center">
                <div class="p-4 bg-primary-blue/10 rounded-full">
                    <i class="fa-solid fa-building-columns text-4xl text-primary-blue"></i>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-black">Government Systems</h1>
                <p class="text-lg text-primary-gray font-nunito-sans max-w-3xl mx-auto">
                    Advanced e-Government solutions to enhance public service efficiency with integrated digital portals, 
                    licensing systems, and public data platforms.
                </p>
            </div>
        </div>
    </section>
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto space-y-12">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-black">Digital Transformation for Government</h2>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        FTS develops digital government systems that enable government institutions to provide 
                        public services that are more efficient, transparent, and easily accessible to the public.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Integrated e-Government portal</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Automated digital licensing system</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Secure public data platform</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/projects/government-mockup.jpg') }}" 
                         alt="Government Systems" 
                         class="w-full rounded-lg shadow-xl max-h-[420px] max-h-[420px]">
                </div>
            </div>
            <div class="space-y-8">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold text-black">Our Key Projects</h2>
                    <p class="text-primary-gray font-nunito-sans">
                        Various solutions we have developed for government institutions
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-file-contract text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">Digital Licensing System</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Digital licensing system that accelerates administrative processes and enhances transparency.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-database text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">Public Data Portal</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Public data portal that provides easy and secure access to government information.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                        <div class="flex justify-center">
                            <i class="fa-solid fa-globe text-3xl text-primary-blue"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-center">e-Government Services</h3>
                        <p class="text-primary-gray font-nunito-sans text-center">
                            Integrated online government services for easy public access.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-r from-primary-blue/5 to-primary-blue/10 rounded-xl p-8">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl font-bold text-black">Key Features</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-shield-alt text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">High Security</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Multi-layered security system to protect sensitive data</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-mobile-alt text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">Mobile Responsive</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Easy access from various devices</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-chart-line text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">Analytics Dashboard</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Analytics dashboard for performance monitoring</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-cog text-2xl text-primary-blue"></i>
                            <h4 class="font-semibold">Customizable</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Can be customized to institutional needs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Transform Public Services?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Contact us for consultation and discussion about your digital government system needs
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Contact Us
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>