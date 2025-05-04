@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="w-full max-w-2xl bg-white p-6 rounded-xl shadow-lg text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Ayo Masak Logo" class="w-28 h-28 mx-auto mb-4">
            <h1 class="text-2xl font-bold mb-4">Selamat Datang {{ $username }} di Ayo Masak!</h1>
            <p class="text-base leading-relaxed text-justify">
                Ayo Masak adalah website yang menyediakan berbagai resep makanan yang memudahkan Anda dalam menentukan
                hidangan yang tepat dan sesuai dengan selera Anda. Terdapat banyak pilihan resep masakan di Ayo Masak,
                mulai dari kuliner nusantara hingga internasional. Jadi, tunggu apalagi? Ayo jelajahi berbagai kategori
                resep, temukan inspirasi, dan mulai memasak dengan mudah!
            </p>
            <div class="flex justify-start mt-4">
                <a href="{{ route('pengelolaan') }}">
                    <button type="submit"
                        class="flex justify-center gap-2 items-center shadow-xl text-sm bg-white text-gray-800 border-gray-800
                        lg:font-medium isolation-auto relative z-10 px-4 py-2 overflow-hidden border rounded-full group
                        before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full
                        before:hover:left-0 before:rounded-full before:bg-gray-800 hover:text-white hover:border-transparent
                        before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700">
                        Explore lebih jauh
                        <svg class="w-7 h-7 group-hover:rotate-90 text-gray-800 group-hover:text-white ease-linear duration-300
                            rounded-full border border-gray-800 group-hover:border-white p-2 rotate-45"
                            viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                class="fill-current"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
