@extends('layouts.index')
@section('title', 'Настройки профиля')
@section('content')
    <div class="nk-content ">
        <div class="container wide-xl">
            <div class="nk-content-inner">
                <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title">Меню</h6>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/home" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Главная</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/information" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                                    <span class="nk-menu-text">Информация</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/terminal" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                    <span class="nk-menu-text">Диспетчер Терминал</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="/panel" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                    <span class="nk-menu-text">Терминал</span>
                                </a>
                            </li>
                        </ul>
                        <li class="nk-menu-heading">
                            <span>Помощь</span>
                        </li>
                        <ul class="nk-menu nk-menu-sm">
                                        <li class="nk-menu-item">
                                            <a href="/contacts" class="nk-menu-link">
                                                <span class="nk-menu-text">Контакты</span>
                                            </a>
                                        </li>
                                    </ul>
                    </div>
                    <div class="nk-aside-close">
                        <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                    </div><!-- .nk-aside-close -->
                </div><!-- .nk-aside -->
                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><span>Настройки аккаунта</span></div>
                                <h2 class="nk-block-title fw-normal">Мой профиль</h2>
                                <div class="nk-block-des">
                                    <p>У вас есть полный контроль над настройками своей учетной записи. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <ul class="nk-nav nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">Профиль</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/profile/settings">Настройки</a>
                            </li>
                        </ul><!-- nav-tabs -->
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Настройки безопасности</h5>
                                    <div class="nk-block-des">
                                        <p>Эти настройки помогают защитить вашу учетную запись.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="card card-bordered">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="between-center flex-wrap flex-md-nowrap g-3">
                                            <div class="nk-block-text">
                                                <h6>Изменить пароль</h6> <span style="color:red; font-weight: bold">[Разработка]</span>
                                                <p>Установите уникальный пароль для защиты вашей учетной записи.</p>
                                            </div>
                                            <div class="nk-block-actions flex-shrink-sm-0">
                                                <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                                    <li class="order-md-last">
                                                        <a href="#" class="btn btn-primary">Изменить пароль</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-card-inner -->
                                </div><!-- .nk-card-inner-group -->
                            </div><!-- .nk-card -->
                        </div><!-- .nk-block -->
                    </div>
                    <!-- footer @s -->
                    <div class="nk-footer">
                        <div class="container wide-xl">
                            <div class="nk-footer-wrap g-2">
                                <div class="nk-footer-copyright"> &copy; 2021 DataBase. Developed by <a href="#">alfedov.dev</a> and <a href="#">shlihanov.dev</a>
                                </div>
                                <div class="nk-footer-links">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer @e -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
