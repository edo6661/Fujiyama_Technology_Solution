@props([
    'name' => null,
    'position' => null,
    'expertise' => null,
    'experience' => null,
    'image' => null,
    'linkedin' => '#',
    'email' => '#',
    'background' => null,
])

<div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 hover:border-primary-blue/20">
    <!-- Image Section -->
    <div class="relative overflow-hidden">
        <div class="aspect-square bg-gradient-to-br from-primary-blue/10 to-primary-blue/5">
            <img src="{{ asset($image) }}" alt="{{ $name }}" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                 onerror="this.src='{{ asset('images/team/placeholder.jpg') }}'">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        
        <!-- Social Links Overlay -->
        <div class="absolute bottom-4 left-4 right-4 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <a href="{{ $linkedin }}" 
               class="w-8 h-8 bg-white/90 text-primary-blue rounded-full flex items-center justify-center hover:bg-white transition-colors duration-300"
               title="LinkedIn">
                <i class="fa-brands fa-linkedin-in text-sm"></i>
            </a>
            <a href="mailto:{{ $email }}" 
               class="w-8 h-8 bg-white/90 text-primary-blue rounded-full flex items-center justify-center hover:bg-white transition-colors duration-300"
               title="Email">
                <i class="fa-solid fa-envelope text-sm"></i>
            </a>
        </div>
    </div>

    <!-- Content Section -->
    <div class="p-6 space-y-4">
        <div class="space-y-2">
            <h4 class="text-xl font-bold text-black group-hover:text-primary-blue transition-colors duration-300">
                {{ $name }}
            </h4>
            <p class="text-primary-blue font-semibold text-sm">
                {{ $position }}
            </p>
        </div>

        <div class="space-y-3">
            <div class="space-y-1">
                <p class="text-xs font-semibold text-black uppercase tracking-wide">Expertise</p>
                <p class="text-sm text-primary-gray font-nunito-sans">
                    {{ $expertise }}
                </p>
            </div>
            
            <div class="space-y-1">
                <p class="text-xs font-semibold text-black uppercase tracking-wide">Experience</p>
                <p class="text-sm text-primary-gray font-nunito-sans">
                    {{ $experience }}
                </p>
            </div>

            @if($background)
                <div class="space-y-1">
                    <p class="text-xs font-semibold text-black uppercase tracking-wide">Background</p>
                    <p class="text-sm text-primary-gray font-nunito-sans">
                        {{ $background }}
                    </p>
                </div>
            @endif
        </div>

        <!-- Contact Actions -->
        <div class="pt-2 border-t border-gray-100">
            <div class="flex gap-2">
                <a href="{{ $linkedin }}" 
                   class="flex-1 text-center py-2 px-3 text-xs font-semibold text-primary-blue hover:bg-primary-blue hover:text-white transition-colors duration-300 rounded-md border border-primary-blue">
                    Connect
                </a>
                <a href="mailto:{{ $email }}" 
                   class="flex-1 text-center py-2 px-3 text-xs font-semibold text-white bg-primary-blue hover:bg-primary-blue/90 transition-colors duration-300 rounded-md">
                    Contact
                </a>
            </div>
        </div>
    </div>
</div>