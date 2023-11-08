@if (Route::has('login'))
    <div class="w-100 z-10 flex p-6 text-right sm:fixed sm:right-0 sm:top-0">
        <a href="{{ url('/') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">
            Vehicle Parts Management System
        </a>
        <div class="flex-1"></div>

        <a href="{{ url('/') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Home</a>
        <a href="{{ url('/services') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Services</a>
        <a href="{{ url('/about') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">About
            Us</a>
        <a href="{{ url('/products') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Products</a>
        <a href="{{ url('/partners') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Partners</a>
        <a href="{{ url('/contact') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Contact
            Us</a>

        @auth
            <a href="{{ url('/home') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
        @else
            <a href="{{ route('login') }}"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Register</a>
            @endif
        @endauth
    </div>
@endif
