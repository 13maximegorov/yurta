@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>Заявка от <b>{{$feedback->inits}}</b></h4>
                            <div class="table-responsive">
                                <form class="forms-sample" method="post" action="/yurtaboard/feedback/edit/{{$feedback->id}}">
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
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Параметр</th>
                                            <th>Значение</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="mb-0">ФИО</p>
                                            </td>
                                            <td><input type="text" class="form-control" name="inits" id="inits" placeholder="ФИО" value="{{$feedback->inits}}"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Email</p>
                                            </td>
                                            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{$feedback->email}}"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Телефон</p>
                                            </td>
                                            <td><input type="text" class="form-control" name="tel" id="tel" placeholder="Телефон" value="{{$feedback->tel}}"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Возраст</p>
                                            </td>
                                            <td>
                                                <input type="text"
                                                       class="form-control"
                                                       name="old"
                                                       id="old"
                                                       placeholder="Возраст"
                                                       value="{{$feedback->old}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Хронические заболевания</p>
                                            </td>
                                            <td><input type="text" class="form-control" name="dis" id="dis" placeholder="Хронические заболевания" value="{{$feedback->dis}}"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Жалобы</p>
                                            </td>
                                            <td><input type="text" class="form-control" name="com" id="com" placeholder="Жалобы" value="{{$feedback->com}}"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <button type="submit" name="btn_settings" class="btn btn-primary mr-2">Редактировать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
