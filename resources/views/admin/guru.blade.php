@extends('layouts.app')

@section('content')

<!-- Form untuk Add -->
<form action="{{route('admin.addGuru')}}" method="post">
    <h1>Add Guru</h1>
    @csrf
    <label for="inputName">Nama</label>
    <input type="text" name="name" required>
    <label for="inputName">Email</label>
    <input type="text" name="email" required>
    <label for="inputName">Password</label>
    <input type="password" name="password" required>
    <button type="submit" value="addGuru">Submit</button>
</form>

<!-- Form untuk Update -->
<form id="updateForm" action="{{ route('admin.updateGuru') }}" method="post" style="display: none;" onsubmit="return validateUpdateForm()">
    <h1>Update Guru</h1>
    @csrf
    <input type="hidden" name="emailToUpdate" id="emailToUpdate">
    
    <label for="newName">Name</label>
    <input type="text" name="newName" id="newName">

    <label for="newEmail">Email</label>
    <input type="text" name="newEmail" id="newEmail">

    <label for="newPassword">Password</label>
    <input type="password" name="newPassword" id="newPassword">

    <button type="submit" value="updateGuru">Update</button>
    <button type="button" onclick="closeUpdateForm()">Close</button>
</form>

<table style="border: 1">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($guru as $guru)
    <tr>
        <td>{{ $guru->name }}</td>
        <td>{{ $guru->email }}</td>   
        <td>
            <button type="button" onclick="showUpdateForm('{{ $guru->email }}', '{{ $guru->name }}', '{{ $guru->email }}')">UPDATE</button>
            <a href="{{ route('admin.deleteGuru', ['email' => $guru->email]) }}"><button type="button" onclick="return confirm('Are you sure to Delete this')">DELETE</button></a>
        </td>      
    </tr>
    @endforeach
</table>

<script>
function showUpdateForm(email, name, newEmail) {
    // Set nilai email pada input hidden di form update
    document.getElementById('emailToUpdate').value = email;

    // Set nilai default pada form updatee
    document.getElementById('newName').value = name;
    document.getElementById('newEmail').value = newEmail;

    // Tampilkan form update dan sembunyikan form tambah
    document.getElementById('updateForm').style.display = 'block';
    document.querySelector('form[action="{{ route("admin.addGuru") }}"]').style.display = 'none';
}

function closeUpdateForm() {
    // Sembunyikan form update dan tampilkan form tambah
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


@endsection
