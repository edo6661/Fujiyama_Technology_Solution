<x-layouts.app title="IT Consulting & System Integration">
    <!-- Hero Section -->
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-left space-y-6">
                <div class="p-3 bg-primary-blue/10 rounded-full w-fit">
                    <i class="fa-solid fa-network-wired text-3xl text-primary-blue"></i>
                </div>
                <h1 class="text-4xl font-bold text-black">IT Consulting & System Integration</h1>
                <p class="text-lg text-primary-gray font-nunito-sans">
                    We architect technology solutions that align with your business goals, providing expert strategic
                    guidance and seamless system integration to drive efficiency and innovation.
                </p>
                <div class="flex gap-4 pt-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Get a Consultation
                    </x-shared.link-button>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="{{ asset('images/product/consulting-hero-mockup.jpg') }}" alt="IT Consulting"
                    class="rounded-lg shadow-xl w-full object-cover">
            </div>
        </div>
    </section>

    <!-- Our Approach Section -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Our Strategic Approach</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    Our proven methodology ensures every solution we deliver is engineered for measurable results and
                    sustainable, long-term value.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <!-- Step 1: Assess -->
                <div class="space-y-4">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-magnifying-glass-chart text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-bold text-xl">1. Assess & Analyze</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We perform a deep-dive analysis of your current technology landscape and business processes to
                        pinpoint critical challenges and unlock hidden opportunities.
                    </p>
                </div>
                <!-- Step 2: Strategize -->
                <div class="space-y-4">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-map-signs text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-bold text-xl">2. Strategize & Design</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We design a comprehensive IT roadmap and a resilient system architecture that is scalable,
                        secure, and built to achieve your specific business goals.
                    </p>
                </div>
                <!-- Step 3: Implement -->
                <div class="space-y-4">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-cogs text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-bold text-xl">3. Implement & Integrate</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Our expert team executes the entire implementation, managing integration with precision to
                        ensure a seamless transition and minimal business disruption.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Zig-Zag Layout Section -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto space-y-20">
            <!-- IT Consulting -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{ asset('images/product/consulting-strategy-mockup.jpg') }}" alt="Strategic IT Planning"
                        class="rounded-lg shadow-xl w-full">
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-black">Strategic IT Consulting</h2>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        Navigate the complexities of the digital world with confidence. Our consultants deliver critical
                        insights on emerging technology trends, risk management, and digital transformation to create a
                        competitive advantage for your business.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Technology Roadmap Development</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">IT Infrastructure Assessment</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Cybersecurity & Compliance Strategy</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- System Integration -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 lg:order-first order-last">
                    <h2 class="text-3xl font-bold text-black">Seamless System Integration</h2>
                    <p class="text-primary-gray font-nunito-sans leading-relaxed">
                        Break down data silos and unlock operational excellence. We specialize in connecting disparate
                        systems—from legacy platforms to modern CRM, ERP, and third-party APIs—to create a unified,
                        efficient, and automated technology ecosystem.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Custom API Development & Integration</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Cloud & On-Premise System Integration</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check-circle text-primary-blue"></i>
                            <span class="font-nunito-sans">Data Migration and Synchronization</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="{{ asset('images/services/system-integration.jpg') }}" alt="System Integration Diagram"
                        class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-black">Driving Tangible Business Results</h2>
            <div class="mt-8 bg-white p-8 rounded-lg shadow-lg">
                <img src="{{ asset('images/product/logo-client.jpg') }}" alt="Client Logo" class="h-12 mx-auto mb-6">
                <blockquote class="text-xl font-nunito-sans italic text-primary-gray">
                    "FTS's consulting team provided the strategic roadmap we desperately needed. Their system
                    integration work connected our sales and operations platforms, resulting in a 30% increase in
                    efficiency."
                </blockquote>
                <p class="mt-6 font-semibold">- Mark Johnson, COO of Innovate Solutions</p>
                <div class="mt-8">
                    <x-shared.link-button href="/case-studies/innovate-solutions" variant="secondary">
                        View Project Details
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Architect Your Future?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Let's discuss how our strategic IT consulting and system integration services can help you achieve
                    operational excellence and secure long-term success.
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Discuss Your Project
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
