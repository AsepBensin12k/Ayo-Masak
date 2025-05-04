@extends('layouts.app')

@section('content')
<h2 class="text-center text-2xl font-bold mb-4">{{ $resepDetail['nama'] }}</h2>
<img src="{{ asset($resepDetail['gambar']) }}"
     alt="{{ $resepDetail['nama'] }}"
     class="w-64 h-auto object-contain rounded mx-auto mb-4">
<div class="bg-white p-4 rounded shadow">
    <p class="mb-2"><strong>Bahan:</strong><br> {!! nl2br(e($resepDetail['bahan'])) !!}</p>
    <p class="mb-4"><strong>Langkah:<br></strong> {!! nl2br(e($resepDetail['langkah'])) !!}</p>
    <a href="{{ route('pengelolaan') }}" class="inline-block bg-gray-800 hover:bg-gray-950 text-white px-4 py-2 rounded">
        Kembali
    </a>
</div>
@endsection
