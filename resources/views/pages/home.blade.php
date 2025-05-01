@extends('layouts.app')

    <div class="flex items-center justify-between rounded-full bg-white px-6 py-3 w-full max-w-2xl shadow mb-6">
        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24"><path d="..."/></svg>
        <input type="text" placeholder="Search by food name / restaurants" class="w-full outline-none ml-4 bg-transparent text-sm">
    </div>

    <div class="bg-white p-6 rounded-3xl flex justify-between items-center shadow mb-6">
        <div class="max-w-xl">
            <p class="text-lg font-bold text-gray-900 leading-relaxed">
                <span class="text-blue-900">Eksplorasi</span> <span class="text-[#294778]">Kuliner Khas Batam dan Kepulauan Riau</span>,
                <span class="text-[#2a5d99]">Rasakan Lezatnya</span> Hidangan Autentik yang Bikin Ketagihan!
            </p>
        </div>
        <img src="{{ asset('images/chef.png') }}" class="w-28 h-28" alt="Chef">
    </div>
    <div class="mb-4">
        <h2 class="text-lg font-semibold text-gray-700 mb-3">Popular <span class="text-blue-500">this week</span></h2>
        <div class="grid grid-cols-3 gap-4">
            @include ('components.food-card', ['title' => 'Nasi Goreng', 'price' => '25K', 'rating' => 4.5, 'image' => 'nasi-goreng.png'])
            @include ('components.food-card', ['title' => 'Mie Goreng', 'price' => '20K', 'rating' => 4.0, 'image' => 'mie-goreng.png'])
            @include ('components.food-card', ['title' => 'Kwetiau', 'price' => '30K', 'rating' => 4.8, 'image' => 'kwetiau.png'])
        </div>
    </div>
    <div class="mt-8">
        <h2 class="text-lg font-semibold text-right text-[#2c3a54]">Menu Lainnya</h2>
        <div class="flex flex-col items-end space-y-4 mt-4">
            @include ('components.food-card-small', ['title' => 'Nasi Goreng', 'price' => '25K', 'image' => 'nasi-goreng.png'])
            @include ('components.food-card-small', ['title' => 'Mie Goreng', 'price' => '20K', 'image' => 'mie-goreng.png'])
            @include ('components.food-card-small', ['title' => 'Kwetiau', 'price' => '30K', 'image' => 'kwetiau.png'])
        </div>
    </div>

</x-layouts.app>

