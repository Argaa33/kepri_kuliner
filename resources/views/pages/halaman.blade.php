<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuliner Batam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#dde6f5] font-sans">

    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-screen w-14 bg-[#0e2c5e] flex flex-col items-center justify-between py-6">
        <div class="space-y-6">
            <a href="#"><img src="icons/home.svg" class="w-6" /></a>
            <a href="#"><img src="icons/heart.svg" class="w-6" /></a>
            <a href="#"><img src="icons/cart.svg" class="w-6" /></a>
            <a href="#"><img src="icons/message.svg" class="w-6" /></a>
            <a href="#"><img src="icons/user.svg" class="w-6" /></a>
        </div>
    </aside>

    <main class="ml-16 p-6 space-y-8">
        <!-- Search Bar -->
        <div class="flex justify-between items-center">
            <div class="relative w-full max-w-md">
                <input type="text" placeholder="Search by food name / restaurants"
                    class="w-full py-2 px-10 rounded-full border border-gray-300 focus:outline-none" />
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <button class="text-lg font-bold px-4 py-2">Menu Lainnya</button>
        </div>

        <!-- Banner -->
        <div class="flex items-center bg-white p-6 rounded-xl shadow-md">
            <div class="text-left">
                <p class="text-xl font-bold text-[#0e2c5e]">Eksplorasi <span class="text-blue-600">Kuliner Khas Batam dan Kepulauan Riau</span>, Rasakan Lezatnya Hidangan Autentik yang Bikin Ketagihan!</p>
            </div>
            <img src="images/chef.png" alt="Chef" class="w-28 ml-auto" />
        </div>

        <!-- Popular This Week -->
        <div>
            <h2 class="text-xl font-bold text-[#1b2a56] mb-4">Popular <span class="text-blue-400">this week</span></h2>
            <div class="grid grid-cols-3 gap-4">
                <!-- Card Laksa -->
                <div class="bg-white p-4 rounded-2xl text-center shadow">
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between">
                        <img src="images/laksa.png" alt="Laksa" class="w-20 h-20 rounded-full mx-auto object-cover" />
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.7</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">65K</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">Laksa</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                </div>

                <!-- Otak-Otak -->
                <div class="bg-orange-100 p-4 rounded-2xl text-center shadow">
                    <img src="images/otak-otak.jpeg" alt="Otak-Otak" class="w-20 h-20 rounded-full mx-auto object-cover" />
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between mt-2">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.9</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">30K</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">Otak-Otak</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                </div>

                <!-- Gonggong -->
                <div class="bg-white p-4 rounded-2xl text-center shadow">
                    <img src="images/gonggong.png" alt="Gonggong" class="w-20 h-20 rounded-full mx-auto object-cover" />
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between mt-2">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.8</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">80K</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">Gonggong</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                </div>
            </div>
        </div>

        <!-- Favorite Restaurants -->
        <div>
            <h2 class="text-xl font-bold text-[#1b2a56] mt-6 mb-4">Favourite <span class="text-blue-400">restaurants</span></h2>
            <div class="flex space-x-4">
                <!-- Card Restaurant -->
                <div class="bg-white rounded-2xl shadow p-2 flex items-center space-x-2 w-52">
                    <img src="images/bengkong.png" class="w-12 h-12 rounded-lg" />
                    <div>
                        <h4 class="font-bold text-sm">Bengkong Laut</h4>
                        <p class="text-xs">Jl. Bengkong Jaya</p>
                        <p class="text-yellow-400 text-sm">★★★★★</p>
                    </div>
                </div>
                <!-- Tambah restoran lainnya -->
            </div>
        </div>
    </main>

    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
</body>
</html>
