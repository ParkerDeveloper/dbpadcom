@extends('layouts.index')
@section('title', 'Информация')
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
								<div class="container wide-xl">
									<div class="nk-content-inner">
										<div class="nk-content-body">
											<div class="nk-content-wrap">
												<div class="nk-block-head nk-block-head-lg">
													<div class="nk-block-head-sub"><span>Информация</span></div>
													<div class="nk-block-between-md g-4">
														<div class="nk-block-head-content">
															<h2 class="nk-block-title fw-normal">Часто задаваемые вопросы</h2>
															<div class="nk-block-des">
																<p>Вот некоторые вопросы, и вы можете найти свой ответ.</p>
															</div>
														</div>
													</div>
												</div><!-- .nk-block-head -->
												<div class="nk-block">
													<h5 class="title text-primary">Общий вопрос</h5>
													<p>Вы можете найти общий ответ здесь.</p>
													<div id="faq-gq" class="accordion">
														<div class="accordion-item">
															<a href="#" class="accordion-head" data-toggle="collapse" data-target="#faq-gq-1">
																<h6 class="title">Что это за сайт?</h6>
																<span class="accordion-icon"></span>
															</a>
															<div class="accordion-body collapse show" id="faq-gq-1" data-parent="#faq-gq">
																<div class="accordion-inner">
																	<p>Я ещё не придумал что сюда написать :)</p>
																</div>
															</div>
														</div><!-- .accordion-item -->
														<div class="accordion-item">
															<a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-gq-2">
																<h6 class="title">Что тут можно написать?</h6>
																<span class="accordion-icon"></span>
															</a>
															<div class="accordion-body collapse" id="faq-gq-2" data-parent="#faq-gq">
																<div class="accordion-inner">
																	<p>Дмитрий Шлиханов просто ещё не как не может заполнить раздел информации, поскольку играет в Dota 2.</p>
																</div>
															</div>
														</div><!-- .accordion-item -->
													</div><!-- .accordion -->
												</div><!-- .nk-block -->
											</div>
											<!-- footer @s -->
											<div class="nk-footer">
												<div class="container wide-xl">
													<div class="nk-footer-wrap g-2">
														<div class="nk-footer-copyright"> &copy; 2021 DataBase. Developed by <a href="">alfedov.dev</a> and <a href="#">shlihanov.dev</a>
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
@endsection
