@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">Настройки</font></font></h4>
                            <div class="table-responsive">
                                <form class="forms-sample" method="post">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><font style="vertical-align: inherit;"><font
                                                    style="vertical-align: inherit;">
Параметр
                                                </font></font></th>
                                        <th><font style="vertical-align: inherit;"><font
                                                    style="vertical-align: inherit;">
                                                    Значение
                                                </font></font></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Название на вкладке</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="title" id="title" placeholder="Название на вкладке" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Название</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="name" id="name" placeholder="Название" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Копирайтинг</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="footer" id="footer" placeholder="Копирайтинг" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Описание</p>
                                        </td>
                                        <td><textarea type="text" class="form-control" name="desc" id="desc" placeholder="Описание" value=""></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Ключевые слова</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="key" id="key" placeholder="Ключевые слова" value=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Автор</p>
                                        </td>
                                        <td><input type="text" class="form-control" name="author" id="author" placeholder="Автор" value=""></td>
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
