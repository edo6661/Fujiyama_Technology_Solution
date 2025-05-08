<x-layouts.admin-app title="Dashboard">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-blue-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 mr-4">
                    <i class="fas fa-newspaper text-blue-500"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Total Artikel</h3>
                    <p class="text-2xl font-bold">{{ \App\Models\Blog::count() }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-green-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 mr-4">
                    <i class="fas fa-eye text-green-500"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Total Views</h3>
                    <p class="text-2xl font-bold">0</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-purple-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 mr-4">
                    <i class="fas fa-comments text-purple-500"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Komentar</h3>
                    <p class="text-2xl font-bold">0</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border-l-4 border-yellow-500">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 mr-4">
                    <i class="fas fa-users text-yellow-500"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700">Pengguna</h3>
                    <p class="text-2xl font-bold">{{ \App\Models\User::count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Artikel Terbaru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gambar</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Judul</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal</th>
                            <th class="py-2 px-4 border-b border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(\App\Models\Blog::latest()->take(5)->get() as $blog)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">
                                @if($blog->image_url)
                                <img class="h-10 w-10 rounded object-cover" src="{{ $blog->image_url }}" alt="{{ $blog->title }}">
                                @else
                                <div class="h-10 w-10 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fas fa-newspaper text-gray-400"></i>
                                </div>
                                @endif
                            </td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <a href="{{ route('blogs.show', $blog) }}" class="text-blue-600 hover:underline">{{ $blog->title }}</a>
                            </td>
                            
                            <td class="py-2 px-4 border-b border-gray-200">{{ $blog->created_at->format('d M Y') }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">
                                <span class="px-2 py-1 text-xs rounded-full {{ $blog->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $blog->status == 'published' ? 'Dipublikasikan' : 'Draft' }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="py-3 px-4 text-center text-gray-500">Belum ada artikel</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-right">
                <a href="{{ route('blogs.index') }}" class="text-blue-600 hover:underline">Lihat semua artikel</a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Aktivitas Terbaru</h2>
            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4 py-2">
                    <p class="text-sm text-gray-600">Hari ini</p>
                    <p class="text-gray-800">Selamat datang di dashboard admin blog</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-app>