@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'link' => null,
])
<div
    class="group flex items-center justify-center flex-col text-center gap-6 px-8 py-12 bg-white rounded-md shadow-sm shadow-muted-foreground">
    <h4 class="text-black text-xl font-semibold group-hover:text-primary-blue transition-colors duration-300">
        {{ $title }}
    </h4>
    <p class="font-nunito-sans text-primary-gray ">
        {{ $description }}
    </p>
    <div class="container-image-what-we-do">
        {!! $image !!}
    </div>
    <x-features.home.link-learn-more-product-category-item :link="$link" />
</div>
<style>
    .container-image-what-we-do i {
        font-size: 4rem;
        color: var(--primary-blue)
    }
</style>
