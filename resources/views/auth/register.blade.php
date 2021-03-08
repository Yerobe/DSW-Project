@extends('layouts.app')

@section('content')










<div class="limiter">
    <div class="container-login100" style="background-image: url('../StylesLogin/images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Account Login
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input value="{{ old('email') }}" class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password-field" class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password-field" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Enter Points">
                    <input value="{{ old('points') }}" id="password-field" class="input100" type="number" name="points" placeholder="Points">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>



                <div class="wrap-input100 validate-input" data-validate="Enter Points">
                    <input value="{{ old('id_Reserve') }}" id="password-field" class="input100" type="number" name="id_Reserve" placeholder="Id_Reserve">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>



                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>


            


            </form>
        </div>
    </div>
</div>




@endsection
