<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rating Kuliner Kepri</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-yellow-50 font-sans">

  <!-- Header -->
  <header class="bg-yellow-600 text-white text-center p-4 text-2xl font-bold">
    Beri Rating Kuliner Khas Kepri
  </header>

  <!-- Section Rating -->
  <section class="max-w-3xl mx-auto mt-6 p-4 bg-white rounded-xl shadow">
    <h2 class="text-xl font-semibold mb-4">Pilih Makanan & Beri Penilaian</h2>

    <form class="space-y-6">
      <!-- Pilih Makanan -->
      <div>
        <label class="block text-gray-700 mb-1">Nama Makanan</label>
        <select class="w-full border rounded p-2" required>
          <option value="">-- Pilih Makanan --</option>
          <option>Mie Lendir</option>
          <option>Otak-Otak</option>
          <option>Lakse Kuah</option>
          <option>Nasi Dagang</option>
        </select>
      </div>

      <!-- Rating Bintang -->
      <div>
        <label class="block text-gray-700 mb-1">Rating Anda</label>
        <div class="flex space-x-2">
          <!-- Bintang Rating -->
          <label>
            <input type="radio" name="rating" value="1" class="hidden peer" required />
            <i data-feather="star" class="text-gray-400 peer-checked:text-yellow-500 cursor-pointer"></i>
          </label>
          <label>
            <input type="radio" name="rating" value="2" class="hidden peer" />
            <i data-feather="star" class="text-gray-400 peer-checked:text-yellow-500 cursor-pointer"></i>
          </label>
          <label>
            <input type="radio" name="rating" value="3" class="hidden peer" />
            <i data-feather="star" class="text-gray-400 peer-checked:text-yellow-500 cursor-pointer"></i>
          </label>
          <label>
            <input type="radio" name="rating" value="4" class="hidden peer" />
            <i data-feather="star" class="text-gray-400 peer-checked:text-yellow-500 cursor-pointer"></i>
          </label>
          <label>
            <input type="radio" name="rating" value="5" class="hidden peer" />
            <i data-feather="star" class="text-gray-400 peer-checked:text-yellow-500 cursor-pointer"></i>
          </label>
        </div>
      </div>

      <!-- Komentar -->
      <div>
        <label class="block text-gray-700 mb-1">Komentar</label>
        <textarea class="w-full border rounded p-2" rows="3" placeholder="Tulis pendapat Anda..."></textarea>
      </div>

      <!-- Tombol Submit -->
      <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
        Kirim Rating
      </button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="text-center text-gray-600 text-sm py-4 mt-8">
    &copy; 2025 Kuliner Kepri. Terima kasih atas penilaian Anda.
  </footer>

  <script>
    feather.replace();
  </script>
</body>
</html>
