
@php
    $teamMembers = [
        [
            'name' => 'Hiroshi Tanaka',
            'position' => 'Chief Technology Officer',
            'expertise' => 'System Architecture & AI Development',
            'experience' => '15+ years in enterprise solutions',
            'image' => 'images/team/hiroshi.jpg',
            'linkedin' => '#',
            'email' => 'hiroshi@fts.biz.id',
            'background' => 'Former senior architect at major Japanese tech companies'
        ],
        [
            'name' => 'Sari Wulandari',
            'position' => 'Head of Development',
            'expertise' => 'Full-Stack Development & Team Leadership',
            'experience' => '8+ years in web & mobile development',
            'image' => 'images/team/sari.jpg',
            'linkedin' => '#',
            'email' => 'sari@fts.biz.id',
            'background' => 'Lead developer with expertise in modern web frameworks'
        ],
        [
            'name' => 'Ahmad Rizki',
            'position' => 'Senior Frontend Developer',
            'expertise' => 'React, Vue.js & Mobile App Development',
            'experience' => '6+ years in frontend development',
            'image' => 'images/team/ahmad.jpg',
            'linkedin' => '#',
            'email' => 'ahmad@fts.biz.id',
            'background' => 'Specialist in creating engaging user experiences'
        ],
        [
            'name' => 'Maya Putri',
            'position' => 'UI/UX Designer',
            'expertise' => 'User Interface & Experience Design',
            'experience' => '5+ years in digital design',
            'image' => 'images/team/maya.jpg',
            'linkedin' => '#',
            'email' => 'maya@fts.biz.id',
            'background' => 'Creative designer focused on user-centered solutions'
        ],
        [
            'name' => 'Budi Santoso',
            'position' => 'Backend Developer',
            'expertise' => 'Laravel, Node.js & Database Architecture',
            'experience' => '7+ years in backend development',
            'image' => 'images/team/budi.jpg',
            'linkedin' => '#',
            'email' => 'budi@fts.biz.id',
            'background' => 'Expert in scalable backend systems and APIs'
        ],
        [
            'name' => 'Dewi Lestari',
            'position' => 'Project Manager',
            'expertise' => 'Agile Project Management & Client Relations',
            'experience' => '6+ years in project management',
            'image' => 'images/team/dewi.jpg',
            'linkedin' => '#',
            'email' => 'dewi@fts.biz.id',
            'background' => 'Experienced in delivering complex IT projects on time'
        ]
    ];
@endphp

<section id="team" class="relative px-4 py-16">
    <div class="absolute inset-0 bg-gradient-to-b from-white to-gray-50"></div>
    <div class="absolute top-20 right-12 animate-pulse rotate hidden lg:block">
        <div class="w-24 h-24 bg-primary-blue/10 rounded-full"></div>
    </div>
    <div class="absolute bottom-20 left-12 animate-pulse top-bottom hidden lg:block">
        <div class="w-16 h-16 bg-primary-blue/15 rounded-full"></div>
    </div>

    <div class="relative z-10 text-black space-y-12">
        <!-- Header Section -->
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                Our Team
            </p>
            <div class="space-y-2">
                <h3 class="text-3xl font-bold">
                    Meet the Experts Behind
                </h3>
                <h3 class="text-3xl font-bold">
                    Our Digital Solutions
                </h3>
                <p class="text-primary-gray font-nunito-sans max-w-2xl mx-auto mt-4">
                    Our diverse team combines Japanese precision with Indonesian creativity, bringing together years of experience in cutting-edge technology development.
                </p>
            </div>
        </div>

        <!-- Team Members Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8">
            @foreach ($teamMembers as $member)
                <x-features.home.team-member-item 
                    :name="$member['name']"
                    :position="$member['position']"
                    :expertise="$member['expertise']"
                    :experience="$member['experience']"
                    :image="$member['image']"
                    :linkedin="$member['linkedin']"
                    :email="$member['email']"
                    :background="$member['background']"
                />
            @endforeach
        </div>

        <!-- Team Stats -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-8 text-center">
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-primary-blue">95%</div>
                    <div class="text-lg font-semibold text-black">Indonesian Talent</div>
                    <p class="text-sm text-primary-gray font-nunito-sans">Local expertise with global standards</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-primary-blue">20+</div>
                    <div class="text-lg font-semibold text-black">Team Members</div>
                    <p class="text-sm text-primary-gray font-nunito-sans">Skilled professionals across all disciplines</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-primary-blue">50+</div>
                    <div class="text-lg font-semibold text-black">Combined Years</div>
                    <p class="text-sm text-primary-gray font-nunito-sans">Of industry experience</p>
                </div>
                <div class="space-y-2">
                    <div class="text-3xl font-bold text-primary-blue">24/7</div>
                    <div class="text-lg font-semibold text-black">Collaboration</div>
                    <p class="text-sm text-primary-gray font-nunito-sans">Always ready to support your needs</p>
                </div>
            </div>
        </div>

        <!-- Join Our Team CTA -->
        <div class="bg-gradient-to-r from-primary-blue to-primary-blue/90 rounded-2xl p-8 text-center text-white">
            <div class="space-y-6">
                <h4 class="text-2xl font-bold">
                    Want to Join Our Team?
                </h4>
                <p class="font-nunito-sans max-w-2xl mx-auto">
                    We're always looking for talented individuals who share our passion for innovation and excellence in technology. Join us in shaping Indonesia's digital future.
                </p>
                <x-shared.link-button variant="secondary" class="w-fit">
                    VIEW CAREER OPPORTUNITIES
                </x-shared.link-button>
            </div>
        </div>
    </div>
</section>

<style>
    .rotate {
        animation: rotate 8s linear infinite;
    }
    
    .top-bottom {
        animation: topBottom 6s ease-in-out infinite;
    }
    
    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes topBottom {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>
