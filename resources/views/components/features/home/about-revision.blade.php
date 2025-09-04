    <section id="about" class="grid md:grid-cols-2 md:gap-16 gap-8 px-4 ">
        <div class="container-left-about relative">
            <div class="container-about-image">
                <img src="{{ asset('images/about.png') }}" />
            </div>
            <div class="absolute bottom-0 left-4 -z-10 animate-pulse rotate">
                <img src="{{ asset('images/shape-about-2.png') }}" />
            </div>
            <div class="absolute right-0 top-0 -z-10 animate-pulse top-bottom">
                <img src="{{ asset('images/shape-about.png') }}" />
            </div>
        </div>
        <div class="container-right-about text-black space-y-6">
            <p class="text-primary-blue font-bold text-lg">
                ABOUT FTS
            </p>
            <h3 class="font-bold md:text-3xl text-3xl">
                Your Partner for Digital Infrastructure
            </h3>
            <div class="space-y-4">
                <p class="text-primary-gray font-nunito-sans">
                    FTS is a Japanese-rooted IT innovator committed to building a digital future for Indonesia.
                    With over 95% of our team proudly Indonesian, we combine global technology trends with local insight to
                    create advanced digital solutions tailored for businesses, government, and society.
                </p>
                <p class="text-primary-gray font-nunito-sans">
                    Our mission is to bridge the gap between innovation and real-world needs — empowering businesses,
                    enhancing government services, and improving everyday life.
                </p>

            </div>

            <x-shared.link-button variant="tertiary" class="w-fit">
                GET STARTED
            </x-shared.link-button>
        </div>
    </section>
    <style>
        #about {
            scroll-margin-top: 80px;
        }
    </style>
