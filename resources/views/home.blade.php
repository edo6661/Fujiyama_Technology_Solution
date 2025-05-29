
<x-layouts.app title="Home">
    @vite(['resources/js/app.js'])
    <x-features.home.hero/>
    <x-features.home.about/>
    <x-features.home.what-we-do/>
    <x-features.home.banner-consultation/>
    <x-features.home.team/>
    <x-features.home.blogs :blogs="$blogs"/>
</x-layouts.app>