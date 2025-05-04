<nav class="bg-gray-800 text-white p-4 sticky top-0 z-50 shadow-md
    {{ request()->is('dashboard') || request()->is('profile') || request()->is('pengelolaan') ? 'bg-black' : '' }}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="mr-2 flex sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-none"
                        aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <a href="{{ route('dashboard') }}">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 w-auto">
                        <span class="text-lg font-bold">Ayo Masak</span>
                    </div>
                </a>
            </div>
            <div class="hidden sm:flex sm:items-center sm:space-x-4">
                <a href="{{ route('dashboard') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white {{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Dashboard</a>
                <a href="{{ route('profile') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white {{ request()->is('profile') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Profile</a>
                <a href="{{ route('pengelolaan') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700 hover:text-white {{ request()->is('pengelolaan') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Pengelolaan</a>
            </div>
            <a href="{{ route('profile') }}">
                <div class="flex items-center space-x-4">
                    <img class="size-8 object-cover rounded-full" src="{{ asset('images/profile.png') }}" alt="Profile">
                    @if (session('username'))
                        <form action="{{ route('logout') }}" method="POST" class="hidden sm:flex">
                            @csrf
                            <button type="submit"
                                class="bg-gray-200 hover:bg-transparent text-gray-800 hover:text-white border hover:border-white px-4 py-2 rounded-md text-base font-medium">Logout</button>
                        </form>
                    @endif
                </div>
            </a>
        </div>
    </div>
    <div class="sm:hidden hidden px-2 pt-2 pb-4 space-y-2" id="mobile-menu">
        <a href="{{ route('dashboard') }}"
            class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white {{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Dashboard</a>
        <a href="{{ route('profile') }}"
            class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white {{ request()->is('profile') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Profile</a>
        <a href="{{ route('pengelolaan') }}"
            class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-white {{ request()->is('pengelolaan') ? 'bg-gray-900 text-white' : 'text-gray-300' }}">Pengelolaan</a>
        @if (session('username'))
            <form action="{{ route('logout') }}" method="POST" class="mt-2">
                @csrf
                <button type="submit"
                    class="w-full text-left bg-gray-200 hover:bg-transparent text-gray-800 hover:text-white border hover:border-white px-4 py-2 rounded-md text-base font-medium">Logout</button>
            </form>
        @endif
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const icons = this.querySelectorAll('svg');
        menu.classList.toggle('hidden');
        icons.forEach(icon => icon.classList.toggle('hidden'));
    });
</script>
