<section id="about" class="grid md:grid-cols-2 md:gap-16 gap-8 px-4 ">
    <div class="container-left-about relative">
        <div class="container-about-image">
            <img src="{{ asset('images/about.png') }}"/>
        </div>
        <div class="container-about-shape-2 absolute bottom-0 left-4 -z-10 animate-pulse rotate">
            <img src="{{ asset('images/shape-about-2.png') }}"/>
        </div>
        <div class="container-about-shape absolute right-0 top-0 -z-10 animate-pulse top-bottom">
            <img src="{{ asset('images/shape-about.png') }}"/>
        </div>
    </div>
    <div class="container-right-about text-black space-y-6">
        <p class="text-primary-blue font-bold text-lg">
            ABOUT FUJIYAMA TECHNOLOGY SOLUTION
        </p>
        <div class="space-y-4">
            <h3 class="font-bold md:text-3xl text-3xl">
                Your Partner for Digital Infrastructure
            </h3>
            <p class="text-primary-gray font-nunito-sans">
                Fujiyama Technology Solution provides reliable server rental services with a bonus: we build your website and mobile app for free when you host with us. We aim to accelerate your digital presence with solid infrastructure and modern development.
            </p>

        </div>
        <div class="space-y-4">
            <x-features.home.about-title-description
                title="Server Rental Services"
                description="Robust and secure hosting solutions tailored for your business needs."
            />
            <x-features.home.about-title-description
                title="Free Web & Mobile App Development"
                description="Get your digital platforms built by professionals at no extra cost—just by renting our servers."
            />

        </div>
        <x-shared.link-button variant="tertiary" class="w-fit">
            GET STARTED
        </x-shared.link-button>
    </div>
</section>
