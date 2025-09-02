<x-layouts.app title="Smart Government Solutions">
    <!-- Hero Section -->
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-left space-y-6">
                <div class="p-3 bg-primary-blue/10 rounded-full w-fit">
                    <i class="fa-solid fa-landmark text-3xl text-primary-blue"></i>
                </div>
                <h1 class="text-4xl font-bold text-black">Smart Government Solutions</h1>
                <p class="text-lg text-primary-gray font-nunito-sans">
                    Empowering public sector institutions with innovative digital solutions to enhance transparency,
                    efficiency, and citizen services.
                </p>
                <div class="flex gap-4 pt-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Request a Demo
                    </x-shared.link-button>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="{{ asset('images/product/government-hero.jpg') }}" alt="Smart Government"
                    class="rounded-lg shadow-xl w-full object-cover">
            </div>
        </div>
    </section>

    <!-- The Challenge Section -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Transforming Public Service for the Digital Age</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-3xl mx-auto">
                    Modern governments face increasing pressure to deliver faster, more transparent, and more accessible
                    services. We provide the technology to overcome these challenges.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Challenge 1 -->
                <div class="text-center space-y-3">
                    <i class="fa-solid fa-file-signature text-4xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl pt-2">Complex Bureaucracy</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Streamline complex administrative processes and reduce paperwork with digital workflows and
                        automation.
                    </p>
                </div>
                <!-- Challenge 2 -->
                <div class="text-center space-y-3">
                    <i class="fa-solid fa-shield-alt text-4xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl pt-2">Data Security & Silos</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Integrate disparate government systems and ensure the highest level of security for sensitive
                        citizen data.
                    </p>
                </div>
                <!-- Challenge 3 -->
                <div class="text-center space-y-3">
                    <i class="fa-solid fa-users text-4xl text-primary-blue"></i>
                    <h3 class="font-semibold text-xl pt-2">Citizen Engagement</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Enhance communication and service delivery with citizen-centric platforms that are accessible
                        24/7.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Solutions Section -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Our Core Government Solutions</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    We offer a suite of customizable platforms designed to meet the specific needs of public sector
                    organizations.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Solution 1 -->
                <div class="bg-white rounded-lg p-6 flex items-center gap-6">
                    <div class="p-3 bg-primary-blue/10 rounded-full h-fit">
                        <i class="fa-solid fa-id-card text-2xl text-primary-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl mb-2">Digital Licensing Systems</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            An end-to-end online platform for permit and license applications, renewals, and processing,
                            reducing wait times and improving transparency.
                        </p>
                    </div>
                </div>
                <!-- Solution 2 -->
                <div class="bg-white rounded-lg p-6 flex items-center gap-6">
                    <div class="p-3 bg-primary-blue/10 rounded-full h-fit">
                        <i class="fa-solid fa-database text-2xl text-primary-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl mb-2">Public Data Portals</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Open data platforms that make government information accessible to the public, fostering
                            innovation, research, and accountability.
                        </p>
                    </div>
                </div>
                <!-- Solution 3 -->
                <div class="bg-white rounded-lg p-6 flex items-center gap-6">
                    <div class="p-3 bg-primary-blue/10 rounded-full h-fit">
                        <i class="fa-solid fa-desktop text-2xl text-primary-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl mb-2">e-Government Services</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Digitize essential citizen services such as tax payments, civil registration, and public
                            complaints into a single, user-friendly portal.
                        </p>
                    </div>
                </div>
                <!-- Solution 4 -->
                <div class="bg-white rounded-lg p-6 flex items-center gap-6">
                    <div class="p-3 bg-primary-blue/10 rounded-full h-fit">
                        <i class="fa-solid fa-chart-pie text-2xl text-primary-blue"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl mb-2">Smart City Dashboards</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Centralized dashboards for city managers to monitor public services, traffic, and
                            environmental data in real-time for better urban planning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [PERUBAHAN]: Bagian Testimoni diganti dengan Security & Compliance -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-black">Our Commitment to Security & Compliance</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-3xl mx-auto">
                    We build solutions on a foundation of trust, adhering to the highest standards of data security and
                    regulatory compliance for the public sector.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <i class="fa-solid fa-lock text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">End-to-End Encryption</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        All citizen and government data is protected with industry-standard encryption, both in transit
                        and at rest, to prevent unauthorized access.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <i class="fa-solid fa-stamp text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">Regulatory Compliance</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        Our platforms are designed to comply with relevant government regulations and data privacy laws,
                        ensuring full legal and operational compliance.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <i class="fa-solid fa-server text-3xl text-primary-blue mb-4"></i>
                    <h3 class="font-semibold text-xl mb-2">High Availability</h3>
                    <p class="text-primary-gray font-nunito-sans text-sm">
                        We ensure high uptime and system reliability through redundant infrastructure and proactive
                        monitoring, guaranteeing service continuity for the public.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-4 py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center space-y-6">
                <h2 class="text-3xl font-bold text-black">Ready to Build a Smarter Government?</h2>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto">
                    Let's collaborate to build digital solutions that create a more efficient, transparent, and
                    citizen-focused public service.
                </p>
                <div class="flex justify-center gap-4">
                    <x-shared.link-button href="/#footer" variant="primary">
                        Discuss Your Initiative
                    </x-shared.link-button>
                    <x-shared.link-button href="/" variant="secondary">
                        Back to Home
                    </x-shared.link-button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
