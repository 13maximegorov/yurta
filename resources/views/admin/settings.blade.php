@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>Настройки</h4>
                            <div class="table-responsive">
                                <form class="forms-sample" method="post" action="/yurtaboard/settings/edit">
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
                                            <p class="mb-0">Название на вкладке</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="site_title" id="title" placeholder="Название на вкладке" value="{{$settings['site.title']['value']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Название</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="site_name" id="name" placeholder="Название" value="{{$settings['site.name']['value']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Права</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="site_footer" id="footer" placeholder="Копирайтинг" value="{{$settings['site.footer']['value']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Описание</p>
                                        </td>
                                        <td>
                                            <input type="text" 
                                            class="form-control" 
                                            name="site_meta_desc" 
                                            id="desc" 
                                            placeholder="Описание"
                                            value="{{$settings['site.meta.desc']['value']}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Ключевые слова</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="site_meta_key" id="key" placeholder="Ключевые слова" value="{{$settings['site.meta.key']['value']}}"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Автор</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="site_meta_author" id="author" placeholder="Автор" value="{{$settings['site.meta.author']['value']}}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <button type="submit" name="btn_settings" class="btn btn-primary mr-2">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
