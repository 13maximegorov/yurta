@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Заявки (Обратная связь)</h4>
                            <div class="table-responsive">
                                @if(count($feedback) > 0)
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ФИО</th>
                                            <th>Email</th>
                                            <th>Телефон</th>
                                            <th>Возраст</th>
                                            <th>Хронические заболевания</th>
                                            <th>Жалобы</th>
                                            <th>Действие</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($feedback as $v)
                                            <tr>
                                                <td>{{$v->id}}</td>
                                                <td>{{$v->inits}}</td>
                                                <td>{{$v->email}}</td>
                                                <td>{{$v->tel}}</td>
                                                <td>{{$v->old}}</td>
                                                <td>{{$v->dis}}</td>
                                                <td>{{$v->com}}</td>
                                                <td><a href="/yurtaboard/feedback/delete/{{ $v->id }}" class="btn btn-outline-danger mr-2">Удалить</a>
                                                <a href="/yurtaboard/feedback/edit/{{ $v->id }}" class="btn btn-primary">Редактировать</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                    <div class="alert alert-warning">
                                        Заявки отсутствуют
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
