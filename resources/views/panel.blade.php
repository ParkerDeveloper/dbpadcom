@extends('layouts.index')
@section('title', 'Панель')
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
                                                    <h5 class="title">Статус</h5>
                                                    <p data-toggle="modal" data-target="#statys_user" style="font-size: 15px"><b>Выбрать статус</b></p>
                                                    <h5 class="title">Ваш статус: {{ Auth::user()->status  }}</h5>
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
                                                        <path d="M29,74H11a7,7,0,0,1-7-7V17a7,7,0,0,1,7-7H61a7,7,0,0,1,7,7V30" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <path d="M11,11H61a6,6,0,0,1,6,6v4a0,0,0,0,1,0,0H5a0,0,0,0,1,0,0V17A6,6,0,0,1,11,11Z" fill="#e3e7fe" />
                                                        <circle cx="11" cy="16" r="2" fill="#6576ff" />
                                                        <circle cx="17" cy="16" r="2" fill="#6576ff" />
                                                        <circle cx="23" cy="16" r="2" fill="#6576ff" />
                                                        <rect x="11" y="27" width="19" height="19" rx="1" ry="1" fill="#c4cefe" />
                                                        <path d="M33.8,53.79c.33-.43.16-.79-.39-.79H12a1,1,0,0,0-1,1V64a1,1,0,0,0,1,1H31a1,1,0,0,0,1-1V59.19a10.81,10.81,0,0,1,.23-2Z" fill="#c4cefe" />
                                                        <line x1="36" y1="29" x2="60" y2="29" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="36" y1="34" x2="55" y2="34" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="36" y1="39" x2="50" y2="39" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="36" y1="44" x2="46" y2="44" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect x="4" y="21" width="64" height="2" fill="#6576ff" />
                                                        <rect x="36" y="56" width="38" height="24" rx="5" ry="5" fill="#fff" stroke="#e3e7fe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <rect x="41" y="60" width="12" height="9" rx="1" ry="1" fill="#c4cefe" />
                                                        <path d="M84.74,53.51,66.48,35.25a4.31,4.31,0,0,0-6.09,0l-9.13,9.13a4.31,4.31,0,0,0,0,6.09L69.52,68.73a4.31,4.31,0,0,0,6.09,0l9.13-9.13A4.31,4.31,0,0,0,84.74,53.51Zm-15-5.89L67,50.3a2.15,2.15,0,0,1-3,0l-4.76-4.76a2.16,2.16,0,0,1,0-3l2.67-2.67a2.16,2.16,0,0,1,3,0l4.76,4.76A2.15,2.15,0,0,1,69.72,47.62Z" fill="#6576ff" />
                                                    </svg>
                                                </div>
                                                <div class="nk-wg1-text">
                                                    <h5 class="title">Блокнот</h5>
                                                    <textarea style="height: 131px; width: 17rem; resize: none;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-content-body">
                                    <div class="nk-content-wrap">
                                        <div class="nk-block-head nk-block-head-lg">
                                            <div class="nk-block-head-sub"><span>Вызовы</span></div>
                                            <div class="nk-block-between-md g-4">
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="nk-block">
                                            <div class="card card-bordered">
                                                <table class="table table-member">
                                                    <thead class="tb-member-head thead-light">
                                                    <tr class="tb-member-item">
                                                        <th class="tb-member-info">
                                                            <span class="overline-title">ID</span>
                                                        </th>
                                                        <th class="tb-member-type tb-col-sm">
                                                            <span style="margin-left: -14rem;" class="overline-title">Причина</span>
                                                        </th>
                                                        <th class="tb-member-type tb-col-sm">
                                                            <span style="margin-left: -6rem;" class="overline-title">Улица</span>
                                                        </th>
                                                        <th class="tb-member-role tb-col-md">
                                                            <span style="margin-left: -1rem;" class="overline-title">Описание</span>
                                                        </th>
                                                        <th class="tb-member-role tb-col-md">
                                                            <span style=""class="overline-title">Unit</span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    @foreach($infos as $info)
                                                        <tbody class="tb-member-body">
                                                        <tr class="tb-member-item">
                                                            <td class="tb-member-info">
                                                                <div class="user-card">
                                                                    <div class="user-info">
                                                                        <span class="lead-text">#{{$info->id}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="tb-member-type tb-col-sm">
                                                                <span style="margin-left: -15rem;">{{$info->cause}}</span>
                                                            </td>
                                                            <td class="tb-member-type tb-col-sm">
                                                                <span style="margin-left: -7rem;">{{$info->state}}</span>
                                                            </td>
                                                            <td class="tb-member-type tb-col-sm"">
                                                            <span style="font-size: 13px;">{{$info->description}}</span>
                                                            </td>
                                                            <td class="tb-member-type tb-col-sm"">
                                                            <span style="">{{$info->unit}}</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    @endforeach
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
    @extends('layouts.modals')
@endsection
