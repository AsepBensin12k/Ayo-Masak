@extends('layouts.login')

@section('content')
<form action="{{ route('do.login') }}" method="POST">
    @csrf
    <h2 class="text-white text-2xl font-semibold mb-4 text-center">Login</h2>
    <label class="text-white block mb-1">Username</label>
    <input type="text" name="username" class="w-full p-2 border border-gray-300 rounded mb-4 transition-all duration-300 bg-white bg-opacity-10 focus:bg-white" required>
    <label class="text-white block mb-1">Password</label>
    <div class="relative mb-4">
        <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded transition-all duration-300 bg-white bg-opacity-10 focus:bg-white pr-10 hide-password-toggle" required>
        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3 group" onclick="togglePassword()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 group-hover:text-purple-300 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
        </button>
    </div>
    <button class="bg-blue-500 text-white px-4 py-2 rounded w-full hover:bg-blue-600 transition-all duration-300 transform">Login</button>
</form>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        const eyeIcon = passwordInput.nextElementSibling.querySelector('svg');
        if (type === 'text') {
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            `;
        } else {
            eyeIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            `;
        }
    }
</script>
@endsection
