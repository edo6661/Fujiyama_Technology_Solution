@props(['image', 'title', 'description'])
<div class="slide-item">
    <div class="container-bg-hero absolute inset-0">
        <img src="{{ $image }}" alt="Hero Slider 1" />
    </div>
    <div
        class="container-content-hero flex flex-col justify-center items-center text-center text-white z-10 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 gap-8">
        <span class="text-lg"> {{ $description }} </span>
        <h2 class="md:text-7xl text-3xl font-bold"> {{ $title }} </h2>

        <div class="container-btn-hero flex items-center justify-center gap-8">
            <x-shared.link-button variant="secondary" class="w-fit" href="#contact">
                Get in Touch
            </x-shared.link-button>
            <x-shared.link-button href="#why-choose-us" class="w-fit">
                Discover Our Solutions
            </x-shared.link-button>
        </div>
    </div>
</div>
