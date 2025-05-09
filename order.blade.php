@extends ('layouts.app')

@section('content')  {{-- Tambahkan jika pakai section --}}
    <div class="flex flex-col items-center justify-center min-h-screen bg-[#c9d9ee] px-4 py-10">
        ...
    </div>
@endsection


        {{-- Gambar Makanan --}}
        <img src="{{ asset('images/laksa.jpg') }}" alt="Laksa"
             class="w-32 h-32 rounded-full object-cover border-4 border-white shadow mb-6">

        {{-- Box Status --}}
        <div class="bg-[#e0e6ef] w-full max-w-xl rounded-3xl p-6 text-center shadow-lg">
            <h1 class="text-3xl font-bold text-[#1b2a56] mb-2">Laksa</h1>
            <p class="text-lg font-semibold text-[#1b2a56] mb-4">Total 1 Produk: Rp. 55.000</p>

            <div class="bg-blue-100 text-blue-800 text-sm font-medium rounded-2xl px-4 py-3 mb-4">
                Estimasi Tiba: 29 Mrt - 1 Apr<br>
                Pemesanan dalam Proses Perjalanan
            </div>

            <div class="flex justify-center space-x-4">
                {{-- Tombol Flowbite --}}
                <button type="button"
                        class="text-white bg-[#0e2c5e] hover:bg-blue-900 font-semibold rounded-full text-sm px-6 py-2">
                    Pesanan Selesai
                </button>
                <button type="button"
                        class="text-white bg-[#0e2c5e] hover:bg-blue-900 font-semibold rounded-full text-sm px-6 py-2">
                    Lacak
                </button>
            </div>
        </div>

    </div>
extends ('layouts.app')
