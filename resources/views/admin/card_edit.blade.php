@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Редактирование</h4>
                            <form class="forms-sample" method="post" action="/yurtaboard/cards/edit/{{ $card->id }}" enctype="multipart/form-data">
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
                                    <label for="title">Название</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Название" value="{{$card->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="descr">Описание</label>
                                    <textarea type="text" class="form-control" id="descr"  name="text" placeholder="Описание">{{$card->text}}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="#">Текущее изображение</label>
                                            <img class="d-block w-100" src="/img/gallery/{{$card->img}}" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="#">Изменить изображение</label>
                                                <input type="file" class="dropify" name="img" data-max-file-size="30mb" />
                                            </div>
                                        </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="is_active">
                                        Не показывать
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Редактировать</button>
                                <a href="/yurtaboard/cards/" class="btn btn-light">Отменить</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
