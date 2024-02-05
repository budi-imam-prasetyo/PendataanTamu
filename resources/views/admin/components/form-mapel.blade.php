<div class="mb-5">
    <!-- Form untuk Add -->
        <form action="{{ route('admin.mapel') }}" method="post" class="flex flex-col w-full p-6 mx-auto mt-10 bg-white border rounded-2xl shadow-lg dark:bg-slate-850 dark:border-transparent dark:shadow-dark-xl">
            <h1 class="mb-4 text-2xl font-bold text-center dark:text-white">Tambah Mapel</h1>
            @csrf
            <label for="inputName" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Nama Mata Pelajaran</label>
            <input type="text" name="nama" required class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">

            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
        </form>
    </div>

    <!-- Form untuk Update -->
    <form id="updateForm" action="{{ route('update.mapel') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()" class="flex flex-col w-full p-6 mx-auto mt-10 bg-white border rounded-2xl shadow-md dark:bg-slate-850 dark:border-transparent dark:shadow-dark-xl">
        @csrf
        <input type="hidden" name="namaToUpdate" id="namaToUpdate">

        <label for="newName" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Nama Mata Pelajaran Baru</label>
        <input type="text" name="newName" id="newName" class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-transparent dark:text-white">

        <div class="flex space-x-4">
            <button type="submit" class="w-full px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Update</button>
            <button type="button" onclick="closeUpdateForm()" class="w-full px-4 py-2 text-white bg-gray-500 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Tutup</button>
        </div>
    </form>
</div>



<script>
function showUpdateForm(nama) {
    // Set nilai email pada input hidden di form update
    document.getElementById('namaToUpdate').value = nama;

    // Set nilai default pada form updatee
    document.getElementById('newName').value = nama;

    // Tampilkan form update dan sembunyikan form tambah
    document.getElementById('updateForm').style.display = 'block';
    document.querySelector('form[action="{{ route("admin.mapel") }}"]').style.display = 'none';
}

function closeUpdateForm() {
    // Sembunyikan form update dan tampilkan form tambah
    document.getElementById('updateForm').style.display = 'none';
    document.querySelector('form[action="{{ route("admin.mapel") }}"]').style.display = 'block';
}

function validateUpdateForm() {
    var newName = document.getElementById('newName').value.trim();

    if (newName === '') {
        alert('Mohon isi semua kolom yang dibutuhkan.');
        return false;
    }

    return true;
}
</script>
