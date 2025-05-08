<x-layouts.admin-app title="Tambah Blog Baru">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <x-shared.heading 
                    :title="__('Tambah Blog Baru')" 
                    :description="__('Buat dan publikasikan blog baru')" 
                />
                
                <x-shared.button 
                    :href="route('blogs.index')"
                    variant="secondary"
                >
                    <i class="fas fa-arrow-left mr-2"></i>
                    {{ __('Kembali') }}
                </x-shared.button>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <x-shared.input 
                                    name="title" 
                                    type="text" 
                                    label="Judul Blog" 
                                    placeholder="Masukkan judul blog" 
                                    :value="old('title')"
                                    required
                                    fullWidth
                                    :error="$errors->first('title')"
                                />
                            </div>
                            
                            <!-- Description -->
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Deskripsi') }}
                                </label>
                                <textarea
                                    id="description"
                                    name="description"
                                    rows="5"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm @error('description') border-red-500 @enderror"
                                    placeholder="Masukkan deskripsi blog"
                                    required
                                >{{ old('description') }}</textarea>
                                
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Image -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Gambar') }}
                                </label>
                                <div class="mt-1 flex items-center">
                                    <div id="imagePreviewContainer" class="inline-block h-32 w-32 rounded-md overflow-hidden bg-gray-100">
                                        <img id="imagePreview" class="h-full w-full object-cover hidden" alt="Preview">
                                        <svg id="defaultIcon" class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-5">
                                        <input
                                            type="file"
                                            name="image"
                                            id="image"
                                            accept="image/*"
                                            class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                            required
                                            onchange="previewImage(this)"
                                        />
                                    </div>
                                </div>
                                
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ __('Format: JPG, PNG, JPEG, GIF. Maksimal 2MB.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <x-shared.button 
                                type="submit" 
                                variant="primary"
                            >
                                {{ __('Simpan Blog') }}
                            </x-shared.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const defaultIcon = document.getElementById('defaultIcon');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    defaultIcon.classList.add('hidden');
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-layouts.admin-app>