<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login- Kuliner Riau</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('images/barelang.jpg') }}');">

    <div class="bg-white bg-opacity-60 backdrop-blur-md rounded-3xl shadow-lg p-10 w-[350px] sm:w-[400px]">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-black mb-6">LOGIN TO YOUR<br>ACCOUNT</h2>

        <form method="POST">

            <div class="mb-4">
                <label for="username" class="block text-sm font-semibold text-gray-800 mb-1">Username :</label>
                <input type="text" id="username" name="username" required
                       class="w-full px-4 py-2 rounded-full bg-white bg-opacity-70 text-black placeholder-gray-500 focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-semibold text-gray-800 mb-1">Password :</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-4 py-2 rounded-full bg-white bg-opacity-70 text-black placeholder-gray-500 focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div class="flex justify-between items-center">
                <button type="submit"
                        class="px-6 py-2 bg-gray-300 rounded-full shadow hover:bg-gray-400 transition text-lg font-semibold">
                    Login
                </button>
                <a href="registration" class="text-black hover:underline text-sm">Registrasi?</a>
            </div>
        </form>
    </div>

</body>
</html>
