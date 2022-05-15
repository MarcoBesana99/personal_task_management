<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="font-sans antialiased">
        <!-- Page Content -->
        <div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
            <x-aside-bar></x-aside-bar>
            <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
                <x-header></x-header>
                <div class="main-content flex flex-col flex-grow p-4">
                <h1 class="font-bold text-2xl text-gray-700">Dashboard</h1>
        
                <div
                    class="flex flex-col flex-grow border-4 border-gray-400 border-dashed bg-white rounded mt-4"
                ></div>
                </div>
                <x-footer></x-footer>
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
