<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="icon" href="icon.png">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                
                <a href="/">
                    <div>
                        <img src="{{asset('default.png')}}" alt="logo" class="w-20 h-20 fill-current text-gray-500">
                    </div>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
                @if (str_contains(url()->current(), 'login'))
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg flex justify-center item-center">
                <span class="text-sm text-gray-600 pr-5">{{__('don\'t have an account?')}} <a href="{{ route('register') }}" class="text-blue-700 hover:text-blue-900 text-base font-bold mx-2">{{__('Sign Up')}}</a></span>
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
