@vite(['resources/js/app.js'])

<x-layouts.app title="Home">
    <x-features.home.hero-revision/>
    <x-features.home.about-revision/>
    <x-features.home.what-we-do/>
    <x-features.home.projects/>
    <x-features.home.why-choose-us/>
    {{-- <x-features.home.banner-consultation/> --}}
    {{-- <x-features.home.team/> --}}
    <x-features.home.blogs :blogs="$blogs"/>
    <x-features.home.contact/>
</x-layouts.app>