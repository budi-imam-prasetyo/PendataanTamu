@extends('layouts.app')
@section('content')


    <form action="{{route('add_laporan')}}" method="POST">
        <h1>Add Laporan</h1>
        @csrf
        <textarea for="inputName">Hasil Pertemuan</textarea>
        <input type="text" name="text" required>
        <button class="btn btn-primary" type="submit" value="addGuru">Submit</button>
    </form>

@endsection
