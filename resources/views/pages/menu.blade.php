<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuliner Batam</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        /* Gaya tambahan untuk ikon sidebar (jika diperlukan) */
        .sidebar-icons a {
            color: white;
            text-decoration: none;
            margin-bottom: 20px; /* Sedikit dikurangi agar pas dengan spacing sebelumnya */
            font-size: 20px; /* Ukuran ikon disesuaikan */
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
        }
        .sidebar-icons a:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body class="bg-[#dde6f5] font-sans">

    <nav class="fixed left-0 top-0 h-16 w-full bg-[#0e2c5e] flex items-center justify-center">
        <ul class="flex space-x-6">
            <li><a href="#" class="text-white">Home</a></li>
            <li><a href="#" class="text-white">Favorite</a></li>
            <li><a href="#" class="text-white">Tentang kami</a></li>
            <li><a href="#" class="text-white">Message</a></li>
            <li><a href="#" class="text-white">Profile</a></li>
        </ul>
    </nav>

    <main class="ml-16 p-6 space-y-8">
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

        <div class="flex items-center bg-white p-6 rounded-xl shadow-md">
            <div class="text-left">
                <p class="text-xl font-bold text-[#0e2c5e]">Eksplorasi <span class="text-blue-600">Kuliner Khas Batam dan Kepulauan Riau</span>, Rasakan Lezatnya Hidangan Autentik yang Bikin Ketagihan!</p>
            </div>
            <img src="images/chef.png" alt="Chef" class="w-28 ml-auto" />
        </div>

        <div>
            <h2 class="text-xl font-bold text-[#1b2a56] mb-4">Terpopuler <span class="text-blue-400">minggu ini</span></h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-2xl text-center shadow">
                    <img src="images/laksa.png" alt="Laksa" class="w-40 h-40 rounded-full mx-auto object-cover" />
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between mt-2">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.8</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">65</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">Laksa</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                    <p class="text-sm text-gray-600">Resep:</p>
                    <ol class="list-disc list-inside text-sm text-gray-600">
                        <li>1 cup mie beras</li>
                        <li>1/2 cup minyak sayur</li>
                        <li>1 bawang bombay, cincang</li>
                        <li>2 siung bawang putih, cincang</li>
                        <li>1 pound udang, kupas dan buang kulit</li>
                        <li>1/2 cup santan</li>
                        <li>1/2 cup kaldu ayam</li>
                        <li>1 sendok makan kecap</li>
                        <li>1 sendok makan saus tiram (opsional)</li>
                        <li>Garam dan merica secukupnya</li>
                        <li>Daun ketumbar segar untuk hiasan</li>
                    </ol>
                </div>

                <div class="bg-orange-100 p-4 rounded-2xl text-center shadow">
                    <img src="images/ketam.jpeg" alt="Otak-Otak" class="w-40 h-40 rounded-full mx-auto object-cover" />
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between mt-2">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.9</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">40K</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">ketam isi</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                    <p class="text-sm text-gray-600">Resep:</p>
                    <ol class="list-disc list-inside text-sm text-gray-600">
                        <li>500 gr daging kepiting</li>
                        <li>2 siung bawang putih</li>
                        <li>3 siung bawang merah</li>
                        <li>2 butir telur</li>
                        <li>1 sdm tepung roti</li>
                        <li>garam dan lada</li>
                        <li>cangkang kepiting buat wadah</li>
                </div>

                <div class="bg-white p-4 rounded-2xl text-center shadow">
                    <img src="images/lendir.jpeg" alt="Gonggong" class="w-40 h-40 rounded-full mx-auto object-cover" />
                    <div class="text-left text-sm text-gray-500 flex items-center justify-between mt-2">
                        <span class="flex items-center"><svg class="w-4 h-4 mr-1" fill="currentColor"><use href="#star" /></svg>4.8</span>
                        <span class="bg-[#dde6f5] rounded-full px-2 py-0.5 text-xs">80K</span>
                    </div>
                    <h3 class="font-bold text-lg mt-2">mie lendir</h3>
                    <p class="text-sm text-gray-600">khas Batam</p>
                    <p class="text-sm text-gray-600">Resep:</p>
                    <ol class="list-disc list-inside text-sm text-gray-600">
                        <li>100 gr kacang tanah (digoreng)</li>
                        <li>2 sdm ubi jalar rebus (untuk pengental)</li>
                        <li>3 siung bawang putih</li>
                        <li>3 buah cabai merah</li>
                        <li>2 sdm kecap manis</li>     
                        <li>Garam, Gula, Kaldu Bubuk secukupnya</li>
                        <li>air secukupnya</li>                   
                    </ol>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-xl font-bold text-[#1b2a56] mt-6 mb-4">Favourite <span class="text-blue-400">restaurants</span></h2>
            <div class="flex space-x-4">
                <div class="bg-white rounded-2xl shadow p-2 flex items-center space-x-2 w-52">
                    <img src="images/bengkong.png" class="w-12 h-12 rounded-lg" />
                    <div>
