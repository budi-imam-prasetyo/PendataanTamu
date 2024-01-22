@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-center">
            <div class="cols-8">
                <div class="card"
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <form action="{{route('data-tamu')}}" method="POST">
                            @csrf
                            <input type="text" name="alamat_tamu" placeholder="Alamat">
                            <input type="text" name="no_telp_tamu" placeholder="No Telepon">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </form>
                         <a href="{{route ('laporan')}}" class="btn btn-secondary">laporan</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
