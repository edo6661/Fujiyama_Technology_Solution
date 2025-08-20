@props([
    'title' => 'Please provide a title',
])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title="$title"/>
    </head>
    <body>
        <main class="space-y-16">
            {{ $slot }}
        </main>
        <x-partials.footer/>
    </body>
</html>
