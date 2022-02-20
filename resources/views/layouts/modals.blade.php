<form action="{{ route('terminal.update') }}" method="post">
    @csrf
    @method('POST')
<div class="modal fade" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Добавление вызова</h5>
                <ul class="nk-nav nav nav-tabs">
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="22">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="unit">Причина</label>
                                    <input @class('form-control form-control-lg') type="text" required  list="cause" autocomplete="on" name="cause">
                                    <datalist id="cause">
                                        @foreach($causes as $cause)
                                            <option>{{ $cause->title }}</option>
                                        @endforeach
                                        <input type="submit">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="unit">Улица</label>
                                    <input @class('form-control form-control-lg') type="text" required  list="state" autocomplete="on" name="state">
                                    <datalist id="state">
                                        @foreach($states as $state)
                                            <option>{{ $state->title }}</option>
                                        @endforeach
                                        <input type="submit">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="unit">Юнит</label>
                                    <select class="form-select" id="unit" data-ui="lg" name="unit">
                                        @foreach($users as $user)
                                            <option>{{ $user->gamenickname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="info">Краткое описание(10 символов максимум)</label>
                                    <input type="text" class="form-control form-control-lg" required  maxlength="10" id="info" name="info" placeholder="Краткое описание">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-lg btn-primary">Добавить</button>
                                </li>
                                <li>
                                    <button data-dismiss="modal" class="link link-light">Отмена</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
</form>
<form action="{{ route('terminal.update_status', $user->id) }}" method="post">
    @csrf
    @method('POST')
<div class="modal fade" role="dialog" id="statys">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Обновление статуса</h5>
                <ul class="nk-nav nav nav-tabs">
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <div class="tab-pane active" id="22">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="status">Статус</label>
                                    <select class="form-select" id="status" data-ui="lg" name="status">
                                        @foreach($statyses as $statys)
                                            <option>{{ $statys->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="unit_status">Юнит</label>
                                    <select class="form-select" id="unit_status" data-ui="lg" name="unit">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->gamenickname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-lg btn-primary">Обновить</button>
                                    </li>
                                    <li>
                                        <button data-dismiss="modal" class="link link-light">Отмена</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
</form>

<form action="{{ route('panel.update', $user->id) }}" method="post">
        @csrf
        <div class="modal fade" role="dialog" id="statys_user">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-lg">
                        <h5 class="title">Обновление статуса</h5>
                        <ul class="nk-nav nav nav-tabs">
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="22">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="status">Статус</label>
                                            <select class="form-select" id="status" data-ui="lg" name="status">
                                                @foreach($statyses as $status)
                                                    <option value="{{ $status->title }}">{{ $status->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Обновить</button>
                                            </li>
                                            <li>
                                                <button data-dismiss="modal" class="link link-light">Отмена</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

