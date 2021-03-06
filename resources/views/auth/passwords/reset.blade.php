@extends('layouts.app')

@section('content')


<div class="limiter">
    <div class="container-login100" style="background-image: url('Contenido-Index/images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Reset Password
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('password.update') }}" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="email" value="{{ $email ?? old('email') }}" class="input100 form-control @error('email') is-invalid @enderror border-0" type="email" name="email" placeholder="Email" required autocomplete="email" autofocus>
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                    @error('email')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>



                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="password" class="input100 form-control @error('password') is-invalid @enderror border-0" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>

                    @error('password')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>



                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="password-confirm" class="input100 border-0" type="password" name="password_confirmation" placeholder="Password" required autocomplete="new-password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>

                    @error('password')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>



                <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                        Reset Account
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>








@endsection
