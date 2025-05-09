<x-layouts.admin-app title="Edit Blog">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <x-shared.heading 
                    :title="__('Edit Blog')" 
                    :description="__('Perbarui informasi blog')" 
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
                    <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <x-shared.input 
                                    name="title" 
                                    type="text" 
                                    label="Judul Blog" 
                                    placeholder="Masukkan judul blog" 
                                    :value="old('title', $blog->title)"
                                    required
                                    fullWidth
                                    :error="$errors->first('title')"
                                />
                            </div>
                            
                            <!-- Description -->
                            <div>
                                <x-shared.textarea 
                                    name="description" 
                                    label="Deskripsi" 
                                    placeholder="Masukkan deskripsi blog" 
                                    :value="old('description', $blog->description)"
                                    rows="5"
                                    required
                                    fullWidth
                                    :error="$errors->first('description')"
                                    />
                            </div>
                            
                            <!-- Image -->
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Gambar') }}
                                </label>
                                
                                <div class="mt-1 flex items-center">
                                    <div id="imagePreviewContainer" class="w-32 h-32 bg-gray-100 rounded-md overflow-hidden">
                                        <img 
                                            id="imagePreview"
                                            src="{{ $blog->image_url }}" 
                                            alt="{{ $blog->title }}" 
                                            class="w-full h-full object-cover"
                                        >
                                    </div>
                                    
                                    <div class="ml-5">
                                        <input
                                            type="file"
                                            name="image"
                                            id="image"
                                            accept="image/*"
                                            class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                            onchange="previewImage(this)"
                                        />
                                        <p class="mt-1 text-sm text-gray-500">
                                            {{ __('Biarkan kosong jika tidak ingin mengubah gambar.') }}
                                        </p>
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
                                {{ __('Perbarui Blog') }}
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
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-layouts.admin-app>