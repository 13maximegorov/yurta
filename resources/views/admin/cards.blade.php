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
                                <a href="/yurtaboard/cards/add" class="btn btn-primary mb-3">Добавление</a>
                                <div class="row pricing-table">
                                    @foreach($cards as $card)
                                    <div class="card_view col-md-6 col-lg-4 col-12 grid-margin stretch-card pricing-card">
                                        <img class="card-img-top" src="/img/cards/{{$card->img}}" alt="">
                                        <p class="d-inline-block">{{$card->title}}</p>
                                        <!-- position - absolute -->
                                        <div class="controls_card">
                                            <div class="dropdown dropup">
                                                <button class="btn btn-primary icon-btn dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                                                    <a class="dropdown-item" href="/yurtaboard/cards/delete/{{$card->id}}">Удалить</a>

                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Просмотреть</a>
                                                    <a class="dropdown-item" href="/yurtaboard/cards/edit/{{$card->id}}">Редактировать</a>

                                                </div>
                                            </div>
                                        </div>
                                        <!--  end absolute   -->

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
