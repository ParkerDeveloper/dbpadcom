@extends('layouts.index')
@section('title', 'Панель упарвления')
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
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-head-sub"><span>Пользователи сайта</span></div>
                            <div class="nk-block-between-md g-4">
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <table class="table table-member">
                                    <thead class="tb-member-head thead-light">
                                    <tr class="tb-member-item">
                                        <th class="tb-member-info">
                                            <span class="overline-title">Login</span>
                                        </th>
                                        <th class="tb-member-type tb-col-sm">
                                            <span class="overline-title">GameNickName</span>
                                        </th>
                                        <th class="tb-member-role tb-col-md">
                                            <span class="overline-title">Статус</span>
                                        </th>
                                        <th class="tb-member-action">
                                            <span class="overline-title">Действия</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="tb-member-body">
                                    @foreach($users as $user)
                                    <tr class="tb-member-item">
                                        <td class="tb-member-info">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">{{$user->name}}</span>
                                                    <span class="sub-text">{{$user->email}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="tb-member-type tb-col-sm">
                                            <span>{{$user->gamenickname}}</span>
                                        </td>
                                        <td class="tb-member-role tb-col-md">
                                            <span>
                                                @if($user->isOnline())
                                                    <span style="color:green; font-weight: bold">Онлайн</span>
                                                    @else
                                                    <span style="color:red; font-weight: bold">Оффлайн</span>
                                                @endif
                                            </span>
                                        </td>
                                        <td class="tb-member-action">
                                            <div class="d-none d-md-inline">
                                                <a href="{{ route('edit', $user->id) }}" class="link link-sm"><span>Редактировать</span></a>
                                            </div>
                                            <div class="dropdown d-md-none">
                                                <a class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                    <ul class="link-list-plain no-bdr">
                                                        <li class="active"><a class="link link-sm" href="#">Редактировать</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
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
@endsection

