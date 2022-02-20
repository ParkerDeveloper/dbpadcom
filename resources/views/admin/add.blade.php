@extends('layouts.index')
@section('title', 'Панель упарвления | Обновление данных')
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
                            <li class="nk-menu-item">
                                <a href="/admin/add" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-puzzle"></em></span>
                                    <span class="nk-menu-text">Добавление параметров</span>
                                </a>
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
                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal"></h2>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="row g-gs">
                                <div class="col-md-6">
                                    <div class="card card-bordered card-full">
                                        <div class="nk-wg1">
                                            <div class="nk-wg1-block">
                                                <div class="nk-wg1-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                        <rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                                        <circle cx="53" cy="23" r="2" fill="#c4cefe" />
                                                        <circle cx="60" cy="23" r="2" fill="#c4cefe" />
                                                        <circle cx="67" cy="23" r="2" fill="#c4cefe" />
                                                        <rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    </svg>
                                                </div>
                                                <div class="nk-wg1-text">
                                                    <h5 class="title">Причины вызовов</h5>
                                                    <p data-toggle="modal" data-target="#cause" style="font-size: 15px">Добавить причину</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-bordered card-full">
                                        <div class="nk-wg1">
                                            <div class="nk-wg1-block">
                                                <div class="nk-wg1-img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                                    <path d="M40.74,5.16l38.67,9.23a6,6,0,0,1,4.43,7.22L70.08,80a6,6,0,0,1-7.17,4.46L24.23,75.22A6,6,0,0,1,19.81,68L33.56,9.62A6,6,0,0,1,40.74,5.16Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <path d="M50.59,6.5,11.18,11.73a6,6,0,0,0-5.13,6.73L13.85,78a6,6,0,0,0,6.69,5.16l39.4-5.23a6,6,0,0,0,5.14-6.73l-7.8-59.49A6,6,0,0,0,50.59,6.5Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <rect x="15" y="15" width="54" height="70" rx="6" ry="6" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <line x1="42" y1="77" x2="58" y2="77" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <circle cx="38" cy="77" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                                                    <line x1="42" y1="72" x2="58" y2="72" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <circle cx="38" cy="72" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                                                    <line x1="42" y1="66" x2="58" y2="66" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <circle cx="38" cy="66" r="0.5" fill="#c4cefe" stroke="#c4cefe" stroke-miterlimit="10" />
                                                                    <path d="M46,40l-15-.3V40A15,15,0,1,0,46,25h-.36Z" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <path d="M42,22A14,14,0,0,0,28,36H42V22" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <polyline points="33.47 30.07 28.87 23 23 23" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                    <polyline points="25 56 35 56 40.14 49" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                </svg>
                                                </div>
                                                <div class="nk-wg1-text">
                                                    <h5 class="title">Улица</h5>
                                                    <p data-toggle="modal" data-target="#state" style="font-size: 15px">Добавить улицу</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-content-body">
                                    <div class="nk-content-wrap">
                                        <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-member">
                                                    <thead class="tb-member-head thead-light">
                                                    <tr class="tb-member-item">
                                                        <th class="tb-member-info">
                                                            <span class="overline-title">Причины</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($causes as $cause)
                                                        <tbody class="tb-member-body">
                                                        <tr class="tb-member-item">
                                                            <td class="tb-member-info">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="lead-text">{{$cause->title}} <a style="margin-left: 2rem;" href="{{ route('add.delete.cause', $cause->id) }}"><em class="icon ni ni-cross"></em></a></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-member">
                                                    <thead class="tb-member-head thead-light">
                                                    <tr class="tb-member-item">
                                                        <th class="tb-member-info">
                                                            <span class="overline-title">Улицы</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($states as $state)
                                                        <tbody class="tb-member-body">
                                                        <tr class="tb-member-item">
                                                            <td class="tb-member-info">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="lead-text">{{$state->title}} <a style="margin-left: 2rem;" href="{{ route('add.delete.state', $state->id) }}"><em class="icon ni ni-cross"></em></a></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                                </table>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('add.update.cause') }}" method="post">
        @csrf
        @method('POST')
        <div class="modal fade" role="dialog" id="cause">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-lg">
                        <h5 class="title">Добавление причины</h5>
                        <ul class="nk-nav nav nav-tabs">
                        </ul><!-- .nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Введите причину</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Остановка транспорта" name="cause">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Сохранить</button>
                                            </li>
                                            <li>
                                                <button data-dismiss="modal" class="link link-light">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div>
        </div>
    </form>

    <form action="{{ route('add.update.state') }}" method="post">
        @csrf
        @method('POST')
        <div class="modal fade" role="dialog" id="state">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-lg">
                        <h5 class="title">Добавление улицы</h5>
                        <ul class="nk-nav nav nav-tabs">
                        </ul><!-- .nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Введите имя улицы</label>
                                            <input type="text" class="form-control form-control-lg" id="full-name" placeholder="Fort Carson" name="state">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Сохранить</button>
                                            </li>
                                            <li>
                                                <button data-dismiss="modal" class="link link-light">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div>
        </div>
    </form>

@endsection

