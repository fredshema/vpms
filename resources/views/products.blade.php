<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vehicle Parts Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/tailwind.css', 'resources/css/app.css'])
    </head>

    <body class="antialiased">
        <div
            class="bg-dots-darker dark:bg-dots-lighter relative min-h-screen bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
            @include('layouts.navbar')

            <div class="w-full max-w-7xl p-6 lg:p-8">
                <div class="mt-16">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($products as $product)
                            <div
                                class="duration-250 flex w-full rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
                                <div class="w-full">
                                    <div
                                        class="flex w-full items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                            class="h-[200px] w-full rounded">
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        {{ $product->name }}
                                    </h2>

                                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $product->description }}
                                    </p>
                                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $product->price }} FRW
                                    </p>
                                    <a
                                        class="block font-weight-bold relative mt-5 text-center rounded bg-green-500 px-3 py-1 leading-6 text-white ring-1 ring-green-900/10 cursor-pointer">
                                        Order Now
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        @if (count($products) == 0)
                            <div class="col-span-3">
                                <div
                                    class="h-full items-center justify-center rounded-lg bg-white p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">
                                        No products found
                                    </h2>

                                    <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                                        We couldn't find any products in the database.
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
