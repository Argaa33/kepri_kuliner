<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Menu Mie Lendir - Kuliner Riau</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Flowbite CDN -->
  <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
  <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#c9d6e6] font-sans">
    <!-- Sidebar -->
    <div class="flex min-h-screen">
    <aside class="w-16 bg-[#0e2d66] text-white flex flex-col items-center py-6 space-y-6">
      <a href="index" data-tooltip-target="tooltip-home">
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

    <!-- Content -->
    <div class="m-10 bg-white p-6 rounded shadow-md">
        <p class="text-3xl text-cyan-500 my-2">Mie Lendir</p>
        <img src="images/mie-lendir.jpg" class="max-w-100 max-h-80" alt="Mie Lendir">

        <p class="text-3xl text-cyan-500 my-2">Resep</p>
        <p class="text-l my-1">
            1. Kukus ubi, hingga empuk, kipas, sisihkan. Goreng kacang, sisihkan
        </p>
        <p class="text-l my-1">
            2. Haluskan bumbu
        </p>
        <p class="text-l my-1">
            3. Haluskan kacang
        </p>
        <p class="text-l my-1">
            4. Haluskan ubi. Sangrai ebi, kemudian haluskan
        </p>
        <p class="text-l my-1">
            5. Tumis bumbu halus, masukkan bumbu cemplung. Masak hingga tanak
        </p>
        <p class="text-l my-1">
            6. Tambahkan air, masukkan ubi dan kacang tanah, ebi yang sudah dihaluskan. 
            Masukkan gula merah, garam, gula pasir, kaldu bubuk. Masak hingga mendidih dan cek rasa
        </p>
        <p class="text-l my-1">
            7. Masukkan tepung yang sudah dicairkan. Biarkan cair mengental.
        </p>
        <p class="text-l my-1">
            8. Rebus Mie lidi dan tauge. Tata di piring saji
        </p>
        <p class="text-l my-1">
            9. Siram dengan saus kental. Sajikan
        </p>
    
<!-- Rating Section -->
  <p class="text-3xl text-cyan-500 my-2">Beri Rating</p>
  <div id="stars" class="flex items-center space-x-1">
    <!-- Bintang 1 -->
    <svg data-value="1" class="w-8 h-8 cursor-pointer text-gray-400 hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z" />
    </svg>
    <!-- Bintang 2 -->
    <svg data-value="2" class="w-8 h-8 cursor-pointer text-gray-400 hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z" />
    </svg>
    <!-- Bintang 3 -->
    <svg data-value="3" class="w-8 h-8 cursor-pointer text-gray-400 hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z" />
    </svg>
    <!-- Bintang 4 -->
    <svg data-value="4" class="w-8 h-8 cursor-pointer text-gray-400 hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z" />
    </svg>
    <!-- Bintang 5 -->
    <svg data-value="5" class="w-8 h-8 cursor-pointer text-gray-400 hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 15l-5.878 3.09 1.122-6.545L.489 6.91l6.561-.955L10 0l2.95 5.955 6.561.955-4.755 4.635 1.122 6.545z" />
    </svg>
  </div>
  <button
    onclick="submitRating()"
    class="mt-4 bg-cyan-500 text-white px-4 py-2 rounded hover:bg-cyan-600"
  >
    Kirim Rating
  </button>
</div>

<script>
  const stars = document.querySelectorAll("#stars svg");
  let selectedRating = 0;

  stars.forEach((star, index) => {
    star.addEventListener("click", () => {
      selectedRating = index + 1;
      updateStars(selectedRating);
    });
  });

  function updateStars(rating) {
    stars.forEach((star, index) => {
      if (index < rating) {
        star.classList.remove("text-gray-400");
        star.classList.add("text-yellow-400");
      } else {
        star.classList.remove("text-yellow-400");
        star.classList.add("text-gray-400");
      }
    });
  }

  function submitRating() {
    if (selectedRating > 0) {
      alert("Terima kasih atas rating " + selectedRating + " bintangnya!");
    } else {
      alert("Silakan pilih jumlah bintang terlebih dahulu.");
    }
  }
</script>

</body>
</html>