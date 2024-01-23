<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <title>Pendataan Tamu</title>
    @vite('resources/css/style.css')
    @vite('resources/js/scripts.js')
</head>

<body class="bg-gray-900">
    <!-- start navbar -->
    @include('admin.components.navbar')
    <!-- end navbar -->
    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">
        <!-- start sidebar -->
        @include('admin.components.sidebar')
        <!-- end sidebar -->
        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            <!-- start numbers -->
            {{-- @include('admin.components.card') --}}
            <!-- end nmbers -->
            <!-- start quick Info -->
            @include('admin.components.form-mapel')
            @include('admin.components.table-mapel')
            <!-- end quick Info -->
        </div>
        <!-- end content -->
    </div>
    <!-- end wrapper -->
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- end script -->
</body>

</html>
