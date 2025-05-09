@vite([ 'resources/js/app.js'])

<x-layouts.app title="Blogs">
    <div class="bg-white pb-8">
        <div class="mx-auto py-16 px-4 md:px-8">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-12">
                @foreach($blogs as $blog)
                    <x-features.home.blog-item
                    :blog="$blog"
                    />
                @endforeach
            </div>
        </div>
        <div class="flex items-center justify-center">
            {{ $blogs->links() }}
        </div>
    </div>
</x-layouts.app>