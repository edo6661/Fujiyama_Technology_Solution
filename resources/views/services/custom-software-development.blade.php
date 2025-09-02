<x-layouts.app title="Custom Software Development">
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative z-10 text-center space-y-8">
            <div class="flex justify-center">
                <div class="p-4 bg-primary-blue/10 rounded-full">
                    <i class="fa-solid fa-code text-4xl text-primary-blue"></i>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-black">Custom Software Development</h1>
                <p class="text-lg text-primary-gray font-nunito-sans max-w-3xl mx-auto">
                    We design, build, and deploy bespoke software solutions tailored to your unique business processes,
                    ensuring scalability, security, and an optimal user experience.
                </p>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-black">Unlock Your Business Potential</h2>
            <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                Our custom software is built not just to solve problems, but to create opportunities for growth,
                efficiency, and innovation.
            </p>
            <div class="grid md:grid-cols-3 gap-8 mt-12 text-left">
                <div class="bg-gray-50 rounded-lg p-6">
                    <i class="fa-solid fa-rocket text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">Scalability & Growth</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We build robust applications that grow with your business, handling increased load and
                        complexity without compromising performance.
                    </p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <i class="fa-solid fa-gears text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">Streamlined Operations</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Automate manual tasks, integrate disparate systems, and improve workflows to boost productivity
                        across your organization.
                    </p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <i class="fa-solid fa-shield-halved text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">Enhanced Security</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Protect your sensitive data with software built on a foundation of best-in-class security
                        practices and compliance standards.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Our Structured Development Process</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    From concept to launch, we follow a transparent and collaborative process to ensure your project's
                    success.
                </p>
            </div>
            <div class="relative">
                <div class="absolute left-1/2 w-0.5 h-full bg-primary-blue/20 -translate-x-1/2"></div>
                <div class="space-y-12">
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <h3 class="font-bold text-xl">1. Discovery & Planning</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">We analyze your requirements, define
                                project scope, and create a detailed roadmap.</p>
                        </div>
                        <div
                            class="absolute left-1/2 w-8 h-8 bg-primary-blue rounded-full -translate-x-1/2 flex items-center justify-center text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-1/2 pl-8 text-left">
                            <h3 class="font-bold text-xl">2. UI/UX Design</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">We create intuitive and engaging
                                interfaces through wireframes, mockups, and prototypes.</p>
                        </div>
                        <div
                            class="absolute left-1/2 w-8 h-8 bg-primary-blue rounded-full -translate-x-1/2 flex items-center justify-center text-white">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <h3 class="font-bold text-xl">3. Agile Development</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">Our team builds your software in sprints,
                                allowing for regular feedback and adaptation.</p>
                        </div>
                        <div
                            class="absolute left-1/2 w-8 h-8 bg-primary-blue rounded-full -translate-x-1/2 flex items-center justify-center text-white">
                            <i class="fa-solid fa-arrows-spin"></i>
                        </div>
                    </div>
                    <div class="relative flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-1/2 pl-8 text-left">
                            <h3 class="font-bold text-xl">4. Testing & Deployment</h3>
                            <p class="text-primary-gray font-nunito-sans mt-1">We conduct rigorous testing before
                                deploying the application to a live environment.</p>
                        </div>
                        <div
                            class="absolute left-1/2 w-8 h-8 bg-primary-blue rounded-full -translate-x-1/2 flex items-center justify-center text-white">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 bg-white" x-data="{ activeTab: 'erp' }">
        <div class="max-w-6xl mx-auto">
            <div class="text-left mb-8">
                <h2 class="text-3xl font-bold text-black">Types of Software We Build</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-3xl">
                    From complex internal systems to customer-facing applications, we build reliable solutions for a
                    wide range of needs.
                </p>
            </div>
            <div x-show="activeTab === 'erp'" class="grid md:grid-cols-2 gap-12 items-center mt-8">
                <div class="order-2 md:order-1">
                    <img src="{{ asset('images/product/erp-mockup.jpg') }}" alt="ERP System"
                        class="rounded-lg shadow-md w-full">
                </div>
                <div class="order-1 md:order-2 space-y-4">
                    <h3 class="font-bold text-2xl text-black">Enterprise Resource Planning (ERP)</h3>
                    <p class="text-primary-gray font-nunito-sans">
                        We build comprehensive ERP systems that unify your core business processes including inventory
                        management,
                        financial accounting, human resources, and supply chain operations.
                    </p>
                    <ul class="text-sm text-primary-gray font-nunito-sans space-y-2">
                        <li>• Integrated financial management</li>
                        <li>• Inventory & supply chain tracking</li>
                        <li>• HR & payroll automation</li>
                        <li>• Custom reporting & analytics</li>
                    </ul>
                </div>
            </div>
            <div x-show="activeTab === 'crm'" class="grid md:grid-cols-2 gap-12 items-center mt-8">
                <div class="order-2 md:order-1">
                    <img src="{{ asset('images/product/crm-mockup.jpg') }}" alt="CRM Platform"
                        class="rounded-lg shadow-md w-full">
                </div>
                <div class="order-1 md:order-2 space-y-4">
                    <h3 class="font-bold text-2xl text-black">Customer Relationship Management (CRM)</h3>
                    <p class="text-primary-gray font-nunito-sans">
                        Develop stronger customer relationships with a custom CRM platform that centralizes customer
                        data,
                        automates sales processes, and provides insights into customer behavior.
                    </p>
                    <ul class="text-sm text-primary-gray font-nunito-sans space-y-2">
                        <li>• Lead & opportunity management</li>
                        <li>• Customer communication history</li>
                        <li>• Sales pipeline automation</li>
                        <li>• Performance analytics</li>
                    </ul>
                </div>
            </div>
            <div x-show="activeTab === 'bi'" class="grid md:grid-cols-2 gap-12 items-center mt-8">
                <div class="order-2 md:order-1">
                    <img src="{{ asset('images/product/bi-mockup.jpg') }}" alt="BI Dashboard"
                        class="rounded-lg shadow-md w-full">
                </div>
                <div class="order-1 md:order-2 space-y-4">
                    <h3 class="font-bold text-2xl text-black">Business Intelligence Dashboards</h3>
                    <p class="text-primary-gray font-nunito-sans">
                        Turn raw data into actionable insights with custom BI dashboards that visualize key metrics,
                        track performance indicators, and enable data-driven decision making.
                    </p>
                    <ul class="text-sm text-primary-gray font-nunito-sans space-y-2">
                        <li>• Real-time data visualization</li>
                        <li>• Custom KPI tracking</li>
                        <li>• Multi-source data integration</li>
                        <li>• Interactive reporting tools</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="bg-gray-50 rounded-xl p-8">
                <div class="text-center space-y-6">
                    <h2 class="text-3xl font-bold text-black">Technology We Use</h2>
                    <p class="text-primary-gray font-nunito-sans">
                        A modern technology stack for optimal performance and scalability.
                    </p>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="text-center space-y-3">
                            <i class="fa-brands fa-laravel text-3xl text-primary-blue"></i>
                            <h4 class="font-semibold">Laravel</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">A powerful and secure backend
                                with a
                                mature ecosystem.</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-brands fa-vuejs text-3xl text-primary-blue"></i>
                            <h4 class="font-semibold">Vue.js / React</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Modern frontend for fast and
                                interactive interfaces.</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-database text-3xl text-primary-blue"></i>
                            <h4 class="font-semibold">MySQL / PostgreSQL</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Reliable relational databases
                                for
                                data integrity.</p>
                        </div>
                        <div class="text-center space-y-3">
                            <i class="fa-solid fa-cloud text-3xl text-primary-blue"></i>
                            <h4 class="font-semibold">Cloud Infrastructure</h4>
                            <p class="text-sm text-primary-gray font-nunito-sans">Reliable and secure hosting
                                on AWS,
                                Google Cloud, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Develop Your Software?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Let's discuss how we can help develop a software platform that aligns with your vision and
                    business needs.
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Discuss Project
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
