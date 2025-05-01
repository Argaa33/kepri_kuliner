@extends('layouts.app')

@section('title', 'Beranda')
@section('page_title', 'Kuliner Khas Kepulauan Riau')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @php
        $cards = [
            [
                'image' => asset('images/otak-otak.jpeg'),
                'title' => 'Otak-Otak',
                'desc' => 'Makanan khas Kepri berbahan dasar ikan tenggiri.'
            ],
            [
                'image' => asset('images/lakse.jpg'),
                'title' => 'Lakse',
                'desc' => 'Kuliner mirip spageti yang disajikan dengan kuah kari.'
            ],
            [
                'image' => asset('images/lemper-bakar.jpg'),
                'title' => 'Lemper Bakar',
                'desc' => 'Lemper bakar khas Kepri dengan isian abon ikan.'
            ]
        ];
    @endphp

    @foreach($cards as $card)
        @include('components.card', $card)
    @endforeach
</div>
@endsection
