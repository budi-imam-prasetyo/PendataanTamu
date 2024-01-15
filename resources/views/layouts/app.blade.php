<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="flex">
                <ul class="menu menu-horizontal px-5">
                    @guest
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}" class="btn-primary btn-outline text-md font-semibold">Login</a></li>
                        @endif
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="btn-primary btn-outline text-md font-semibold">Register</a></li>
                        @endif
                    @else
                        <li>
                            <details>
                                <summary>
                                    {{ Auth::user()->name }}
                                </summary>
                                <ul class="p-2 bg-base-100 rounded-t-none">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </details>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
