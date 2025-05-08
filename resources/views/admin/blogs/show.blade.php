<x-layouts.admin-app :title="$blog->title">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <x-shared.heading 
                    :title="__('Detail Blog')" 
                    :description="__('Lihat informasi lengkap blog')" 
                />
                
                <div class="flex space-x-2">
                    <x-shared.button 
                        :href="route('blogs.edit', $blog)"
                        variant="warning"
                    >
                        <i class="fas fa-edit mr-2"></i>
                        {{ __('Edit') }}
                    </x-shared.button>
                    
                    <x-shared.button 
                        :href="route('blogs.index')"
                        variant="secondary"
                    >
                        <i class="fas fa-arrow-left mr-2"></i>
                        {{ __('Kembali') }}
                    </x-shared.button>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Image -->
                        <div class="md:col-span-1">
                            <div class="bg-gray-100 rounded-lg overflow-hidden">
                                <img 
                                    src="{{ $blog->image_url }}" 
                                    alt="{{ $blog->title }}" 
                                    class="w-full h-auto object-cover"
                                >
                            </div>
                        </div>
                        
                        <!-- Blog Details -->
                        <div class="md:col-span-2 space-y-6">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">{{ __('Judul') }}</h3>
                                <p class="mt-1 text-gray-600">{{ $blog->title }}</p>
                            </div>
                            
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">{{ __('Deskripsi') }}</h3>
                                <div class="mt-1 prose prose-sm max-w-none text-gray-600">
                                    <p>{{ $blog->description }}</p>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ __('Dibuat Oleh') }}</h3>
                                    <p class="mt-1 text-gray-600">{{ $blog->users->name ?? 'N/A' }}</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ __('Tanggal Dibuat') }}</h3>
                                    <p class="mt-1 text-gray-600">{{ $blog->created_at->format('d F Y, H:i') }}</p>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ __('Terakhir Diperbarui') }}</h3>
                                    <p class="mt-1 text-gray-600">{{ $blog->updated_at->format('d F Y, H:i') }}</p>
                                </div>
                            </div>
                            
                            <div class="pt-4 flex justify-end space-x-2">
                                <form action="{{ route('blogs.destroy') }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                    <x-shared.button 
                                        type="submit" 
                                        variant="danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?');"
                                    >
                                        <i class="fas fa-trash mr-2"></i>
                                        {{ __('Hapus Blog') }}
                                    </x-shared.button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-app>