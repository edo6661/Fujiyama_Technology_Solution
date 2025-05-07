@props([
    'title' => 'Please provide a title',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title="$title"/>
    </head>
    <body>
        <header>    
            <a href="{{ route('home') }}">
                Home
            </a>
        </header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
