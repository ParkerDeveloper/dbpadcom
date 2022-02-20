@extends('layouts.app')
@section('form')
    <form class="login100-form validate-form" method="post" action="{{ route('register') }}">
        @csrf
        <span class="login100-form-title">
            El Quebrados<br />Sheriff's Office
        </span>
        <div class="wrap-input100 validate-input" data-validate = "Login is required">
            <input id="name" class="input100" type="text" name="name" placeholder="Логин">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-home" aria-hidden="true"></i></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "email is required">
            <input id="email" class="input100" type="email" name="email" placeholder="E-Mail">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-at" aria-hidden="true"></i></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input id="password" class="input100" type="password" name="password" placeholder="Пароль">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input id="password_confirmation" class="input100" type="password" name="password_confirmation" placeholder="Потверждение пароля">
        <span class="focus-input100"></span>
        <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">{{ __('Register') }}</button>
        </div>
        <div class="text-center p-t-12">
            <span class="txt1"></span>
            <a class="txt2" href="/login">Авторизация</a>
        </div>
        <div class="text-center p-t-136">
            <a class="txt2" href="#">*Примечание: Пароль должнен состоять из 8 символов</a>
        </div>
    </form>
@endsection
