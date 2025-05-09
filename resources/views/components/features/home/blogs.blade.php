
<section id="blog" class="flex flex-col py-8 text-center space-y-4 px-4 ">
    <p class="font-semibold text-lg text-white">
        Our latest Blog
    </p>
    <div>
        <h3 class="md:text-4xl lg:text-6xl sm:text-3xl text-xl font-bold text-white">
            Our Recent Article
        </h3>
        <h3 class="md:text-4xl lg:text-6xl sm:text-3xl text-xl font-bold text-white">
            News & Tips
        </h3>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-12">
       
        @foreach ($blogs as $blog)
            <x-features.home.blog-item
                :blog="$blog"
        />
        @endforeach
        
    </div>
</section>

<style>
    #blog {
        background: url("{{ asset('images/blog.jpg') }}") no-repeat center center/cover;
    }
</style>