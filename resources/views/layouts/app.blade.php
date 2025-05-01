<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kuliner Kepri')</title>

    <link href="/styles/flowbite.min.css" rel="stylesheet" />
    <script src="/styles/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navbar -->
    @include('components.menu')

    <!-- Main Content -->
    <main class="container mx-auto mt-10 px-4">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">@yield('page_title', 'Kuliner Khas Kepulauan Riau')</h2>
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-10 text-center text-sm text-gray-500 py-4 border-t">
        &copy; {{ date('Y') }} Kuliner Kepri. All rights reserved.
    </footer>

</body>
</html>
    