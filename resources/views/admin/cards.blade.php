@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <h4 class="card-title">Карточки</h4>
                                <p class="card-description">Просмотр и редактирование</p>
                                <a href="/yurtaboard/cards/add" class="btn btn-primary mb-3">Добавить</a>
                                <div class="row pricing-table">
                                    @foreach($cards as $card)
                                    <div class="card_view col-md-6 col-lg-4 col-12 grid-margin stretch-card pricing-card border p-1">
                                        <img class="w-100 d-block" src="/img/gallery/{{$card->img}}" alt="">
                                        <div class="controls_card">
                                            <div class="dropdown dropup">
                                                <button class="btn btn-default icon-btn dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                    <a class="dropdown-item" href="/yurtaboard/cards/delete/{{$card->id}}">Удалить</a>

                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Посмотреть</a>
                                                    <a class="dropdown-item" href="/yurtaboard/cards/edit/{{$card->id}}">Редактировать</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
