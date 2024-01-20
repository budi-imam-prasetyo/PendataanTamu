<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">


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

    <!-- component -->
    <div class=" h-full">
        <dh-component>
            <div class="flex flex-wrap">
                <!-- Sidebar starts -->
                <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
                <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                
                <!-- Sidebar ends -->
                <!-- Remove class [ h-64 ] when adding a card block -->
                {{-- @include('components.sidebar')  --}}
                <div class="px-6 w-4/5">
                    <div class="mx-auto ">
                        <main class="py-4">
                            @yield('content')
                            {{-- @include('components.theme') --}}
                        </main>
                    </div>
                </div>
            </div>
    </div>
    <script>
        var sideBar = document.getElementById("mobile-nav");
        var openSidebar = document.getElementById("openSideBar");
        var closeSidebar = document.getElementById("closeSideBar");
        sideBar.style.transform = "translateX(-260px)";

        function sidebarHandler(flag) {
            if (flag) {
                sideBar.style.transform = "translateX(0px)";
                openSidebar.classList.add("hidden");
                closeSidebar.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                closeSidebar.classList.add("hidden");
                openSidebar.classList.remove("hidden");
            }
        }
    </script>

    </dh-component>

</body>

</html>
