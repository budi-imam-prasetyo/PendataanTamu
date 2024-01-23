<!-- Form untuk Add -->
<div class="card col-span-2 xl:col-span-1 mt-6">
    <div class="card-header">Tambah Guru</div>

    <form action="{{route('admin.addGuru')}}" method="post" class="p-6">
        @csrf
        <label for="inputName" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        
        <label for="inputEmail" class="block mt-4 text-sm font-medium text-gray-700">Email</label>
        <input type="text" name="email" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">

        <label for="inputPassword" class="block mt-4 text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">

        <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">Submit</button>
    </form>
</div>

<!-- Form untuk Update -->
<form id="updateForm" action="{{ route('admin.updateGuru') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()" class="card col-span-2 xl:col-span-1 p-6">
    @csrf
    <input type="hidden" name="emailToUpdate" id="emailToUpdate">
    
    <label for="newName" class="block text-sm font-medium text-gray-700">Name</label>
    <input type="text" name="newName" id="newName" class="mt-1 p-2 border border-gray-300 rounded-md w-full">

    <label for="newEmail" class="block mt-4 text-sm font-medium text-gray-700">Email</label>
    <input type="text" name="newEmail" id="newEmail" class="mt-1 p-2 border border-gray-300 rounded-md w-full">

    <label for="newPassword" class="block mt-4 text-sm font-medium text-gray-700">Password</label>
    <input type="password" name="newPassword" id="newPassword" class="mt-1 p-2 border border-gray-300 rounded-md w-full">

    <div class="mt-4 flex space-x-4">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-medium py-2 px-4 rounded">Update</button>
        <button type="button" onclick="closeUpdateForm()" class="bg-gray-500 hover:bg-gray-700 text-white font-medium py-2 px-4 rounded">Close</button>
    </div>
</form>


<script>
function showUpdateForm(email, name, newEmail) {
    document.getElementById('emailToUpdate').value = email;

    document.getElementById('newName').value = name;
    document.getElementById('newEmail').value = newEmail;

    document.getElementById('updateForm').style.display = 'block';
    document.querySelector('form[action="{{ route("admin.addGuru") }}"]').style.display = 'none';
}

function closeUpdateForm() {
    document.getElementById('updateForm').style.display = 'none';
    document.querySelector('form[action="{{ route("admin.addGuru") }}"]').style.display = 'block';
}

function validateUpdateForm() {
    var newName = document.getElementById('newName').value.trim();
    var newEmail = document.getElementById('newEmail').value.trim();
    var newPassword = document.getElementById('newPassword').value.trim();

    if (newName === '' || newEmail === '' || newPassword === '') {
        alert('Mohon isi semua kolom yang dibutuhkan.');
        return false;
    }
    return true;
}
</script>
