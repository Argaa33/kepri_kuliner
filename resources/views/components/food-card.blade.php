@props(['title', 'price', 'rating', 'image', 'bg' => 'bg-white'])

<div class="{{ $bg }} rounded-2xl p-4 text-center shadow relative">
    <div class="flex justify-center mb-2">
        <img src="{{ asset('images/' . $image) }}" class="rounded-full w-20 h-20 object-cover">
    </div>
    <p class="font-bold">{{ $title }}</p>
    <p class="text-sm text-gray-500">khas Batam</p>
    <div class="mt-1 text-xs text-gray-600">
        ⭐ {{ $rating }}
    </div>
    <span class="absolute top-2 right-2 text-sm font-semibold bg-blue-700 text-white px-2 py-1 rounded-full">
        {{ $price }}
    </span>
</div>
