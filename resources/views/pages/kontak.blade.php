@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-cover bg-center" style="background-image: url('/images/kontak.jpeg');">
    <div class="absolute inset-0 bg-white bg-opacity-60 flex items-center justify-center px-6">
        <div class="bg-white bg-opacity-80 rounded-2xl p-8 w-full max-w-2xl shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-indigo-900">Ada Pertanyaan? Kirimkan Pesan Anda Kesini</h2>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="#">
                @csrf

                <div class="mb-4">
                    <input type="text" name="nama" placeholder="Masukkan Nama"
                        class="w-full px-4 py-2 rounded-full bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>

                <div class="mb-4">
                    <input type="email" name="email" placeholder="Masukkan Email"
                        class="w-full px-4 py-2 rounded-full bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>

                <div class="mb-4">
                    <label for="pesan" class="block text-sm font-semibold text-gray-700 mb-1">Pesan Anda:</label>
                    <textarea name="pesan" rows="5"
                        class="w-full px-4 py-2 rounded-xl bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-indigo-900 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-200">
                        POST
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
