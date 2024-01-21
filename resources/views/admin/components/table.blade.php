<div class="grid grid-cols-1 gap-6 mt-6 xl:grid-cols-1">
    <!-- Start Recent Sales -->
    <div class="card col-span-2 xl:col-span-1">
        <div class="card-header">Recent Sales</div>

        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-r"></th>
                    <th class="px-4 py-2 border-r">Nama</th>
                    <th class="px-4 py-2 border-r">Email</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($guru as $guru)
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i
                            class="fad fa-circle"></i></td>
                    <td class="border border-l-0 px-4 py-2">{{ $guru->name }}</td>
                    <td class="border border-l-0 px-4 py-2">{{ $guru->email }}</td>
                    <td class="border border-l-0 border-r-0 px-4 py-2"><button type="button" onclick="showUpdateForm('{{ $guru->email }}', '{{ $guru->name }}', '{{ $guru->email }}')">UPDATE</button>
                        <a href="{{ route('admin.deleteGuru', ['email' => $guru->email]) }}"><button type="button" onclick="return confirm('Are you sure to Delete this')">DELETE</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End Recent Sales -->


</div>