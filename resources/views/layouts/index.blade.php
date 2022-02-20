<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./images/img-01.png">
    <title>DataBase | @yield('title')</title>
    <link rel="stylesheet" href="../../assets/css/dashlite.css">
    <link rel="stylesheet" href="../../assets/css/dashlite.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="nk-body bg-white npc-subscription has-aside">
<div class="nk-app-root">
    <div class="nk-main ">
        <div class="nk-wrap ">
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-lg wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-header-brand">
                            <a href="/home" class="logo-link">
                                <img class="logo-light logo-img" src="{{ Auth::user()->avatar  }}" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="{{ Auth::user()->avatar  }}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                            <span><b>DataBase</b></span>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-name dropdown-indicator d-none d-sm-block">{{ Auth::user()->name  }}</div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-info">
                                                    <span class="lead-text">{{ Auth::user()->name  }}</span>
                                                    <span class="lead-text" style="color: darkcyan;">{{ Auth::user()->role }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="/profile"><em class="icon ni ni-user-alt"></em><span>Профиль</span></a></li>
                                                <li><a href="/profile/settings"><em class="icon ni ni-setting-alt"></em><span>Настройки</span></a></li>
                                                <li><a href="/admin/dashboard"><em class="icon ni ni-user-alt"></em><span>Панель управления</span></a></li>
                                                <li><a href="/telescope"><em class="icon ni ni-user-alt"></em><span>Панель разработчика</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="/logout"><em class="icon ni ni-signout"></em><span>Выйти</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-lg-none">
                                    <a href="#" class="toggle nk-quick-nav-icon mr-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>
<script src="../../assets/js/bundle.js?ver=2.9.0"></script>
<scritpt src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></scritpt>
<script src="../../assets/js/scripts.js?ver=2.9.0"></script>
<script src="../../assets/js/theme.js?ver=2.9.0"></script>
@if(Session::has('no_dostup'))
    <script>
        toastr.error("{!!Session::get('no_dostup')!!}");
    </script>
@endif
</body>
</html>
