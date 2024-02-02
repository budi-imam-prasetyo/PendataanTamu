<div class="mb-5">
    <!-- Form untuk Add -->
    <form action="{{ route('admin.addGuru') }}" method="post" class="flex flex-col w-full p-6 mx-auto mt-10 bg-white border rounded-2xl shadow-md dark:bg-slate-850 dark:border-transparent dark:shadow-dark-xl">
        <h1 class="mb-4 text-2xl font-bold text-center dark:text-white">Tambah Guru</h1>
        @csrf
        <label for="inputName" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Nama</label>
        <input type="text" name="name" required class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <label for="inputEmail" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Email</label>
        <input type="text" name="email" required class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <label for="inputPassword" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password</label>
        <input type="password" name="password" required class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
    </form>
    
    
    <!-- Form untuk Update -->
    <form id="updateForm" action="{{ route('admin.updateGuru') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()" class="flex flex-col w-full p-6 mx-auto mt-10 bg-white border rounded-2xl shadow-md dark:bg-slate-850 dark:border-transparent dark:shadow-dark-xl">
        <h1 class="mb-4 text-2xl font-bold text-center dark:text-white">Edit Guru</h1>
        @csrf
        <input type="hidden" name="emailToUpdate" id="emailToUpdate">
    
        <label for="newName" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Nama</label>
        <input type="text" name="newName" id="newName" class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <label for="newEmail" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Email</label>
        <input type="text" name="newEmail" id="newEmail" class="w-full px-3 py-2 mb-3 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <label for="newPassword" class="block mb-2 text-sm font-semibold text-gray-600 dark:text-white">Password</label>
        <input type="password" name="newPassword" id="newPassword" class="w-full px-3 py-2 mb-4 border rounded-md focus:outline-none focus:border-blue-400 dark:bg-slate-850 dark:border-white dark:text-white">
    
        <div class="flex space-x-4">
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-green-700">Update</button>
            <button type="button" onclick="closeUpdateForm()" class="w-full px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Tutup</button>
        </div>
    </form>
    
</div>


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
