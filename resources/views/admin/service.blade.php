@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Список услуг</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Название</th>
                                            <th>Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($service): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach($service as $section): ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td class="w-100">
                                                    {{ $section->title }}
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary mr-2">Посмотреть</a>
                                                <a href="/yurtaboard/service/edit/{{ $section->id }}" class="btn btn-primary">Редактировать</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
