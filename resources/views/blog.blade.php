@vite(['resources/js/app.js'])
<x-layouts.app :title="$blog->title">
    <div class="bg-white">
        <div class="mx-auto py-8 px-4 md:px-8">
            <div class="mb-12">
                <div class="flex flex-col gap-4 max-w-5xl">
                    <div class="flex gap-2">
                        <p class="text-black font-medium">
                            {{ $blog->created_at->format('d M Y') }}
                        </p>
                    </div>
                    <h1 class="font-semibold text-3xl md:text-5xl text-black">
                        {{ $blog->title }}
                    </h1>
                </div>
            </div>

            <div class="mb-12">
                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg">
            </div>
            
            <p class="text-black font-nunito-sans text-lg mb-8">
                {{ $blog->description }}
            </p>
        </div>
    </div>

    <div class="bg-primary-indigo py-8">
        <div class="mx-auto px-4 md:px-8">
            <div class="mb-12 flex justify-between items-center">
                <h2 class="font-semibold text-3xl text-white">More Blog Posts</h2>
                <a href="{{ route('blogs') }}" class="text-white underline">View All</a>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-12">
                @if(isset($moreBlogs) && $moreBlogs->count() > 0)
                    @foreach($moreBlogs->take(3) as $moreBlog)
                    <x-features.home.blog-item
                    :blog="$moreBlog"
                    />
                    @endforeach
                @else
                    <p class="text-white">No more blog posts found.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="bg-white py-8">
        <div class="mx-auto px-4 md:px-8">
            <div class="bg-quinary-gray p-8 md:p-12 rounded-lg">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-2/3">
                        <h2 class="font-semibold text-3xl text-white mb-4">Subscribe to Our Newsletter</h2>
                        <p class="text-tertiary-gray mb-6">Get the latest blogs and updates delivered to your inbox.</p>
                        <form class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Enter your email" class="px-4 py-3 rounded-lg w-full sm:w-auto flex-grow">
                            <x-shared.link-button  class="w-full sm:w-auto">
                                SUBSCRIBE
                            </x-shared.link-button>
                        </form>
                    </div>
                    <div class="md:w-1/3">
                        <img src="{{ asset('images/newsletter.png') }}" alt="Newsletter" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>