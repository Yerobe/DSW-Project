@extends('layouts.app')

@section('content')


<div class="limiter">
    <div class="container-login100" style="background-image: url('../StylesLogin/images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Account Login for Employees
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ url('/employees/login') }}" method="POST">
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input value="{{ old('email') }}" class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password-field" class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                @if(Session::has('Error'))
                <div class="alert alert-danger text-center"> {{ Session::get('Error') }}</div>
                @endif


                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Login
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