<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kuliner Kepri' }}</title>

    @vite('resources/css/app.css')
    <link href="/styles/flowbite.min.css" rel="stylesheet" />
    <script src="/styles/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    {{-- Navbar --}}
    @include('components.menu')

    {{-- Konten utama --}}
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            {{ $slot }}
        </div>
    </main>

    {{-- Footer --}}
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Kuliner Kepri. All rights reserved.
    </footer>

</body>
</html>
