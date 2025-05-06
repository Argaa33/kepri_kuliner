<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kuliner Riau</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Flowbite CDN -->
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
  <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#c9d6e6] font-sans">

  <!-- Sidebar -->
  <div class="flex min-h-screen">
    <aside class="w-16 bg-[#0e2d66] text-white flex flex-col items-center py-6 space-y-6">
      <a href="#" data-tooltip-target="tooltip-home">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 10h3v10h14V10h3L12 2z"/></svg>
      </a>
      <a href="#"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 
      3.41 0.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 
      22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 
      11.54L12 21.35z"/></svg></a>
      <a href="#"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M2 4v16h20V4H2zm2 2h16v12H4V6zm3 2v2h10V8H7z"/></svg></a>
      <a href="#"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 16a4 4 0 100-8 4 4 0 000 8zm8-4a8 8 0 11-16 
      0 8 8 0 0116 0z"/></svg></a>
      <a href="#"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 
      4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 
      7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 
      1.6-9.6 4.8V22h19.2v-2.8c0-3.2-6.4-4.8-9.6-4.8z"/></svg></a>
    </aside>



    <!-- Konten -->
    <main class="flex-1 p-10 relative overflow-hidden">
      <div class="bg-cover bg-center bg-no-repeat h-80 w-full flex flex-col items-center justify-center" style="background-image: url('images/barelang.jpg');">
          <h1 class="text-3xl font-bold text-[#44729a] drop-shadow-lg bg-white/70 px-4 py-2 rounded">KULINERIAU</h1>
          <p class="mt-2 text-lg text-[#44729a] drop-shadow-lg bg-white/70 px-4 py-2 rounded">Selamat datang di Kuliner Riau</p>
      </div>
      <p class="text-xl text-[#5d7a9e] mt-2">Riau Nusantara</p>
      

      <!-- Ilustrasi Background -->
      <div class="flex flex-col items-start space-y-4">
        <img src="images/gonggong.png" alt="Kuliner kiri" class="w-40">
        <p class="text-lg">Gonggong, seafood yang biasa dijadikan sebagai cemilan.</p>
      </div>

      <div class="flex flex-col items-start space-y-4">
        <img src="images/laksa.png" alt="Kuliner tengah" class="w-32">
        <p class="text-lg">Laksa, makanan berkuah yang terbuat dari mie dan campuran bumbu-bumbu.</p>
      </div>

      <div class="flex flex-col items-start space-y-4">
        <img src="images/otak-otak.jpeg" alt="Kuliner kanan" class="w-48">
        <p class="text-lg">Otak-otak, cemilan yang terbuat dari ikan yang digiling dan dibentuk menjadi pipih.</p>
      </div>
    </main>
  </div>

</body>
<style>
  img {
    width: 150px;
    height: 150px;
  }
</style>
</html>

