<x-layouts.plain-app title="Login">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Side - Form -->
        <div class="flex-1 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-12 lg:max-w-md xl:max-w-lg">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <x-shared.heading 
                        :title="__('Log in to your account')" 
                        :description="__('Enter your email and password below to log in')" 
                        class="text-center"
                    />
                    
                    <x-features.auth.login.session-status 
                        class="mt-4 text-center" 
                        :status="session('status')" 
                    />
                </div>

                <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="space-y-4">
                        <x-shared.input 
                            name="email" 
                            type="email" 
                            label="Email" 
                            placeholder="nama@contoh.com" 
                            :value="old('email')"
                            required
                            fullWidth
                            :error="$errors->first('email')"
                        />
                
                        <div class="relative">
                            <x-shared.input 
                                name="password" 
                                type="password" 
                                label="Password" 
                                placeholder="********" 
                                required
                                fullWidth
                                :error="$errors->first('password')"
                            />
                            
                            @if (Route::has('password.reset'))
                                <div class="text-right mt-1">
                                    <x-shared.link 
                                        :href="route('password.request')" 
                                        class="text-xs"
                                    >
                                        {{ __('Forgot your password?') }}
                                    </x-shared.link>
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                name="remember" 
                                id="remember" 
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                {{ old('remember') ? 'checked' : '' }}
                            />
                            <label for="remember" class="ml-2 block text-sm text-gray-700">
                                {{ __('Remember me') }}
                            </label>
                        </div>
                    </div>
            
                    <div>
                        <x-shared.button 
                            type="submit" 
                            variant="primary"
                            size="lg"
                            fullWidth
                        >
                            {{ __('Sign in') }}
                        </x-shared.button>
                    </div>
                    
                    <div class="relative flex items-center justify-center">
                        <div class="absolute w-full border-t border-gray-300"></div>
                        <div class="relative bg-white px-4 text-sm text-gray-500">
                            {{ __('Or continue with') }}
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <x-shared.button 
                            type="button"
                            variant="outline"
                            size="md"
                            fullWidth
                            class="flex items-center justify-center space-x-2"
                        >
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.701-6.033-6.032s2.701-6.032,6.033-6.032c1.498,0,2.866,0.549,3.921,1.453l2.814-2.814C17.503,2.988,15.139,2,12.545,2C7.021,2,2.543,6.477,2.543,12s4.478,10,10.002,10c8.396,0,10.249-7.85,9.426-11.748L12.545,10.239z"/>
                            </svg>
                            <span>Google</span>
                        </x-shared.button>
                        
                        <x-shared.button 
                            type="button"
                            variant="outline"
                            size="md"
                            fullWidth
                            class="flex items-center justify-center space-x-2"
                        >
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.397,20.997v-8.196h2.765l0.411-3.209h-3.176V7.548c0-0.926,0.258-1.56,1.587-1.56h1.684V3.127C15.849,3.039,15.025,2.997,14.201,3c-2.444,0-4.122,1.492-4.122,4.231v2.355H7.332v3.209h2.753v8.202H13.397z"/>
                            </svg>
                            <span>Facebook</span>
                        </x-shared.button>
                    </div>
                </form>
                
                @if (Route::has('register'))
                    <div class="text-center">
                        <span class="text-sm text-gray-600">
                            {{ __('Don\'t have an account?') }}
                        </span>
                        <x-shared.link 
                            :href="route('register')" 
                            class="text-sm font-medium ml-1"
                        >
                            {{ __('Sign up') }}
                        </x-shared.link>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Right Side - Image -->
        <div class="hidden lg:block lg:flex-1 bg-gradient-to-r from-blue-500 to-indigo-600 relative overflow-hidden">
            <!-- Anda bisa mengganti URL gambar di bawah ini -->
            <img 
                src="{{ asset('images/login.png') }}" 
                alt="Login" 
                class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-90"
            />
            
            <div class="absolute inset-0 flex flex-col justify-center px-8 lg:px-12">
                <div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl shadow-2xl max-w-lg">
                    <h2 class="text-3xl font-bold text-white mb-4">Welcome Lorem ipsum dolor, sit amet consectetur </h2>
                    <p class="text-white/90 text-lg mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate repellendus libero eveniet corporis ipsa placeat voluptatem odit consequuntur nam.
                    </p>
                    <div class="flex space-x-3">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="{{ asset("images/avatar_placeholder.png") }}" alt="Testimonial">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-white">Lorem ipsum </p>
                                <p class="text-xs text-white/80">CEO, PT Fujiyama</p>
                            </div>
                        </div>
                        <div class="text-yellow-300">
                            ★★★★★
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.plain-app>

<style>
    /* Tempatkan di resources/css/auth.css atau tambahkan ke file CSS utama Anda */

/* Animasi fade-in untuk form login */
.login-animation {
    animation: fadeIn 0.8s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Efek hover untuk tombol sosial media */
.social-button:hover {
    transform: translateY(-2px);
    transition: all 0.2s ease;
}

/* Styling untuk gambar latar belakang */
.login-image-container {
    position: relative;
}

.login-image-container:before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.8) 0%, rgba(79, 70, 229, 0.8) 100%);
    z-index: 1;
}

.login-image-content {
    position: relative;
    z-index: 2;
}

/* Responsif untuk tablet */
@media (max-width: 1023px) {
    .login-form-container {
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        border-radius: 0.5rem;
        margin: 2rem auto;
        max-width: 90%;
    }
}

/* Efek hover untuk input */
.form-input:focus {
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
}
</style>