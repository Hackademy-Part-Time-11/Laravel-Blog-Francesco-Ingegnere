<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car's Order - {{$title ?? config('app.name')}}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="d-flex flex-column min-vh-100">
            {{-- navbar --}}
            {{-- <x-navbar /> --}}

            <main class="container flex-grow-1 pt-5">
                {{ $slot }}
            </main>

            {{-- <footer class="mt-5">
                <x-footer />
            </footer> --}}
        </div>

    </body>
</html>