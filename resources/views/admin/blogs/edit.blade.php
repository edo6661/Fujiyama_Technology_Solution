<x-layouts.admin-app title="Edit Blog">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <x-shared.heading 
                    :title="__('Edit Blog')" 
                    :description="__('Update the blog post')" 
                />
                
                <x-shared.button 
                    :href="route('blogs.index')"
                    variant="secondary"
                >
                    <i class="fas fa-arrow-left mr-2"></i>
                    {{ __('Back') }}
                </x-shared.button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <x-shared.input 
                                    name="title" 
                                    type="text" 
                                    label="Title" 
                                    placeholder="Input title blog" 
                                    :value="old('title', $blog->title)"
                                    required
                                    fullWidth
                                    :error="$errors->first('title')"
                                />
                            </div>
                            
                            <!-- Rich Text Editor untuk Content -->
                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                                    {{ __('Content') }}
                                </label>
                                <div id="editor-container" class="border border-gray-300 rounded-md">
                                    <div id="toolbar" class="border-b border-gray-200 p-3 bg-gray-50 rounded-t-md">
                                        <!-- Font dan Size -->
                                        <span class="ql-formats">
                                            <select class="ql-font">
                                                <option selected>Sans Serif</option>
                                                <option value="serif">Serif</option>
                                                <option value="monospace">Monospace</option>
                                            </select>
                                            <select class="ql-size">
                                                <option value="small">Small</option>
                                                <option selected>Normal</option>
                                                <option value="large">Large</option>
                                                <option value="huge">Huge</option>
                                            </select>
                                        </span>
                                        <!-- Text Formatting -->
                                        <span class="ql-formats">
                                            <button class="ql-bold" title="Bold"></button>
                                            <button class="ql-italic" title="Italic"></button>
                                            <button class="ql-underline" title="Underline"></button>
                                            <button class="ql-strike" title="Strike"></button>
                                        </span>
                                        
                                        <!-- Colors -->
                                        <span class="ql-formats">
                                            <select class="ql-color" title="Text Color">
                                                <option selected></option>
                                                <option value="red"></option>
                                                <option value="green"></option>
                                                <option value="blue"></option>
                                                <option value="orange"></option>
                                                <option value="violet"></option>
                                                <option value="#d0d1d2"></option>
                                                <option value="#f8f9fa"></option>
                                                <option value="#6c757d"></option>
                                                <option value="#495057"></option>
                                                <option value="#212529"></option>
                                                <option value="#0d6efd"></option>
                                                <option value="#6610f2"></option>
                                                <option value="#6f42c1"></option>
                                                <option value="#d63384"></option>
                                                <option value="#dc3545"></option>
                                                <option value="#fd7e14"></option>
                                                <option value="#ffc107"></option>
                                                <option value="#198754"></option>
                                                <option value="#20c997"></option>
                                                <option value="#0dcaf0"></option>
                                            </select>
                                            <select class="ql-background" title="Background Color">
                                                <option selected></option>
                                                <option value="red"></option>
                                                <option value="green"></option>
                                                <option value="blue"></option>
                                                <option value="orange"></option>
                                                <option value="violet"></option>
                                                <option value="#d0d1d2"></option>
                                                <option value="#f8f9fa"></option>
                                                <option value="#6c757d"></option>
                                                <option value="#495057"></option>
                                                <option value="#212529"></option>
                                                <option value="#0d6efd"></option>
                                                <option value="#6610f2"></option>
                                                <option value="#6f42c1"></option>
                                                <option value="#d63384"></option>
                                                <option value="#dc3545"></option>
                                                <option value="#fd7e14"></option>
                                                <option value="#ffc107"></option>
                                                <option value="#198754"></option>
                                                <option value="#20c997"></option>
                                                <option value="#0dcaf0"></option>
                                            </select>
                                        </span>
                                        
                                        <!-- Alignment -->
                                        <span class="ql-formats">
                                            <select class="ql-align">
                                                <option selected></option>
                                                <option value="center"></option>
                                                <option value="right"></option>
                                                <option value="justify"></option>
                                            </select>
                                        </span>
                                        
                                        <!-- Lists -->
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered" title="Numbered List"></button>
                                            <button class="ql-list" value="bullet" title="Bullet List"></button>
                                            <button class="ql-indent" value="-1" title="Decrease Indent"></button>
                                            <button class="ql-indent" value="+1" title="Increase Indent"></button>
                                        </span>
                                        
                                        <!-- Quote dan Code -->
                                        <span class="ql-formats">
                                            <button class="ql-blockquote" title="Quote"></button>
                                            <button class="ql-code-block" title="Code Block"></button>
                                            <button class="ql-code" title="Inline Code"></button>
                                        </span>
                                        
                                        <!-- Insert -->
                                        <span class="ql-formats">
                                            <button class="ql-link" title="Insert Link"></button>
                                            <button class="ql-image" title="Insert Image"></button>
                                            <button class="ql-video" title="Insert Video"></button>
                                            <button class="ql-formula" title="Insert Formula"></button>
                                        </span>
                                        
                                        <!-- Direction -->
                                        <span class="ql-formats">
                                            <button class="ql-direction" value="rtl" title="Text Direction"></button>
                                        </span>
                                        
                                        <!-- Scripts -->
                                        <span class="ql-formats">
                                            <button class="ql-script" value="sub" title="Subscript"></button>
                                            <button class="ql-script" value="super" title="Superscript"></button>
                                        </span>
                                        
                                        <!-- Clean -->
                                        <span class="ql-formats">
                                            <button class="ql-clean" title="Clear Formatting"></button>
                                        </span>
                                    </div>
                                    <div id="editor" style="height: 400px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">{!! old('content', $blog->content) !!}</div>
                                </div>
                                <textarea name="content" id="content" class="hidden" required>{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ __('Gunakan toolbar di atas untuk memformat teks dengan berbagai pilihan font, ukuran, warna, dan alignment.') }}
                                </p>
                            </div>
                            
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                                    {{ __('Image') }}
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
                                            {{ __('Empty if you do not want to change the image.') }}
                                        </p>
                                    </div>
                                </div>
                                
                                @error('image')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ __('Format: JPG, PNG, JPEG, GIF. Max 2MB.') }}
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex justify-end">
                            <x-shared.button 
                                type="submit" 
                                variant="primary"
                            >
                                {{ __('Save Blog') }}
                            </x-shared.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Wait for DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            // Check if Quill is available
            if (typeof window.Quill !== 'undefined') {
                // Define custom font options
                const Font = Quill.import('formats/font');
                Font.whitelist = ['serif', 'monospace'];
                Quill.register(Font, true);
                
                // Define custom size options
                const Size = Quill.import('formats/size');
                Size.whitelist = ['small', 'medium', 'large', 'huge'];
                Quill.register(Size, true);
                
                // Initialize Quill editor with comprehensive modules
                const quill = new window.Quill('#editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: {
                            container: '#toolbar',
                            handlers: {
                                // Custom image handler
                                image: function() {
                                    const input = document.createElement('input');
                                    input.setAttribute('type', 'file');
                                    input.setAttribute('accept', 'image/*');
                                    input.click();
                                    
                                    input.onchange = function() {
                                        const file = input.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = function(e) {
                                                const range = quill.getSelection();
                                                quill.insertEmbed(range.index, 'image', e.target.result);
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                    };
                                }
                            }
                        },
                        history: {
                            delay: 1000,
                            maxStack: 50,
                            userOnly: true
                        },
                        clipboard: {
                            matchVisual: false
                        }
                    },
                    formats: [
                        'header', 'font', 'size',
                        'bold', 'italic', 'underline', 'strike',
                        'color', 'background',
                        'script', 'align', 'direction',
                        'list', 'bullet', 'indent',
                        'quote', 'code-block', 'code',
                        'link', 'image', 'video', 'formula'
                    ],
                    placeholder: 'Edit konten blog Anda di sini...'
                });
                
                // Sync editor content with form
                quill.on('text-change', function() {
                    const content = quill.root.innerHTML;
                    document.getElementById('content').value = content;
                });
                
                // Set initial content
                const initialContent = document.getElementById('content').value;
                if (initialContent) {
                    quill.root.innerHTML = initialContent;
                }
                
                // Ensure content is synced before form submission
                document.querySelector('form').addEventListener('submit', function(e) {
                    const content = quill.root.innerHTML;
                    document.getElementById('content').value = content;
                    
                    // Validate content is not empty
                    if (quill.getText().trim().length === 0) {
                        e.preventDefault();
                        alert('Content tidak boleh kosong!');
                        return false;
                    }
                });
                
                // Auto-save functionality (optional)
                let autoSaveTimer;
                quill.on('text-change', function() {
                    clearTimeout(autoSaveTimer);
                    autoSaveTimer = setTimeout(function() {
                        // Auto-save logic here if needed
                        console.log('Auto-saving...');
                    }, 5000); // Save after 5 seconds of inactivity
                });
                
            } else {
                console.error('Quill is not loaded. Please check your imports.');
                // Fallback to textarea
                document.getElementById('editor-container').innerHTML = 
                    '<textarea name="content" id="content" class="w-full h-64 p-3 border border-gray-300 rounded-md" placeholder="Edit konten blog Anda di sini..." required>' + 
                    document.getElementById('content').value + 
                    '</textarea>';
            }
        });
        
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            
            if (input.files && input.files[0]) {
                const file = input.files[0];
                
                // Validate file size (2MB max)
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran file terlalu besar! Maksimal 2MB.');
                    input.value = '';
                    return;
                }
                
                // Validate file type
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                if (!allowedTypes.includes(file.type)) {
                    alert('Format file tidak didukung! Gunakan JPG, PNG, atau GIF.');
                    input.value = '';
                    return;
                }
                
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                
                reader.readAsDataURL(file);
            }
        }
    </script>
    
    <style>
        /* Custom Quill styles */
        .ql-toolbar {
            border-top: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }
        
        .ql-container {
            border-bottom: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
        }
        
        .ql-toolbar .ql-formats {
            margin-right: 15px;
        }
        
        .ql-toolbar .ql-formats:last-child {
            margin-right: 0;
        }
        
        .ql-editor {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .ql-editor h1 {
            font-size: 2em;
            margin-bottom: 0.5em;
        }
        
        .ql-editor h2 {
            font-size: 1.5em;
            margin-bottom: 0.5em;
        }
        
        .ql-editor h3 {
            font-size: 1.3em;
            margin-bottom: 0.5em;
        }
        
        .ql-editor blockquote {
            border-left: 4px solid #ccc;
            margin-bottom: 5px;
            margin-top: 5px;
            padding-left: 16px;
        }
        
        .ql-editor pre {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin: 10px 0;
            overflow-x: auto;
        }
        
        .ql-editor code {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 2px 4px;
            font-family: 'Courier New', monospace;
        }
        
        .ql-snow .ql-tooltip {
            z-index: 1000;
        }
        
        /* Custom color palette */
        .ql-snow .ql-picker.ql-color .ql-picker-options,
        .ql-snow .ql-picker.ql-background .ql-picker-options {
            width: 168px;
        }
        
        .ql-snow .ql-picker.ql-color .ql-picker-item,
        .ql-snow .ql-picker.ql-background .ql-picker-item {
            border: 1px solid transparent;
            float: left;
            height: 16px;
            margin: 2px;
            padding: 0px;
            width: 16px;
        }
    </style>
</x-layouts.admin-app>