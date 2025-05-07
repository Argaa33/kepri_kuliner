<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Kuliner Riau' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#c9d6e6] text-gray-800">
    <x-sidebar />

    <main class="ml-16 p-8 relative min-h-screen">
        {{ $slot }}
    </main>
</body>
</html>
