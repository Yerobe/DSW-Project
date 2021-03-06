@extends('layouts.app')

@section('content')








<div class="limiter">
    <div class="container-login100" style="background-image: url('Contenido-Index/images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Confirm Password
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('password.confirm') }}" method="POST">
                @csrf



                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input id="password" class="input100 form-control @error('password') is-invalid @enderror border-0" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>

                    @error('password')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                        Confirm Password
                    </button>
                </div>


                @if (Route::has('password.request'))

                <div class="row">
                    <div class="col col-12 text-center">
                        <a class="btn btn-link text-decoration-none mt-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>

                @endif




            </form>
        </div>
    </div>
</div>








@endsection