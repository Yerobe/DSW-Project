@extends('layouts.app')

@section('content')


<div class="limiter justify-content-center">
    <div class="container-login100" style="background-image: url('../StylesLogin/images/bg-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <div class="card">
        <div class="card-body">
            <span class="login100-form-title p-b-41 text-dark">
                {{ __('Verify Your Email Address') }}
            </span>
            <p class="text-center text-dark">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
            <p class="text-center text-dark"> {{ __('If you did not receive the email') }}</p>

            <form class="login100-form validate-form p-b-33 p-t-5 m-auto text-center" action="{{ route('verification.resend') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.


            </form>
        </div>
        </div>
        </div>
    </div>
</div>


@endsection