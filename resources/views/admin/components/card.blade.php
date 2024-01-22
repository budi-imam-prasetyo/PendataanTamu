<div class="grid grid-cols-4 gap-6 xl:grid-cols-2">

    <!-- card -->
    <div class="card mt-6">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                <img src="{{ asset('assets/iconCard/check_circle_FILL0_wght400_GRAD0_opsz24.svg') }}">
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold">Semua</h1>
                <p class="text-sm">{{ count($allUser) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                <img src="{{ asset('assets/iconCard/admin_panel_settings_FILL0_wght400_GRAD0_opsz24.svg') }}">
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold">Admin</h1>
                <p class="text-sm">{{ count($admin) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                <img src="{{ asset('assets/iconCard/school_FILL0_wght400_GRAD0_opsz24.svg') }}">
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold">Guru</h1>
                <p class="text-sm">{{ count($guru) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                <img src="{{ asset('assets/iconCard/account_circle_FILL0_wght400_GRAD0_opsz24.svg') }}">
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold">Tamu</h1>
                <p class="text-sm">{{ count($tamu) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

</div>