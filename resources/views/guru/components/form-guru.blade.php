<!-- Form untuk Add -->
<div class="card col-span-2 xl:col-span-1 mt-6">
    <div class="card-header">Tambah Guru</div>

    <form action="{{ route('detail.guru') }}" method="post" class="p-6">
        @csrf
        <label for="inputName" class="block text-sm font-medium text-gray-700">NIP </label>
        <input type="text" name="NIP" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">

        {{-- <label for="inputName" class="block text-sm font-medium text-gray-700">Nama </label>
        <input type="text" name="nama" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" value="{{$user->nama}}"> --}}

        <label for="inputName" class="block text-sm font-medium text-gray-700">No Telepon </label>
        <input type="text" name="telp" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
{{-- 
        <label for="inputName" class="block text-sm font-medium text-gray-700">Email </label>
        <input type="text" name="email" required class="mt-1 p-2 border border-gray-300 rounded-md w-full" value="{{$user->email}}"> --}}

        <label for="inputJK" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
        <select name="jk" id="inputJK">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="inputDate" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
        <input type="datetime-local" name="tanggal_lahir" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">

        <label for="inputStatus" class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status" id="inputStatus">
            <option value="PNS">PNS</option>
            <option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
        </select>

        <label for="inputPTK" class="block text-sm font-medium text-gray-700">PTK</label>
        <select name="PTK" id="inputPTK">
            @foreach ($mapel as $mapel)
                <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
            @endforeach
        </select>

        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">Submit</button>
    </form>
</div>

{{-- <!-- Form untuk Update -->
<form id="updateForm" action="{{ route('update.guru') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()" class="card col-span-2 xl:col-span-1 p-6">
    @csrf
    <input type="hidden" name="namaToUpdate" id="namaToUpdate">
    
    <!-- Other input fields for update... -->

    <div class="mt-4 flex space-x-4">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-medium py-2 px-4 rounded">Update</button>
        <button type="button" onclick="closeUpdateForm()" class="bg-gray-500 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded">Close</button>
    </div>
</form> --}}

<script>
// function showUpdateForm(nama) {
//     document.getElementById('namaToUpdate').value = nama;
//     document.getElementById('updateForm').style.display = 'block';
//     document.querySelector('form[action="#"]').style.display = 'none';
// }

// function closeUpdateForm() {
//     document.getElementById('updateForm').style.display = 'none';
//     document.querySelector('form[action="#"]').style.display = 'block';
// }

// function validateUpdateForm() {
//     // Validate input fields for update...
//     return true;
// }
// </script>
