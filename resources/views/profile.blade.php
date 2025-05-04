@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-20 bg-white p-6 rounded shadow-xl">
    <img src="{{ asset('images/profile.png') }}" alt="Foto Profil" class="w-32 h-32 object-cover rounded-full mx-auto my-2 shadow-md">
    <h2 class="text-2xl font-medium mb-4 text-center">Profile</h2>
    <p><strong>Username:</strong> {{ $username }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>
    <a href="{{ route('dashboard') }}" class="bg-gray-800 hover:bg-gray-950 text-white rounded-md inline-block py-2 px-3 mt-4">Kembali ke Dashboard</a>
</div>
@endsection
