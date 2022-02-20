@extends('layouts.index')
@section('title', 'Контакты')
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
                    </div>
                </div>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Контакты для связи, в случае возникновение ошибок или вопросов.</h4>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <img src="https://sun9-79.userapi.com/impg/GK4eINaoLqQ7GvWr1MfgI0zSWmn8-FHqmL8OTQ/LOjpf9BqCyE.jpg?size=200x200&quality=96&sign=60ee3de595762df9c00fe27c478cb9e4&type=album" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>Дмитрий Шлиханов</h6>
                                                                <span class="sub-text" style="font-weight: bold; color: cornflowerblue; font-size: 15px;">Менеджер проекта</span>
                                                            </div>
                                                        </div>
                                                        <ul class="team-info">
                                                            <li><span>ВКонтакте</span><span style="margin-left: 10px;"><a href="https://vk.com/shlihanovdev" style="margin-right: 6rem;">Клик</a></span></li>
                                                            <li><span>Discord:</span><span style="margin-left: 10px;">shlihanov.dev#2381</span></li>
                                                            <li><span>Telegram:</span><span style="margin-right: 37px;">@shlihanovdev</span></li>
                                                        </ul>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <img src="https://cdn.discordapp.com/avatars/651049944009932800/b2ff93696c3306233857011e48589fd7.webp?size=80" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>Артём Ермаков</h6>
                                                                <span class="sub-text" style="font-weight: bold; color: darkorange; font-size: 15px;">Разработчик</span>
                                                            </div>
                                                        </div>
                                                        <ul class="team-info">
                                                            <li><span>ВКонтакте</span><span style="margin-left: 10px;"><a href="https://vk.com/alfedovdev" style="margin-right: 5rem;">Клик</a></span></li>
                                                            <li><span>Discord:</span><span style="margin-right: 5px;">ParkerDev#0320</span></li>
                                                            <li><span>Telegram:</span><span style="margin-right: 51px;">@Alfedov</span></li>
                                                        </ul>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="team">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <img src="https://cdn.discordapp.com/avatars/647923028725858304/ac2c46a8bb15e694a1034253466ae9bd.webp?size=80" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                <h6>Олег Кенеди</h6>
                                                                <span class="sub-text" style="font-weight: bold; color: green; font-size: 15px;">Тестер</span>
                                                            </div>
                                                        </div>
                                                        <ul class="team-info">
                                                            <li><span>ВКонтакте:</span><span style="margin-left: 10px;"><a href="https://vk.com/olhoper" style="margin-right: 5rem;">Клик</a></span></li>
                                                            <li><span>Discord:</span><span style="margin-right: 16px;">xvku7k3#1906</span></li>
                                                            <li><span>Telegram:</span><span style="margin-right: 69px;">@olxyz</span></li>
                                                        </ul>
                                                    </div><!-- .team -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
@endsection
