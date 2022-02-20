@extends('layouts.index')
@section('title', 'Диспетчер панель')
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                        <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                                        <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                                        <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                        <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                                        <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                        <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                    </svg>
                                                </div>
                                                <div class="nk-wg1-text">
                                                    <h5 class="title">Вызовы:</h5>
                                                    <p data-toggle="modal" data-target="#profile-edit" style="font-size: 15px">Добавить вызов</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col -->
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
                                                        <th class="tb-member-role tb-col-md">
                                                            <span class="overline-title">Action</span>
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
                                                            <td class="tb-member-action">
                                                                <div class="d-none d-md-inline">
                                                                    <a href="{{ route('terminal.delete', $info->id) }}" style="margin-right: 6rem;""><em class="icon ni ni-cross"></em></a>
                                                                </div>
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
