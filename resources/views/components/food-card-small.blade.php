@props(['title', 'price', 'image', 'color' => 'bg-orange-100'])

<div class="{{ $color }} rounded-2xl p-4 w-[180px] flex justify-between items-center shadow">
    <div>
        <p class="font-bold text-sm">{{ $title }}</p>
        <p class="text-xs text-gray-600">khas Batam</p>
    </div>
    <span class="text-sm font-semibold bg-blue-900 text-white px-2 py-1 rounded-full">{{ $price }}</span>
</div>
