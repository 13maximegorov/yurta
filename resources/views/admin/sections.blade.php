@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Секции</h4>
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
                                        <?php if ($sections): ?>
                                        <?php foreach($sections as $section): ?>
                                            <?php $i = 1; ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td class="w-100">{{ $section->name }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-outline-primary mr-2">Посмотреть</a>
                                                <a href="/yurtaboard/sections/edit/{{ $section->type }}/{{ $section->id }}" class="btn btn-outline-success">Редактировать</a>
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
