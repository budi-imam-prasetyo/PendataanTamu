<div class="min-w-screen min-h-screen bg-gray-300 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden"style="max-width: 1000px">
        <div class="md:flex w-full">
            <div class="w-full  py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-gray-900">Login</h1>
                    <p>Enter your information to register</p>
                </div>
                <form action="{{ route('pertemuan.create', ['id' => $user->id]) }}" method="POST" class="form-control">
                    @csrf

                    <div class="form-group">
                        <label for="nama_guru" class="label">Nama Guru:</label>
                        <select class="select select-bordered w-full">
                            <option disabled selected>Who shot first?</option>
                            <option>Hana Solo</option>
                            <option>Greedo</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_waktu">Tanggal dan Waktu:</label>
                        <input type="datetime-local" class="input" name="tanggal_waktu" step="1" required>
                    </div>

                    <div class="form-group">
                        <label for="tujuan">Tujuan:</label>
                        <textarea name="tujuan" class="form-control" placeholder="Tujuan" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
