<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Kuliner Batam' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-[#d4e1f0] font-sans">
    <div class="flex">
        <x-sidebar />
        <main class="flex-1 p-6 overflow-x-hidden">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
