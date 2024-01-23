@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pertemuan Dashboard') }}</div>

                    <div class="card-body">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <form action="{{ route('pertemuan.create', ['id' => $user->id]) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nama_guru">Nama Guru:</label>
                                <input type="text" name="nama_guru" class="form-control" placeholder="Cari Nama Guru">
                            </div>

                            <!-- <div class="form-group">
                                 <label for="tujuan">Tujuan:</label><br>
                                 <select name="tujuan" class="form-control">
                                    <option value="Pertemuan">Pertemuan</option><br>
                                     <option value="Konsultasi">Konsultasi</option> 
                                </select> 
                            </div> -->
                            <!-- <br><button type="submit" class="btn btn-primary">Cari dan Buat Pertemuan</button> -->
                        <!-- </form> -->

                        <!-- <form action="{{ route('pertemuan.index') }}" method="POST">
                            @csrf -->


                            <label for="tanggal_waktu">Tanggal dan Waktu:</label>
                            <input type="datetime-local" name="tanggal_waktu" required><br><br>

                            <label for="tujuan">Tujuan:</label>
                            <textarea name="tujuan" placeholder="Tujuan" required></textarea>

                            <!-- <label for="status">Status:</label>
                            <input type="text" name="status" placeholder="Status" required> -->

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
