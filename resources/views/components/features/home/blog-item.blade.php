<div class="relative">
    <a href="{{ route('blog', [$blog]) }}" class="absolute inset-0 z-10"></a>
    <div class="flex flex-col gap-6 bg-quinary-gray pb-6 rounded-lg relative min-h-[540px]">
        <div>
            <img src="{{ $blog->image_url }}" alt="Blog 1" class="w-full h-64 rounded-t-lg object-cover"/>
        </div>
        <div class="text-start space-y-4 px-4">
            <div class="flex gap-2">
                <p class="text-tertiary-gray font-medium">
                    {{ $blog->created_at->format('d M Y') }}
                </p>
            </div>
            <h3 class="font-semibold md:text-3xl text-2xl text-white">
                {{ $blog->title_trim }}
            </h3>
            <x-features.home.blog-item-link  class="text-white"/>
        </div>    
    </div>
</div>
