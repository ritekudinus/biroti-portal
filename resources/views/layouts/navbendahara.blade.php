<aside
    class="flex flex-col top-0 left-0 sticky w-64 h-screen px-4 py-8 overflow-y-auto
           bg-gradient-to-b from-purple-600 via-purple-500 to-pink-400
           border-r shadow-lg">
    <a href="#" class="flex items-center space-x-2">
        <h1 class="text-2xl font-extrabold tracking-wide text-white sm:text-3xl">
            Bendahara App
        </h1>
    </a>

    <div class="relative mt-6">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-gray-300" viewBox="0 0 24 24" fill="none">
                <path
                    d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </span>

        <input type="text"
            class="w-full py-2 pl-10 pr-4 text-gray-800 bg-white rounded-md focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50"
            placeholder="Search" />
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a href="{{ route('bendahara.dashboard') }}"
                class="flex items-center px-4 py-2 mt-5 rounded-md transition-colors duration-300
                       {{ request()->routeIs('bendahara.dashboard')
                           ? 'bg-white text-purple-700 font-semibold shadow-sm'
                           : 'text-white hover:bg-white/20' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5M19 11C20.1 11 21 11.9 21 13V19c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2V13c0-1.1.9-2 2-2M19 11V9c0-1.1-.9-2-2-2M5 11V9c0-1.1.9-2 2-2M7 7V5c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2v2M7 7h10" />
                </svg>
                <span class="mx-4 font-medium">Dashboard</span>
            </a>

            <a href="{{ route('bendahara.dompet.index') }}"
                class="flex items-center px-4 py-2 mt-5 rounded-md transition-colors duration-300 text-white hover:bg-white/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zm-8 8a8 8 0 0116 0H8z" />
                </svg>
                <span class="mx-4 font-medium">Dompet Kas</span>
            </a>

            <a href="#"
                class="flex items-center px-4 py-2 mt-5 rounded-md transition-colors duration-300 text-white hover:bg-white/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10m-12 8h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="mx-4 font-medium">Absensi Siswa</span>
            </a>

            <hr class="my-6 border-purple-300/50" />

            <a href="{{ route('profile.edit') }}"
                class="flex items-center px-4 py-2 mt-5 rounded-md transition-colors duration-300
                       {{ request()->routeIs('profile.edit')
                           ? 'bg-white text-purple-700 font-semibold shadow-sm'
                           : 'text-white hover:bg-white/20' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span class="mx-4 font-medium">Settings</span>
            </a>
        </nav>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex items-center px-4 py-2 mt-6 text-white hover:bg-white/20 rounded-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M16 17l5-5-5-5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21 12H9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>
