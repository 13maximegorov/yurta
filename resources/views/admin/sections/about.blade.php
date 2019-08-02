@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Редактирование секции</h4>
                            <form class="forms-sample" method="post" action="/yurtaboard/cards/add" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\Illuminate\Support\Facades\Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{\Illuminate\Support\Facades\Session::get('success')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="title1">Заголовок</label>
                                    <input type="text" id="title1" class="form-control" name="title_h1" placeholder="Название" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="title2">Подзаголовок</label>
                                    <input type="text" id="title2" class="form-control" name="title_h2" placeholder="Подзаголовок" value="">
                                </div>
                                <div class="form-group">
                                    <label for="slogan">Слоган</label>
                                    <input type="text" id="slogan" class="form-control" name="slogan" placeholder="Слоган" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="caption">Подпись</label>
                                    <input type="text" class="form-control" id="caption" name="caption" placeholder="Слоган" value="">
                                </div>
                                <div class="form-group">
                                    <label for="text">Текст</label>
                                    <textarea type="text" class="form-control" id="text"  name="text" maxlength="300" placeholder="Ваш текст" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Редактировать</button>
                                <a href="/yurtaboard/sections/" class="btn btn-light">Отменить</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
