<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <livewire:styles />
        @vite('resources/js/app.js')
    </head>
    <body>
        @yield('content')
        <livewire:scripts />
    </body>
</html>
