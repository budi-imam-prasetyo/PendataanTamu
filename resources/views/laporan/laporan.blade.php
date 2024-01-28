@extends('layouts.app')

@section('content')
<h1>laporan</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <table class="table">
                <tr>
                    <th>nama</th>
                    <th>hasil pertemuan</th>
                    <th>aksi</th>
                </tr>

                <a href="{{url ('/add')}}" class="btn btn-secondary">add laporan</a>



                {{-- <?php
                //  @foreach ($data as $data )
                ?>

                    <tr>
                        <td>{{$data-> nama}}</td>
                        <td>{{$data-> hasil_pertemuan}}</td>
                        <td>aksi</td>

                    </tr>
                    <?php
                // @endforeach;
                    ?> --}}

        </div>

    </div>

</div>

</table>
@endsection
