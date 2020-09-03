<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-200">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="flex flex-col h-screen justify-between">
        <header>
            <nav class="flex items-center justify-between flex-wrap bg-teal-400 p-5 lg:px-32">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" /></svg>
                    <span class="font-semibold text-xl tracking-tight">Project Ideas</span>
                </div>
                <div class="block md:hidden">
                    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                    </button>
                </div>
                <div class="w-full block flex-grow md:flex md:items-center md:w-auto">
                    <div class="text-base md:flex-grow">
                        <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-teal-200 hover:text-white mr-4">
                            Docs
                        </a>
                        <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-teal-200 hover:text-white mr-4">
                            Examples
                        </a>
                        <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-teal-200 hover:text-white">
                            Blog
                        </a>
                    </div>
                    <div>
                        <a href="#" class="inline-block text-base px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 md:mt-0">Sign In</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="mb-auto bg-green-500">


        </main>
        <footer class="h-20 bg-gray-800">
            footer
        </footer>
    </div>
</body>
</html>
