@extends('layouts.errors')
@section('title', '504')
@section('content')
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-md mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                            <img class="nk-error-gfx" src="./images/gfx/error-504.svg" alt="">
                            <div class="wide-xs mx-auto">
                                <h3 class="nk-error-title">Ошибка тайм-аута шлюза</h3>
                                <p class="nk-error-text">Приносим извинения за неудобства. Похоже, наш сервер не получил своевременного ответа.</p>
                                <a href="{{ route('home') }}" class="btn btn-lg btn-primary mt-2">Вернуться домой</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
