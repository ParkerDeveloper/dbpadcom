@extends('layouts.app')
@section('form')
<form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                @csrf
					<span class="login100-form-title">
						El Quebrados<br />Sheriff's Office
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Login is required">
                    <input id="name" class="input100" type="text" name="name" placeholder="Логин">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input id="password" class="input100" type="password" name="password" placeholder="Пароль">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-12">
						<span class="txt1">

						</span>
                    <a class="txt2" href="/register">
                         Регистрация
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a class="txt2" href="#">


                    </a>
                </div>
            </form>
        @if(Session::has('no_dostup'))
            <script>
                toastr.error("{!!Session::get('no_dostup')!!}");
            </script>
        @endif
@endsection
