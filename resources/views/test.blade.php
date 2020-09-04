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
            <nav class="flex items-center justify-between flex-wrap bg-white p-4 py-3 xl:px-40 shadow-sm border border-gray-200">
                <div class="flex items-center flex-shrink-0 mr-6">
                    <svg class="text-teal-500 fill-current h-6 w-6 md:h-8 md:w-8 mr-2"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" /></svg>
                    <span class="text-gray-700 text-base md:text-xl">
                        <span>PROJECT</span> <span class="font-semibold">IDEAS</span>
                        <small class="text-gray-600 text-sm ml-2 font-normal hidden md:inline">Find some project ideas to upgrade your skills :)</small>
                    </span>
                </div>
                <div class="flex md:hidden">
                    <button class="bg-transparent text-gray-500 font-semibold rounded">
                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg> --}}
                    </button>
                </div>
                <div class="w-full block flex-grow md:flex md:items-center md:w-auto">
                    <div class="text-base md:flex-grow">
                        {{--
                        <a href="#responsive-header" class="block mt-4 md:inline-block md:mt-0 text-gray-600 hover:text-gray-800 mr-4">
                            Examples
                        </a>
                        --}}
                    </div>
                    <div>
                        <a href="#" class="inline-block text-base px-4 py-1 md:py-2 rounded text-white bg-teal-500 hover:bg-teal-600 mt-4 md:mt-0">Sign In</a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mb-auto px-4 py-5 xl:px-40">
            <section class="flex bg-gray-200">

                <div class="flex-auto bg-white rounded flex items-center w-full p-2 md:p-3 shadow-sm border border-gray-200 mr-2 md:mr-5">
                    <button class="outline-none focus:outline-none">
                        <svg class="w-5 text-gray-500 cursor-default" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                    <input type="search" name="" id="" placeholder="Search for ideas" class="w-full pl-4 text-base outline-none focus:outline-none bg-transparent text-gray-600 focus:placeholder-gray-400">
                </div>

                <div class="flex">
                    <button class="bg-gray-400 text-gray-700 p-3 md:p-3 rounded inline-flex items-center shadow-sm hover:shadow-md outline-none focus:outline-none">
                        <svg class="fill-current w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                        </svg>
                        <span class="ml-2 hidden md:inline">Filters</span>
                    </button>
                </div>
            </section>

            <section class="flex justify-between items-center mt-8">
                <div class="flex items-center">
                    {{-- <svg class="text-teal-500 fill-current h-5 w-5 mr-2"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" /></svg> --}}
                    <svg class="text-teal-500 h-6 w-6 mr-1 -mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z" /></svg>
                    <span class="text-gray-700">
                        <strong>1,285</strong>
                        <span>ideas found</span>
                    </span>
                </div>
                <div class="inline-block relative">
                    <select class="inline-block appearance-none font-semibold text-base bg-transparent text-gray-700 pl-1 pr-6 focus:outline-none border-b-2 border-gray-500">
                        <option>Newest</option>
                        <option>Likes</option>
                        <option>Views</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-1 text-gray-700">
                        <svg class="fill-current h-4 w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </section>

            <section class="flex flex-wrap -mx-2 overflow-hidden mt-2">
                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <div class="flex bg-white shadow-md rounded-lg"><!--horizantil margin is just for display-->
                        <div class="flex items-start px-4 py-6">
                            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                            <div class="">
                                <div class="mb-1">
                                    <h2 class="text-gray-900 -mt-1">
                                        Budiman Fajar F <small class="text-sm text-gray-700">· 22h ago</small>
                                    </h2>
                                </div>
                                <h2 class="text-lg font-semibold text-gray-900">Bin2Dec Bin2Dec Bin2Dec</h2>
                                <p class="text-gray-700">Beginner</p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <div class="mt-4">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                        <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span>12</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span>8</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                        </svg>
                                        <span>share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <div class="flex bg-white shadow-md rounded-lg"><!--horizantil margin is just for display-->
                        <div class="flex items-start px-4 py-6">
                            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                            <div class="">
                                <div class="mb-1">
                                    <h2 class="text-gray-900 -mt-1">
                                        Budiman Fajar F <small class="text-sm text-gray-700">· 22h ago</small>
                                    </h2>
                                </div>
                                <h2 class="text-lg font-semibold text-gray-900">Bin2Dec Bin2Dec Bin2Dec</h2>
                                <p class="text-gray-700">Beginner</p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <div class="mt-4">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                        <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span>12</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span>8</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                        </svg>
                                        <span>share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <div class="flex bg-white shadow-md rounded-lg"><!--horizantil margin is just for display-->
                        <div class="flex items-start px-4 py-6">
                            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                            <div class="">
                                <div class="mb-1">
                                    <h2 class="text-gray-900 -mt-1">
                                        Budiman Fajar F <small class="text-sm text-gray-700">· 22h ago</small>
                                    </h2>
                                </div>
                                <h2 class="text-lg font-semibold text-gray-900">Bin2Dec Bin2Dec Bin2Dec</h2>
                                <p class="text-gray-700">Beginner</p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <div class="mt-4">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                        <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span>12</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span>8</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                        </svg>
                                        <span>share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <div class="flex bg-white shadow-md rounded-lg"><!--horizantil margin is just for display-->
                        <div class="flex items-start px-4 py-6">
                            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                            <div class="">
                                <div class="mb-1">
                                    <h2 class="text-gray-900 -mt-1">
                                        Budiman Fajar F <small class="text-sm text-gray-700">· 22h ago</small>
                                    </h2>
                                </div>
                                <h2 class="text-lg font-semibold text-gray-900">Bin2Dec Bin2Dec Bin2Dec</h2>
                                <p class="text-gray-700">Beginner</p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <div class="mt-4">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                        <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span>12</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span>8</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                        </svg>
                                        <span>share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <div class="flex bg-white shadow-md rounded-lg"><!--horizantil margin is just for display-->
                        <div class="flex items-start px-4 py-6">
                            <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                            <div class="">
                                <div class="mb-1">
                                    <h2 class="text-gray-900 -mt-1">
                                        Budiman Fajar F <small class="text-sm text-gray-700">· 22h ago</small>
                                    </h2>
                                </div>
                                <h2 class="text-lg font-semibold text-gray-900">Bin2Dec Bin2Dec Bin2Dec</h2>
                                <p class="text-gray-700">Beginner</p>
                                <p class="mt-3 text-gray-700 text-sm">
                                    Binary is the number system all digital computers are based on. Therefore it's important for developers to understand binary, or base 2, mathematics.
                                </p>
                                <div class="mt-4">
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                                </div>
                                <div class="mt-4 flex items-center">
                                    <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                        <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                        <span>12</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                        <span>8</span>
                                    </div>
                                    <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                        <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                        </svg>
                                        <span>share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-2 px-2 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <!-- Column Content -->
                </div>

                <div class="py-3 px-3 w-full overflow-hidden sm:w-1/2 lg:w-1/3">
                    <!-- Column Content -->
                </div>
            </section>

        </main>

        <footer class="bg-gray-800 text-white p-5 lg:px-40 text-center text-sm">
            2020 Project Ideas - Made with Laravel + Vue.js + Tailwind
        </footer>
    </div>
</body>
</html>
