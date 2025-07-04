<footer class="pb-8 px-4 text-black space-y-8" id="footer">
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 justify-evenly">
        
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Join Our Newsletter
            </h4>
            <p class="text-primary-gray font-nunito-sans">
                Stay updated with the latest tech trends and exclusive offers from Fujiyama Technology Solution.
            </p>
            <div class="flex items-center">
                <input
                    class="bg-secondary-gray text-senary-gray rounded-l-md px-4 py-2 w-full max-w-[240px] focus:outline-none focus:ring-2 focus:ring-primary-blue focus:border-transparent"
                    placeholder="Your email"
                />
                <button class="bg-primary-blue text-white rounded-r-md px-4 py-2">
                    <i class="fa-solid fa-arrow-right text-lg text-white"></i>
                </button>
            </div>
        </div>

        
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Quick Links
            </h4>
            <div class="flex flex-col gap-2">
                @php
                    $navItems = [
                        'Home' => "/#",
                        'About Us' => '/#about',
                        'Services' => '/#what-we-do',
                        'Blog' => '/#blog',
                        'Contact' => '/#footer',
                    ]; 
                @endphp
                @foreach ($navItems as $name => $link)
                    <a href="{{ $link }}" class="text-primary-gray hover:text-primary-blue transition-colors duration-300 ease-in-out font-medium font-nunito-sans">
                        {{ $name }}
                    </a>
                @endforeach
            </div>
        </div>

        
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Contact Us
            </h4>
            <div class="space-y-2">
                <div class="flex gap-1 items-center">
                    <i class="fa-solid fa-phone text-primary-blue"></i>
                    <p class="text-primary-gray font-nunito-sans">
                        0895-2933-6179
                    </p>
                </div>
                <div class="flex gap-1 items-center">
                    <i class="fa-solid fa-envelope text-primary-blue"></i>
                    <p class="text-primary-gray font-nunito-sans">
                        azmi@fbe.co.id
                    </p>
                </div>
                <div class="flex gap-1 items-center">
                    <i class="fa-solid fa-location-dot text-primary-blue"></i>
                    <p class="text-primary-gray font-nunito-sans">
                        NEO SOHO Mall
                    </p>
                </div>
            </div>
        </div>

        
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Follow Us
            </h4>
            <p class="text-primary-gray font-nunito-sans max-w-[240px]">
                Follow us on social media for the latest updates and project showcases.
            </p>
            <div class="flex gap-4 mt-2">
                <a href="#" class="text-primary-blue text-lg hover:text-blue-700"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="text-primary-blue text-lg hover:text-blue-500"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="text-primary-blue text-lg hover:text-pink-600"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="text-primary-blue text-lg hover:text-blue-800"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <hr/>

    
    <p class="text-primary-gray font-nunito-sans text-center">
        &copy; 2024 Fujiyama Technology Solution. All rights reserved.
    </p>
</footer>
