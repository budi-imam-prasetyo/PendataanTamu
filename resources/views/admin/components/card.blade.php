<div class="grid grid-cols-4 gap-6 xl:grid-cols-2">

    <!-- card -->
    <div class="card mt-6">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-indigo-600 text-white mr-3">
                <i class="fas fa-check-circle"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold text-sm">Semua</h1>
                <p class="text-sm">{{ count($allUser) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-green-600 text-white mr-3">
                <i class="fas fa-cogs"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold text-sm">Admin</h1>
                <p class="text-sm">{{ count($admin) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-yellow-600 text-white mr-3">
                <i class="fas fa-school"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold text-sm">Guru</h1>
                <p class="text-sm">{{ count($guru) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

    <!-- card -->
    <div class="card mt-6 xl:mt-1">
        <div class="card-body flex items-center">

            <div class="px-3 py-2 rounded bg-red-600 text-white mr-3">
                <i class="fas fa-user-circle"></i>
            </div>

            <div class="flex flex-col">
                <h1 class="font-semibold text-sm">Tamu</h1>
                <p class="text-sm">{{ count($tamu) }} Pengguna</p>
            </div>

        </div>
    </div>
    <!-- end card -->

</div>
