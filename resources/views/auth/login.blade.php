@extends('layouts.app')

@section('content')
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">
            <h1 class="text-3xl font-semibold text-center text-purple-700">{{ __('Pendataan tamu') }}</h1>
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label for="email" class="label"><span
                            class="text-base label-text">{{ __('Email Address') }}</span></label>
                    <input id="email" type="email" class="w-full input input-bordered input-primary" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div>
                    <label for="password" class="label">
                        <span class="text-base label-text">{{ __('Password') }}</span>
                    </label>
                        <input id="password" type="password" class="w-full input input-bordered input-primary"
                            name="password" required autocomplete="current-password">
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="checkbox checkbox-primary" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
