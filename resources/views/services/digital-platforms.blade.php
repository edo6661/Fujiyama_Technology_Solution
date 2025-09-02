<x-layouts.app title="Mobile Apps & Digital Platforms">
    <!-- Hero Section -->
    <section class="relative px-4 py-16">
        <div class="absolute inset-0 bg-gradient-to-br from-primary-blue/5 to-white"></div>
        <div class="relative z-10 text-center space-y-8">
            <div class="flex justify-center">
                <div class="p-4 bg-primary-blue/10 rounded-full">
                    <i class="fa-solid fa-mobile-screen-button text-4xl text-primary-blue"></i>
                </div>
            </div>
            <div class="space-y-4">
                <h1 class="text-4xl font-bold text-black">Mobile Apps & Digital Platforms</h1>
                <p class="text-lg text-primary-gray font-nunito-sans max-w-3xl mx-auto">
                    We architect and engineer intuitive, high-performance mobile applications that transform your ideas
                    into engaging digital experiences on iOS and Android.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto space-y-20">

            <!-- Key Benefits Section -->
            <div class="text-center">
                <h2 class="text-3xl font-bold text-black">Go Beyond the Desktop</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-2xl mx-auto">
                    In a mobile-first world, a powerful app is not just an advantage—it's a necessity. We build
                    platforms
                    designed to forge a direct connection with your audience.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-12 text-left">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <i class="fa-solid fa-users text-3xl text-primary-blue mb-4"></i>
                        <h3 class="font-semibold text-xl mb-2">Ubiquitous Accessibility</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Establish a permanent presence on your customers' most personal devices, offering them
                            instant
                            access to your services anytime, anywhere.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <i class="fa-solid fa-compass-drafting text-3xl text-primary-blue mb-4"></i>
                        <h3 class="font-semibold text-xl mb-2">Superior User Engagement</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Leverage native device features and intuitive design to create compelling user experiences
                            that drive retention and foster brand loyalty.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6">
                        <i class="fa-solid fa-bolt text-3xl text-primary-blue mb-4"></i>
                        <h3 class="font-semibold text-xl mb-2">Optimized for Performance</h3>
                        <p class="text-primary-gray font-nunito-sans text-sm">
                            Our applications are engineered for speed, efficiency, and reliability, delivering a
                            flawless
                            and responsive user journey.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Types of Apps We Build (Interactive Tabs) -->
    <section class="px-4 py-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-left mb-8">
                <h2 class="text-3xl font-bold text-black">Expertise Across All Platforms</h2>
                <p class="text-primary-gray font-nunito-sans mt-4 max-w-3xl">
                    Whether you need to capture the Apple ecosystem, the vast Android market, or both, our team has the
                    expertise to deliver.
                </p>
            </div>
            <div class="flex border-b border-gray-200">
                <button id="iosTab" class="py-4 px-6 font-semibold border-b-2 transition">iOS Development</button>
                <button id="androidTab" class="py-4 px-6 font-semibold border-b-2 transition">Android
                    Development</button>
                <button id="crossTab" class="py-4 px-6 font-semibold border-b-2 transition">Cross-Platform</button>
            </div>
            <div class="pt-12 min-h-[400px]">
                <div id="iosContent" class="grid md:grid-cols-2 gap-x-16 gap-y-8 items-center" style="display: none;">
                    <div class="p-4 md:p-6">
                        <img src="{{ asset('images/product/ios-app.jpg') }}" alt="iOS App"
                            class="rounded-lg shadow-md w-full">
                    </div>
                    <div>
                        <h3 class="font-bold text-2xl mb-3">Native iOS Applications</h3>
                        <p class="text-primary-gray font-nunito-sans">
                            We craft elegant, high-performance applications for iPhone and iPad using Swift, harnessing
                            the full power of Apple's ecosystem to deliver a premium user experience.
                        </p>
                    </div>
                </div>
                <div id="androidContent" class="grid md:grid-cols-2 gap-x-16 gap-y-8 items-center"
                    style="display: none;">
                    <div class="p-4 md:p-6">
                        <img src="{{ asset('images/product/android-app.jpg') }}" alt="Android App"
                            class="rounded-lg shadow-md w-full">
                    </div>
                    <div>
                        <h3 class="font-bold text-2xl mb-3">Native Android Applications</h3>
                        <p class="text-primary-gray font-nunito-sans">
                            Our team builds fast, feature-rich Android apps with Kotlin, adhering to Material Design
                            principles for a consistent and intuitive experience across the diverse Android landscape.
                        </p>
                    </div>
                </div>
                <div id="crossContent" class="grid md:grid-cols-2 gap-x-16 gap-y-8 items-center" style="display: none;">
                    <div class="p-4 md:p-6">
                        <img src="{{ asset('images/product/android-ios.png') }}" alt="Cross-Platform App"
                            class="rounded-lg shadow-md w-full">
                    </div>
                    <div>
                        <h3 class="font-bold text-2xl mb-3">Cross-Platform Solutions</h3>
                        <p class="text-primary-gray font-nunito-sans">
                            Maximize reach and minimize costs with a single codebase. We utilize frameworks like Flutter
                            and React Native to build beautiful apps that perform natively on both iOS and Android.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // JavaScript to manage the tab functionality
        document.getElementById("iosTab").addEventListener("click", function() {
            showTab("ios");
        });

        document.getElementById("androidTab").addEventListener("click", function() {
            showTab("android");
        });

        document.getElementById("crossTab").addEventListener("click", function() {
            showTab("cross");
        });

        function showTab(tab) {
            // Hide all contents
            document.getElementById("iosContent").style.display = "none";
            document.getElementById("androidContent").style.display = "none";
            document.getElementById("crossContent").style.display = "none";

            // Remove active class from buttons
            document
                .getElementById("iosTab")
                .classList.remove("border-primary-blue", "text-primary-blue");
            document
                .getElementById("androidTab")
                .classList.remove("border-primary-blue", "text-primary-blue");
            document
                .getElementById("crossTab")
                .classList.remove("border-primary-blue", "text-primary-blue");

            // Show selected content
            if (tab === "ios") {
                document.getElementById("iosContent").style.display = "grid";
                document
                    .getElementById("iosTab")
                    .classList.add("border-primary-blue", "text-primary-blue");
            } else if (tab === "android") {
                document.getElementById("androidContent").style.display = "grid";
                document
                    .getElementById("androidTab")
                    .classList.add("border-primary-blue", "text-primary-blue");
            } else if (tab === "cross") {
                document.getElementById("crossContent").style.display = "grid";
                document
                    .getElementById("crossTab")
                    .classList.add("border-primary-blue", "text-primary-blue");
            }
        }
        showTab("ios");
    </script>
</x-layouts.app>
