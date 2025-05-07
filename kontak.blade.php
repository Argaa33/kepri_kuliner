    <div class="flex h-screen bg-blue-50">
    <!-- Sidebar -->
    <div class="w-16 bg-blue-900 flex flex-col items-center py-6 text-white">
        <div class="mb-8">
            <i class="w-6 h-6 icon-home"></i>
        </div>
        <div class="mb-8">
            <i class="w-6 h-6 icon-heart"></i>
        </div>
        <div class="mb-8">
            <i class="w-6 h-6 icon-shopping-cart"></i>
        </div>
        <div class="mb-8">
            <i class="w-6 h-6 icon-mail"></i>
        </div>
        <div class="mb-8">
            <i class="w-6 h-6 icon-user"></i>
        </div>
    </div>

    <div class="flex-1 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 to-blue-500/30"></div>
            <div class="h-full w-full bg-cover bg-center" style="background-image: url('/api/placeholder/800/600');"></div>
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4">
            <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 w-full max-w-md">
                <div class="text-center mb-6">
                    <h1 class="text-4xl font-bold text-blue-900">KulineRiau</h1>
                    <p class="text-blue-800 text-sm">Cinta Rasa Kuliner Nusantara</p>
                </div>

                <div class="space-y-2 mb-6">
                    <div class="flex items-center justify-center space-x-2">
                        <i class="text-blue-900 icon-facebook" style="font-size: 18px;"></i>
                        <span class="text-sm text-blue-900">KulineRiauRept</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <i class="text-blue-900 icon-message-circle" style="font-size: 18px;"></i>
                        <span class="text-sm text-blue-900">+1234-7890-9876</span>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <i class="text-blue-900 icon-instagram" style="font-size: 18px;"></i>
                        <span class="text-sm text-blue-900">@KulineRiauRept</span>
                    </div>
                    <div class="text-center text-sm text-blue-900">CONTACT US</div>
                </div>

                <div class="bg-blue-100/80 rounded-lg p-4">
                    <h2 class="text-center text-blue-900 mb-3">Ada Pertanyaan? Kirimkan Pesan Anda di Sini!</h2>
                    <div>
                        <div class="mb-3">
                            <label class="block text-sm text-blue-900 mb-1">Nama Anda:</label>
                            <input 
                                type="text" 
                                name="name"
                                class="w-full px-3 py-2 rounded bg-white/80 border border-blue-200 focus:outline-none focus:ring-1 focus:ring-blue-500"
                                placeholder="Masukkan Nama"
                            />
                        </div>

                        <div class="mb-3">
                            <label class="block text-sm text-blue-900 mb-1">E-Mail Anda:</label>
                            <input 
                                type="email" 
                                name="email"
                                class="w-full px-3 py-2 rounded bg-white/80 border border-blue-200 focus:outline-none focus:ring-1 focus:ring-blue-500"
                                placeholder="Masukkan Email"
                            />
                        </div>

                        <div class="mb-3">
                            <label class="block text-sm text-blue-900 mb-1">Pesan Anda:</label>
                            <textarea 
                                name="message"
                                class="w-full px-3 py-2 rounded bg-white/80 border border-blue-200 focus:outline-none focus:ring-1 focus:ring-blue-500 h-24"
                                placeholder="Tulis pesan Anda di sini..."
                            ></textarea>
                        </div>

                        <div class="text-center">
                            <button 
                                class="bg-blue-900 text-white px-6 py-2 rounded-full hover:bg-blue-800 transition flex items-center justify-center mx-auto"
                            >
                                POST
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

