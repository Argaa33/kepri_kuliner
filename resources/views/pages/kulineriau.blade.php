@extends('layouts.app')

@section('content')
    <div class="relative bg-gradient-to-br from-blue-200 to-blue-100 min-h-screen flex">
        <aside class="bg-blue-900 text-white w-16 md:w-24 py-8 flex flex-col items-center space-y-6">
            <div class="absolute top-2 left-2 bg-white text-blue-900 rounded-full text-xs font-bold px-2 py-1">
                Section 2
            </div>
            <a href="#" class="hover:bg-blue-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0l2-2m-2 2v-1a1 1 0 011-1h3m10-11l-2-2m2 2v-1a1 1 0 01-1-1h-3" />
                </svg>
            </a>
            <a href="#" class="hover:bg-blue-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </a>
            <a href="#" class="hover:bg-blue-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#" class="hover:bg-blue-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31-.826 2.37 1.544a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543.826 3.31-1.544 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31.826-2.37-1.544a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543-.826-3.31 1.544-2.37a1.724 1.724 0 002.572-1.065z" />
                </svg>
            </a>
            <a href="#" class="hover:bg-blue-800 rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
        </aside>

        <main class="flex-1 p-8">
            <h1 class="text-5xl font-bold text-blue-900">KULINERIAU</h1>
            <p class="text-lg text-gray-700 mt-2">Riau Nusantara</p>

            <div class="absolute top-0 left-0 w-full h-full opacity-20">
                <img src="{{ asset('images/kuliner1.png') }}" alt="Kuliner Background 1" class="absolute top-0 left-1/4 transform -translate-x-1/2 h-48 object-contain">
                <img src="{{ asset('images/kuliner2.png') }}" alt="Kuliner Background 2" class="absolute top-1/4 right-1/4 transform translate-x-1/2 h-64 object-contain">
                <img src="{{ asset('images/kuliner3.png') }}" alt="Kuliner Background 3" class="absolute bottom-0 left-1/3 transform -translate-x-1/2 h-48 object-contain">
                <img src="{{ asset('images/kuliner4.png') }}" alt="Kuliner Background 4" class="absolute bottom-1/4 right-1/3 transform translate-x-1/2 h-64 object-contain">
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">Makanan 1</h2>
                    <p class="text-gray-600">Deskripsi singkat makanan 1.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">Makanan 2</h2>
                    <p class="text-gray-600">Deskripsi singkat makanan 2.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-blue-800 mb-2">Makanan 3</h2>
                    <p class="text-gray-600">Deskripsi singkat makanan 3.</p>
                </div>
                </div>
        </main>
    </div>
@endsection