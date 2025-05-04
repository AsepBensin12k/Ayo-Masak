@extends('layouts.app')

@section('content')
    <form method="get" action="{{ route('pengelolaan') }}" class="mb-4">
        <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-2 sm:space-y-0 items-center">
            <div class="relative w-full sm:w-1/2">
                <input type="text" name="search" placeholder="Cari Resep..." value="{{ $search }}"
                    class="border p-2 rounded w-full pr-10">
                <button type="submit" class="absolute right-2 top-2 text-gray-500 hover:text-gray-700">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <select name="kategori" class="border p-2 rounded w-full sm:w-1/2">
                <option value="">Semua Kategori</option>
                @foreach ($kategoriList as $k)
                    <option value="{{ $k }}" {{ $kategori == $k ? 'selected' : '' }}>{{ $k }}</option>
                @endforeach
            </select>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded w-full sm:w-auto">Filter</button>
        </div>
    </form>

    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($reseps as $resep)
            <div class="bg-white rounded-2xl shadow p-3">
                <img src="{{ asset($resep['gambar']) }}" class="w-full h-40 object-cover mb-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 items-center mb-2">
                    <h2 class="text-lg font-bold">{{ $resep['nama'] }}</h2>
                    <div class="sm:text-right mt-2 sm:mt-0">
                        <a href="{{ route('resep.detail', ['id' => $resep['id'], 'username' => $username]) }}"
                           class="text-blue-500 border border-blue-500 px-3 py-1 text-sm rounded hover:bg-blue-500 hover:text-white transition">
                           Lihat Resep
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
