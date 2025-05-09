<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Makanan Kuliner Kepri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />
<body class="bg-yellow-50 font-sans">
  <header class="bg-yellow-600 text-white p-4 text-center text-2xl font-bold">
    Kuliner Khas Kepri - Form Pemesanan
  </header>

    <!-- Menu Makanan -->
    <section class="max-w-4xl mx-auto mt-6 p-4">
        <h2 class="text-xl font-semibold mb-4">Daftar Makanan</h2>
        <div class="grid md:grid-cols-2 gap-4">
            <!-- Card Makanan -->
            <div class="bg-white rounded-xl shadow p-4 flex items-center">
                <img src="images/mie-lendir.jpg" alt="Mie Lendir" class="w-20 h-20 rounded-full mr-4" />
                <div>
                    <h3 class="text-lg font-bold">Mie Lendir</h3>
                    <p class="text-sm text-gray-600">Mie kuning dengan kuah kental khas.</p>
                    <span class="text-green-600 font-semibold">Rp15.000</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-4 flex items-center">
                <img src="images/otak-otak.jpeg" alt="Otak-Otak" class="w-20 h-20 rounded-full mr-4" />
                <div>
                    <h3 class="text-lg font-bold">Otak-Otak</h3>
                    <p class="text-sm text-gray-600">Ikan dibungkus daun dan dibakar.</p>
                    <span class="text-green-600 font-semibold">Rp10.000</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-4 flex items-center">
                <img src="images/laksa.png" alt="Lakse Kuah" class="w-20 h-20 rounded-full mr-4" />
                <div>
                    <h3 class="text-lg font-bold">Lakse Kuah</h3>
                    <p class="text-sm text-gray-600">Mirip spaghetti dengan kuah kari.</p>
                    <span class="text-green-600 font-semibold">Rp18.000</span>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow p-4 flex items-center">
                <img src="images/sop ikan.jpg" alt="Sop Ikan" class="w-20 h-20 rounded-full mr-4" />
                <div>
                    <h3 class="text-lg font-bold">Sop Ikan</h3>
                    <p class="text-sm text-gray-600">Makanan Nusantara Khas Batam.</p>
                    <span class="text-green-600 font-semibold">Rp12.000</span>
                </div>
            </div>
 
    <!-- Form Pemesanan -->
    <section class="max-w-2xl mx-auto mt-8 p-4 bg-white shadow-lg rounded-xl">
  <!-- Form Pemesanan -->
  <section class="max-w-2xl mx-auto mt-8 p-4 bg-white shadow-lg rounded-xl">
    <h2 class="text-xl font-semibold mb-4">Formulir Pemesanan</h2>
    <form class="space-y-4">
      <div>
        <label class="block text-gray-700">Nama Lengkap</label>
        <input type="text" class="w-full border p-2 rounded" placeholder="Nama Anda" required />
      </div>
      <div>
        <label class="block text-gray-700">Nomor HP</label>
        <input type="tel" class="w-full border p-2 rounded" placeholder="08xxxxxxxxxx" required />
      </div>
      <div>
        <label class="block text-gray-700">Pilih Makanan</label>
        <select class="w-full border p-2 rounded" required>
          <option value="">-- Pilih Menu --</option>
          <option>Mie Lendir</option>
          <option>Otak-Otak</option>
          <option>Lakse Kuah</option>
          <option>Nasi Dagang</option>
        </select>
      </div>
      <div>
        <label class="block text-gray-700">Jumlah</label>
        <input type="number" class="w-full border p-2 rounded" min="1" value="1" />
      </div>
      <div>
        <label class="block text-gray-700">Catatan</label>
        <textarea class="w-full border p-2 rounded" rows="3" placeholder="Contoh: Tidak pedas"></textarea>
      </div>
      <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
        Pesan Sekarang
      </button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="text-center text-gray-600 text-sm py-4 mt-8">
    &copy; 2025 Kuliner Kepri. Dibuat dengan ❤️ oleh Mahasiswa Web.
  </footer>

</body>
</html>

