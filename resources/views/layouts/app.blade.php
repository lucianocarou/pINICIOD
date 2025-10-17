<!DOCTYPE html>
    <html>
    <head>
        <title>@yield('title') - My App</title>
        {{-- Stylesheets --}}
        @yield('styles')

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    </head>

    <body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<!--
    <h1>Esto es app.blade.php</h1>
-->    
    <hr>

        <header>
            {{-- Header content --}}
             <x-inicio.drawer />
        </header>

        <main>
            @yield('content') {{-- Main content area --}}
        </main>

        <footer>
            {{-- Footer content --}}
        </footer>

        {{-- JavaScript files --}}
        @yield('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
    </html>