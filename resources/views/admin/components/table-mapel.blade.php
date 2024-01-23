<div class="grid grid-cols-1 gap-6 mt-6 xl:grid-cols-1">
    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Recent Sales</div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r"></th>
                    <th class="px-4 py-2 border-r">Nama Pelajaran</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($mapel as $mapel)
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">{{ $mapel->nama }}</td>
                    <td class="border border-l-0 border-r-0 px-4 py-2 justify-between">
                        <button type="button" class="bg-green-500 hover:bg-green-700 text-white font-medium py-2 w-2/3 rounded" onclick="showUpdateForm('{{ $mapel->nama }}')">Update</button>
                        <a href="{{ route('delete.mapel', ['nama' => $mapel->nama]) }}">
                            <button type="button" class="bg-red-500 hover:bg-green-700 text-white font-medium py-2 w-1/4 rounded" onclick="return confirm('Are you sure to Delete this')">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->
</div>
