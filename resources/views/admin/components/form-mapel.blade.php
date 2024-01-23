<!-- Form untuk Add -->
<div class="card col-span-2 xl:col-span-1 mt-6">
    <div class="card-header">Tambah Mata Pelajaran</div>

    <form action="{{route('admin.mapel')}}" method="post" class="p-6">
        @csrf
        <label for="inputName" class="block text-sm font-medium text-gray-700">Nama Mata Pelajaran</label>
        <input type="text" name="nama" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">Submit</button>
    </form>
</div>

<!-- Form untuk Update -->
<form id="updateForm" action="{{ route('update.mapel') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()" class="card col-span-2 xl:col-span-1 p-6">
    @csrf
    <input type="hidden" name="namaToUpdate" id="namaToUpdate">
    
    <label for="newName" class="block text-sm font-medium text-gray-700">Name</label>
    <input type="text" name="newName" id="newName" class="mt-1 p-2 border border-gray-300 rounded-md w-full">

    <div class="mt-4 flex space-x-4">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-medium py-2 px-4 rounded">Update</button>
        <button type="button" onclick="closeUpdateForm()" class="bg-gray-500 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded">Close</button>
    </div>
</form>


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
