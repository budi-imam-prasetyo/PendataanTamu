<form action="{{ route('pertemuan.create', ['id' => $user->id]) }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_guru">Nama Guru:</label>
        <input type="text" name="nama_guru" class="form-control" placeholder="Cari Nama Guru">
    </div>

    <div class="form-group">
        <label for="tanggal_waktu">Tanggal dan Waktu:</label>
        <input type="datetime-local" name="tanggal_waktu" required>
    </div>

    <div class="form-group">
        <label for="tujuan">Tujuan:</label>
        <textarea name="tujuan" class="form-control" placeholder="Tujuan" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
