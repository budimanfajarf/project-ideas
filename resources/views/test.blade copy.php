<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <div id="app">
        <nav>
            nav
        </nav>

        {{-- <main> --}}
            {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> --}}
            {{-- <button class="bg-orange-500 hover:bg-orange-600 sm:bg-green-500 sm:hover:bg-green-600 py-2 px-4 rounded rotate-0 hover:rotate-90">
                Button
            </button>
            <example-component></example-component>
        </main> --}}

        {{-- <div class="main">
            <div class="px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">

                <!-- hero -->
                <div class="hero">
                    <!-- hero headline -->
                    <div class="hero-headline flex flex-col items-center justify-center pt-24 text-center">
                        <h1 class=" font-bold text-3xl text-gray-900">Find new ideas to upgrade your skills</h1>
                        <p class=" font-base text-base text-gray-600">high quality stock images and videos shared by our talented community.</p>
                    </div>

                    <!-- image search box -->
                    <div class="box pt-6">
                        <div class="box-wrapper">

                            <div class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-gray-200">
                              <button @click="getImages()" class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                              <input type="search" name="" id="" @keydown.enter="getImages()" placeholder="search for ideas" x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
                              <div class="select">
                                <select name="" id="" x-model="image_type" class="text-sm outline-none focus:outline-none bg-transparent">
                                  <option value="all" selected>All</option>
                                  <option value="photo">Photo</option>
                                  <option value="illustration">Illustration</option>
                                  <option value="vector">Vector</option>
                                 </select>
                              </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div> --}}

        <footer>
            footer
        </footer>
    </div>
</body>
</html>
