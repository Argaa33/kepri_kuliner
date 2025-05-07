<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - KulineRasa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="h-screen flex">

    <!-- Sidebar -->
    <div class="w-16 bg-blue-900 text-white flex flex-col items-center py-8 space-y-8">
        <i class="fas fa-home text-xl hover:text-gray-300 cursor-pointer"></i>
        <i class="fas fa-heart text-xl hover:text-gray-300 cursor-pointer"></i>
        <i class="fas fa-shopping-cart text-xl hover:text-gray-300 cursor-pointer"></i>
        <i class="fas fa-envelope text-xl hover:text-gray-300 cursor-pointer"></i>
        <i class="fas fa-user text-xl hover:text-gray-300 cursor-pointer"></i>
    </div>

    <!-- Konten Utama -->
    <div class="flex-1 relative bg-cover bg-center p-12 overflow-auto"
         style="background-image: url('{{ asset('img/tentang-kami.jpeg') }}');">

        <div class="bg-white bg-opacity-70 p-8 rounded-md shadow-md max-w-2xl">
            <p class="mb-6 text-justify text-gray-800 leading-relaxed">
                Selamat datang di <strong>KulineRasa</strong>, tempat terbaik untuk mengeksplorasi dan menikmati berbagai sajian kuliner khas Kepulauan Riau! Kami hadir untuk memperkenalkan kelezatan dan kekayaan rasa yang menjadi ciri khas dari daerah yang kaya akan budaya dan tradisi ini.
            </p>
            <p class="text-justify text-gray-800 leading-relaxed">
                Kepulauan Riau, dengan pesona alamnya yang memukau, juga memiliki ragam kuliner yang tak kalah memikat. Dari cita rasa manis, pedas, hingga gurih, setiap hidangan yang kami sajikan menggambarkan kekayaan sejarah dan kebudayaan lokal yang telah turun-temurun dijaga. Kami berkomitmen untuk menyajikan hidangan dengan bahan-bahan pilihan dan resep otentik, yang diolah dengan penuh cinta dan keahlian.
            </p>
        </div>

    </div>

</body>
</html>
