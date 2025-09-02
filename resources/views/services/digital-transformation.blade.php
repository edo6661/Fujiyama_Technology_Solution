<x-layouts.app title="Digital Transformation">
    <!-- Hero Section -->
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-left space-y-6">
                <div class="p-3 bg-primary-blue/10 rounded-full w-fit">
                    <i class="fa-solid fa-robot text-3xl text-primary-blue"></i>
                </div>
                <h1 class="text-4xl font-bold text-black">Digital Transformation</h1>
                <p class="text-lg text-primary-gray font-nunito-sans">
                    We help businesses reimagine their operations for the digital age, integrating innovative technology
                    to drive growth, enhance customer experiences, and create sustainable competitive advantages.
                </p>
                <div class="flex gap-4 pt-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Start Your Transformation
                    </x-shared.link-button>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="{{ asset('images/product/digital-transformation-hero.jpg') }}" alt="Digital Transformation"
                    class="rounded-lg shadow-xl w-full object-cover">
            </div>
        </div>
    </section>

    <!-- Core Pillars Section -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Our Core Pillars of Transformation</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-3xl mx-auto">
                    Our holistic approach focuses on four key areas to ensure a comprehensive and impactful digital
                    evolution for your business.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Pillar 1 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-gears text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-semibold text-xl mb-2">Process Automation</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We streamline and automate your core business processes to reduce manual effort, minimize
                        errors, and accelerate operational speed.
                    </p>
                </div>
                <!-- Pillar 2 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-chart-line text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-semibold text-xl mb-2">Data Analytics & Insights</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We transform your data into a strategic asset, implementing analytics tools to uncover
                        actionable insights for smarter decision-making.
                    </p>
                </div>
                <!-- Pillar 3 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-cloud text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-semibold text-xl mb-2">Cloud Adoption</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We migrate your infrastructure and applications to the cloud for enhanced scalability,
                        flexibility, and cost-efficiency.
                    </p>
                </div>
                <!-- Pillar 4 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <div
                        class="mx-auto w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-md mb-4">
                        <i class="fa-solid fa-comments text-2xl text-primary-blue"></i>
                    </div>
                    <h3 class="font-semibold text-xl mb-2">Customer Experience</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We help you create seamless, personalized, and engaging digital experiences to build lasting
                        customer loyalty.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- The Transformation Journey -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Your Transformation Journey with FTS</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    We guide you through every step of the transformation process, ensuring a smooth and successful
                    transition.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex gap-6 items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary-blue/10 text-primary-blue rounded-full flex items-center justify-center font-bold text-xl">
                            1</div>
                        <div>
                            <h3 class="font-semibold text-xl">Strategy & Roadmap</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">We collaborate with your team to develop
                                a clear vision and a detailed, phased roadmap for your digital transformation.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="flex gap-6 items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary-blue/10 text-primary-blue rounded-full flex items-center justify-center font-bold text-xl">
                            2</div>
                        <div>
                            <h3 class="font-semibold text-xl">Implementation & Integration</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">Our experts implement the new
                                technologies and integrate them seamlessly with your existing systems to ensure business
                                continuity.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="flex gap-6 items-start">
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-primary-blue/10 text-primary-blue rounded-full flex items-center justify-center font-bold text-xl">
                            3</div>
                        <div>
                            <h3 class="font-semibold text-xl">Adoption & Optimization</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">We provide training and support to ensure
                                your team adopts the new tools, and we continuously monitor performance to optimize for
                                the best results.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('images/product/transformation-journey.jpg') }}" alt="Transformation Journey"
                        class="rounded-lg shadow-xl w-full object-cover">
                </div>
            </div>
        </div>
    </section>


    <!-- Industry Use Cases Section -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Transforming Industries</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    Digital transformation is reshaping every industry. Here’s how we help our clients lead the change.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case 1: Retail -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 space-y-4">
                    <i class="fa-solid fa-store text-3xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl">Retail & E-commerce</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Creating omnichannel experiences, personalizing customer journeys, and optimizing supply chains
                        with data analytics.
                    </p>
                </div>
                <!-- Case 2: Finance -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 space-y-4">
                    <i class="fa-solid fa-landmark text-3xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl">Financial Services</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Automating back-office processes, enhancing security with fintech solutions, and delivering
                        digital banking services.
                    </p>
                </div>
                <!-- Case 3: Manufacturing -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 space-y-4">
                    <i class="fa-solid fa-industry text-3xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl">Manufacturing</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Implementing IoT for smart factories, using data for predictive maintenance, and digitizing the
                        supply chain for greater visibility.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Lead the Change?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Let's discuss how we can build a digital transformation strategy that future-proofs your business
                    and drives sustainable growth.
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Schedule a Strategic Session
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
