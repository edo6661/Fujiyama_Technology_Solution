<x-layouts.admin-app title="Daftar Artikel Blog">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Daftar Artikel</h1>
            <p class="text-gray-500">Kelola semua artikel blog Anda</p>
        </div>
        <a href="{{ route('blogs.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
            <i class="fas fa-plus mr-2"></i> Tambah Artikel
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="flex items-center justify-between p-4 border-b">
            <div class="flex items-center w-full">
                <div class="relative w-full max-w-md">
                    <input type="text" placeholder="Cari artikel..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <div class="absolute left-3 top-2.5">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2">
                <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Status</option>
                    <option value="published">Dipublikasikan</option>
                    <option value="draft">Draft</option>
                </select>
                <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="newest">Terbaru</option>
                    <option value="oldest">Terlama</option>
                    <option value="title_asc">Judul (A-Z)</option>
                    <option value="title_desc">Judul (Z-A)</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                        <th class="py-3 px-6 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($blogs as $blog)
                    <tr class="hover:bg-gray-50">
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                @if($blog->image_url)
                                <div class="h-10 w-10 flex-shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded object-cover" src="{{ Storage::disk('s3')->url($blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                                @else
                                <div class="h-10 w-10 flex-shrink-0 mr-3 bg-gray-200 rounded flex items-center justify-center">
                                    <i class="fas fa-newspaper text-gray-400"></i>
                                </div>
                                @endif
                                <div>
                                    <a href="{{ route('blogs.show', $blog) }}" class="text-blue-600 hover:underline font-medium">{{ $blog->title }}</a>
                                    <div class="text-sm text-gray-500 truncate max-w-md">{{ Str::limit($blog->excerpt ?? '', 60) }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-600">
                            <div>{{ $blog->created_at->format('d M Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $blog->created_at->format('H:i') }}</div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="px-2 py-1 text-xs rounded-full {{ $blog->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ $blog->status == 'published' ? 'Dipublikasikan' : 'Draft' }}
                            </span>
                        </td>
                        <td class="py-4 px-6 text-sm text-gray-600">
                            {{ $blog->user->name ?? 'Admin' }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('blogs.show', $blog) }}" class="text-blue-600 hover:text-blue-900" title="Lihat">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('blogs.edit', $blog) }}" class="text-yellow-600 hover:text-yellow-900" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                    <button type="submit" class="text-red-600 hover:text-red-900" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-6 px-6 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p class="text-lg font-medium">Belum ada artikel</p>
                                <p class="text-sm text-gray-500 mt-1">Mulai membuat artikel baru sekarang</p>
                                <a href="{{ route('blogs.create') }}" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                    <i class="fas fa-plus mr-2"></i> Tambah Artikel
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="p-4 border-t">
            {{ $blogs->links() }}
        </div>
    </div>
</x-layouts.admin-app>