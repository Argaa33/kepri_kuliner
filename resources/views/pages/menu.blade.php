<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KulineRiau - Nasi Box</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        .hero-bg {
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><rect fill="%23D2691E" width="1200" height="800"/><circle fill="%23F4A460" cx="200" cy="200" r="100" opacity="0.3"/><circle fill="%23DEB887" cx="800" cy="400" r="150" opacity="0.2"/></svg>');
            background-size: cover;
            background-position: center;
        }
        
        .food-image {
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease;
        }
        
        .food-image:hover {
            transform: scale(1.05);
        }
        
        .nasi-gulai {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="%23DEB887" width="400" height="300"/><rect fill="%23F4A460" x="50" y="50" width="300" height="200" rx="20"/><circle fill="%23FFD700" cx="200" cy="150" r="60"/><rect fill="%238B4513" x="100" y="200" width="200" height="20" rx="10"/></svg>');
        }
        
        .ikan-bakar {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300"><rect fill="%23CD853F" width="400" height="300"/><ellipse fill="%23DC143C" cx="200" cy="150" rx="120" ry="60"/><circle fill="%23FFD700" cx="150" cy="100" r="20"/><circle fill="%23FFD700" cx="250" cy="100" r="20"/><rect fill="%23228B22" x="50" y="220" width="300" height="30" rx="15"/></svg>');
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    <header class="hero-bg text-white relative">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold">KulineRiau</div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="hover:text-yellow-300 transition-colors">Home</a>
                    <a href="#" class="hover:text-yellow-300 transition-colors">Menu</a>
                    <a href="#" class="hover:text-yellow-300 transition-colors">Tentang Kami</a>
                    <a href="#" class="hover:text-yellow-300 transition-colors">Order</a>
                    <a href="#" class="hover:text-yellow-300 transition-colors">Kontak</a>
                </div>
                <div class="md:hidden">
                    <button class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        
        <!-- Hero Content -->
        <div class="container mx-auto px-6 py-20 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-8 mb-8 inline-block">
                    <div class="w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                        <span class="text-4xl">🍛</span>
                    </div>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Cita Rasa Asli Riau</h1>
                <p class="text-xl md:text-2xl opacity-90">Nikmati kelezatan kuliner tradisional Riau dalam kemasan praktis</p>
            </div>
        </div>
    </header>

    <!-- Nasi Box Section -->
    <section class="py-16 bg-gradient-to-b from-blue-100 to-blue-200">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-blue-900 mb-4">Nasi Box</h2>
                <p class="text-lg md:text-xl text-blue-800 max-w-3xl mx-auto leading-relaxed">
                    Nasi hangat dan lauk-lauk khas Riau dalam satu kotak! Ini dia rahasia kecil 
                    yang bikin makan siangmu luar biasa!
                </p>
            </div>

            <!-- Food Cards -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Nasi Gulai Tunjang -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="nasi-gulai food-image h-64 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3">
                                <span class="text-sm font-medium text-gray-800">⭐ Special Menu</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Nasi Gulai Tunjang</h3>
                        <p class="text-gray-600 mb-4">Kelezatan gulai tunjang khas Riau dengan bumbu rempah tradisional yang menggugah selera</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-600">Rp 25.000</span>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition-colors">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Ikan Bakar Sambal Tempoyak -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="ikan-bakar food-image h-64 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3">
                                <span class="text-sm font-medium text-gray-800">🔥 Best Seller</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Ikan Bakar Sambal Tempoyak</h3>
                        <p class="text-gray-600 mb-4">Ikan bakar segar dengan sambal tempoyak autentik yang pedas dan segar khas Riau</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-600">Rp 30.000</span>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition-colors">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Third Menu Item -->
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="nasi-gulai food-image h-64 relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3">
                                <span class="text-sm font-medium text-gray-800">🌟 Recommended</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Nasi Rendang Riau</h3>
                        <p class="text-gray-600 mb-4">Rendang daging empuk dengan citarasa khas Riau yang berbeda dari rendang Padang</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-orange-600">Rp 28.000</span>
                            <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full transition-colors">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <button class="bg-blue-900 hover:bg-blue-800 text-white text-xl font-semibold px-12 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Menu Lengkap
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🚚</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Delivery Cepat</h3>
                    <p class="text-gray-600">Pesanan diantar dalam 30 menit di area Pekanbaru</p>
                </div>
                <div class="p-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🌿</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Bahan Segar</h3>
                    <p class="text-gray-600">Menggunakan bahan-bahan segar dan bumbu tradisional asli</p>
                </div>
                <div class="p-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">💝</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Kemasan Praktis</h3>
                    <p class="text-gray-600">Box ramah lingkungan yang mudah dibawa kemana saja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-4">
                <h3 class="text-2xl font-bold mb-2">KulineRiau</h3>
                <p class="text-blue-200">Cita Rasa Asli Riau dalam Setiap Gigitan</p>
            </div>
            <div class="flex justify-center space-x-6 mb-4">
                <a href="#" class="text-blue-200 hover:text-white transition-colors">Instagram</a>
                <a href="#" class="text-blue-200 hover:text-white transition-colors">WhatsApp</a>
                <a href="#" class="text-blue-200 hover:text-white transition-colors">Facebook</a>
            </div>
            <p class="text-blue-300 text-sm">&copy; 2024 KulineRiau. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            // Add smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Add order button functionality
            document.querySelectorAll('button').forEach(button => {
                if (button.textContent.includes('Pesan')) {
                    button.addEventListener('click', function() {
                        alert('Pesanan akan segera diproses! Terima kasih telah memilih KulineRiau.');
                    });
                }
            });
        });
    </script>
</body>
</html>