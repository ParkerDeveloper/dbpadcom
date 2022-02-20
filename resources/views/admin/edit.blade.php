@extends('layouts.index')
@section('title', 'Профиль')
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
                                <h2 class="nk-block-title fw-normal">Профиль пользователя:</h2>
                                <div class="nk-block-des">
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Персональная информация</h5>
                                    <div class="nk-block-des">
                                        <p>Основная информация, такая как ваше имя и адрес, которую вы используете на платформе.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <form action="{{ route('update',  $user->id) }}"  method="post">
                                @csrf
                                @method('POST')
                            <div class="card card-bordered">
                                <div class="nk-data data-list">
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Полное имя</span>
                                            <span class="data-value">{{ $user->full_name }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                            <div class="data-col">
                                                <span class="data-label">E-Mail</span>
                                                <span class="data-value">{{ $user->email }}</span>
                                            </div>
                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                        </div><!-- .data-item -->
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Игровой NickName</span>
                                            <span class="data-value text-soft">{{ $user->gamenickname }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Место проживания</span>
                                            <span class="data-value">{{ $user->addres }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Игровая квента</span>
                                            <span class="data-value">{{ $user->kventa }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- .data-item -->
                                </div><!-- .nk-data -->
                            </div><!-- .card -->
                            <!-- Another Section -->
                        </div><!-- .nk-block -->
                    </div>
                    </form>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <form action="{{ route('update',  $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="modal fade" role="dialog" id="profile-edit">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-lg">
                        <h5 class="title">Обновление профиля</h5>
                        <ul class="nk-nav nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal">Персональные</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#penalties">Дисциплинарные взыскания</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#ranks">Ранги</a>
                            </li>
                        </ul><!-- .nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full_name">Полное имя</label>
                                            <input type="text" class="form-control form-control-lg" id="full_name" name="full_name" value="{{ $user->full_name }}" placeholder="Полное имя">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">Игровой NickName</label>
                                            <input type="text" class="form-control form-control-lg" id="display-name" value="{{ $user->gamenickname }}" name="gamenickname" placeholder="Игровой NickName">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="display-name">E-Mail</label>
                                            <input type="text" class="form-control form-control-lg" id="display-name" name="email" value="{{ $user->email }}" placeholder="E-Mail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="verifed">Верификация</label>
                                            <select class="form-select" id="verify" data-ui="lg" name="verifed">
                                                <option value="1" {{ ($user->verifed == 1) ? 'selected' : '' }}>Верифицирован</option>
                                                <option value="0" {{ ($user->verifed == 0) ? 'selected' : '' }}>Не верифицирован</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="division">Выбор дизиона</label>
                                            <select class="form-select" id="division" data-ui="lg" name="division">
                                                <option value="Operation Save Streets Bureau" {{ ($user->division == "Operation Save Streets Bureau") ? 'selected' : '' }}>OSSB</option>
                                                <option value="Special Enforcement Bureau" {{ ($user->division == "Special Enforcement Bureau") ? 'selected' : '' }}>SEB</option>
                                                <option value="Internal Affairs Bureau" {{ ($user->division == "Internal Affairs Bureau") ? 'selected' : '' }}>IAB</option>
                                                <option value="Central Patrol Division" {{ ($user->division == "Central Patrol Division") ? 'selected' : '' }}>CPD</option>
                                                <option value="None" {{ ($user->division == "None") ? 'selected' : '' }}>None</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="admin">Группа</label>
                                            <select class="form-select" id="admin" data-ui="lg" name="admin">
                                                <option value="0" {{ ($user->dispatcher == 0) ? 'selected' : '' }}>Пользователь</option>
                                                <option value="1" {{ ($user->dispatcher == 1) ? 'selected' : '' }}>Диспетчер</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary">Сохранить</button>
                                            </li>
                                            <li>
                                                <button type="cancel" class="btn btn-lg btn-primary">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="penalties">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l1">IC дисц.взыскания</label>
                                                <select class="form-select" id="address-l1" data-ui="lg" name="ic_warn">
                                                    <option value="0" {{ ($user->ic_warn == 0) ? 'selected' : '' }}>0</option>
                                                    <option value="1" {{ ($user->ic_warn == 1) ? 'selected' : '' }}>1</option>
                                                    <option value="2" {{ ($user->ic_warn == 2) ? 'selected' : '' }}>2</option>
                                                    <option value="3" {{ ($user->ic_warn == 3) ? 'selected' : '' }}>3</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l2">OOC дисц.взыскания:</label>
                                            <select class="form-select" id="address-l2" data-ui="lg" name="ooc_warn">
                                                <option value="0" {{ ($user->ooc_warn == 0) ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ ($user->ooc_warn == 1) ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ ($user->ooc_warn == 2) ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ ($user->ooc_warn == 3) ? 'selected' : '' }}>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-st">Устные дисц.взыскания:</label>
                                            <select class="form-select" id="address-st" data-ui="lg" name="verbal_warn">
                                                <option value="0" {{ ($user->verbal_warn == 0) ? 'selected' : '' }}>0</option>
                                                <option value="1" {{ ($user->verbal_warn == 1) ? 'selected' : '' }}>1</option>
                                                <option value="2" {{ ($user->verbal_warn == 2) ? 'selected' : '' }}>2</option>
                                                <option value="3" {{ ($user->verbal_warn == 3) ? 'selected' : '' }}>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary">Сохранить</button>
                                            </li>
                                            <li>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="ranks">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="frac_rank">Фракционые Ранги:</label>
                                            <select class="form-select" id="frac_rank" data-ui="lg" name="rank">
                                                <option value="1" {{ ($user->rank == 1) ? 'selected' : '' }}>Sheriff's Academic</option>
                                                <option value="2" {{ ($user->rank == 2) ? 'selected' : '' }}>Dep.Sheriff Trainee</option>
                                                <option value="3" {{ ($user->rank == 3) ? 'selected' : '' }}>Dep.Sheriff II</option>
                                                <option value="4" {{ ($user->rank == 4) ? 'selected' : '' }}>Dep.Sheriff III</option>
                                                <option value="5" {{ ($user->rank == 5) ? 'selected' : '' }}>Detective</option>
                                                <option value="6" {{ ($user->rank == 6) ? 'selected' : '' }}>Sergeant</option>
                                                <option value="7" {{ ($user->rank == 7) ? 'selected' : '' }}>Lieutenant</option>
                                                <option value="8" {{ ($user->rank == 8) ? 'selected' : '' }}>Captain I</option>
                                                <option value="9" {{ ($user->rank == 9) ? 'selected' : '' }}>Captain II</option>
                                                <option value="10" {{ ($user->rank == 10) ? 'selected' : '' }}>Dep.Ass.Sheriff</option>
                                                <option value="11" {{ ($user->rank == 11) ? 'selected' : '' }}>Assist.Sheriff</option>
                                                <option value="12" {{ ($user->rank == 12) ? 'selected' : '' }}>Sheriff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary">Сохранить</button>
                                            </li>
                                            <li>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
    </form>
@endsection
