@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Добавление карточки</h4>
{{--                            <p class="card-description">--}}
{{--                                Basic form layout--}}
{{--                            </p>--}}
                            <form class="forms-sample" method="post">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" class="form-control" id="title" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="descr">Описание</label>
                                    <input type="text" class="form-control" id="descr" placeholder="Описание">
                                </div>
                                <div class="form-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="#">Добавить изображение</label>
                                                <input type="file" class="dropify" data-max-file-size="30mb" />
                                            </div>
                                        </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Не показывать
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Добавить</button>
                                <button class="btn btn-light">Отменить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
