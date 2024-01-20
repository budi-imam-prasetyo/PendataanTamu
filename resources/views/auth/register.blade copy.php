@extends('layouts.mainAdmin')

@section('content')
<div class="relative flex flex-col justify-center h-screen overflow-hidden">
    <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">
        <h1 class="text-3xl font-semibold text-center text-purple-700">{{ __('Pendataan tamu') }}</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name" class="label"><span class="text-base label-text">{{ __('Name') }}</span></label>
                <input id="name" type="text" class="w-full input input-bordered input-primary" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div>
                <label for="email" class="label"><span
                        class="text-base label-text">{{ __('Email Address') }}</span></label>
                <input id="email" type="email" class="w-full input input-bordered input-primary" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
            </div>

            <div>
                <label for="password" class="label"><span
                        class="text-base label-text">{{ __('Password') }}</span></label>

                <input id="password" type="password" class="w-full input input-bordered input-primary" name="password"
                    required autocomplete="new-password">
            </div>

            <div>
                <label for="password-confirm" class="label"><span
                        class="text-base label-text">{{ __('Confirm Password') }}</span></label>
                <input id="password-confirm" type="password" class="w-full input input-bordered input-primary"
                    name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="flex">
                <div class="mt-5 mx-auto">
                    <button type="submit" class="btn btn-primary px-10">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection