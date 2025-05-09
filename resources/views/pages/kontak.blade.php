<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KulineRiau - Kontak Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .beach-background {
            background-image: url('/images/kontak.png');
            background-size: cover;
            background-position: center;
        }
        
    </style>
</head>
<body class="h-screen overflow-hidden">
    <div class="flex h-full">
        <!-- Left Blue Sidebar -->
        <div class="bg-blue-900 text-white w-16 flex flex-col items-center py-6 h-full z-20">
            <a href="#" class="mb-8 text-center">
                <i class="fas fa-home text-xl"></i>
            </a>
            <a href="#" class="mb-8 text-center">
                <i class="far fa-heart text-xl"></i>
            </a>
            <a href="#" class="mb-8 text-center">
                <i class="fas fa-shopping-cart text-xl"></i>
            </a>
            <a href="#" class="mb-8 text-center">
                <i class="far fa-envelope text-xl"></i>
            </a>
            <a href="#" class="mb-8 text-center">
                <i class="far fa-user text-xl"></i>
            </a>
        </div>

        <!-- Main Content with Beach Background -->
        <div class="flex-1 beach-background relative">
            <!-- Semi-transparent overlay covering the whole page -->
            <div class="absolute inset-0 glass-overlay rounded-l-3xl z-10"></div>
            
            <!-- Content Container -->
            <div class="relative z-20 h-full flex">
                <!-- Left Side - Brand Information -->
                <div class="w-1/2 p-10 flex flex-col justify-center">
                    <h1 class="text-5xl font-bold text-black mb-1">KulineRiau</h1>
                    <p class="text-black italic text-lg mb-10">Cinta Rasa Kuliner Nusantara</p>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center">
                            <i class="fab fa-facebook-f w-6 text-blue-900"></i>
                            <span class="ml-2 text-gray-700">@KulineRiau.ppt</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp w-6 text-blue-900"></i>
                            <span class="ml-2 text-gray-700">+62-821-7243-9650</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-instagram w-6 text-blue-900"></i>
                            <span class="ml-2 text-gray-700">@KulineRiau.ppt</span>
                        </div>
                    </div>
                    
                    <p class="font-bold text-blue-900">CONTACT US</p>
                </div>
                
                <!-- Right Side - Contact Form -->
                <div class="w-1/2 p-10 flex flex-col justify-center">
                    <div class="mb-6">
                        <h2 class="text-lg font-semibold text-black mb-2">Ada Pertanyaan? Kirimkan Pesan Anda di Sini!</h2>
                    </div>
                    
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Anda:</label>
                            <input type="text" id="name" placeholder="Masukkan Nama" class="w-full px-3 py-2 bg-blue-50 border border-blue-100 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-Mail Anda:</label>
                            <input type="email" id="email" placeholder="Masukkan Email" class="w-full px-3 py-2 bg-blue-50 border border-blue-100 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda:</label>
                            <textarea id="message" rows="4" class="w-full px-3 py-2 bg-blue-50 border border-blue-100 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="submit" class="px-8 py-2 bg-blue-900 text-white font-medium rounded-md hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-offset-2">
                                POST
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>