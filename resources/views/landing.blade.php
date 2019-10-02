@extends('layouts.yurta')
@section('content')

@component('components.over') @endcomponent

<section id="welcome" class="section">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-12">
            <div class="d-table mx-auto text-center welcome-info">
                <h1>{{ $data['welcome']->title }}</h1>
                <p>{{ $data['welcome']->slogan }}</p>
                <a href="#offer" class="welcome__btn">
                    Подробнее
                </a>
            </div>
        </div>
    </div>
    <span class="welcome-text video-btn" data-src="https://www.youtube.com/embed/gGBofHaBVvY" data-toggle="modal" data-target="#videoModal">
        {{ $data['welcome']->caption }}
    </span>
</section>

<section id="offer" class="section py-3">
    <div class="container">

        <div class="gallery">
            <div>
                <div class="row mt-5">
                    @if ($gallery) @foreach ($gallery as $item)
                    <div class="col-md-6 col-lg-4" style="cursor: pointer">
                        <div class="equal e-offer" data-title="{{$item->title}}" data-id="{{$item->id}}" data-img="{{$item->img}}">
                            <h6>{{ $item->title }}</h6>
                            <img src="/img/gallery/thumb/{{ $item->img }}" alt="{{ $item->title }}">
                        </div>
                    </div>
                    @endforeach @endif
                </div>
            </div>
        </div>
        <p class="slogan">
            {{ $data['offer']->text }}
        </p>

        <br />

    </div>
    <div class="container-fluid offer py-2">
        <div class="container mt-5">

        </div>
    </div>
</section>

@if ($service)
<section id="service" class="section py-3">
    <h3 class="text-center">{{ $data['service']->title }}</h3>
    <div class="container">

        <?=$data['service']->text?>

        <a href="#contact-form" class="btn btn-default y-outline-btn d-table mx-auto mb-4">
            Получить консультацию
        </a>

    </div>
</section>
@endif

<section id="relax" class="section pt-3 pb-5 bg-light">
    <div class="container">
        <h3 class="text-center">Отдых</h3>
        <?=$data['relax']->caption?>
        <div class="row row-relax">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img data-action="zoom" src="http://utv.ru/media/og_image/149991897123276229.jpg" alt="">
                    </div>
                    <div class="card-title">
                        Туризм
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img data-action="zoom" src="https://b1.culture.ru/c/338683.jpg" alt="">
                    </div>
                    <div class="card-title">
                        Башкирский театр оперы и балета
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img data-action="zoom" src="https://idelural.ru/img/articles/avtobusnyij-tur-iz-orenburga-v-ufu-s-turoperatorom-idel-ural/1.jpg" alt="">
                    </div>
                    <div class="card-title">
                        Тур по Уфе
                    </div>
                </div>
            </div>
        </div>
        <?=$data['relax']->text?>
    </div>
</section>

<section id="above" class="section pt-3 pb-5">
    <div class="container">
        <h3 class="text-center">Проживание</h3>
        {{-- <p>Аренда квартир, гостиниц в Уфе.</p> --}}
        <p>
            Наша компания длительное время сотрудничает с лучшими отелями и агентствами недвижимости в Уфы, поэтому мы можем обеспечить наиболее комфортные условия проживания, в зависимости от предпочтений наших клиентов.
        </p>
        <div class="row row-relax">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img">
                            <img data-action="zoom" src="https://cdn.ostrovok.ru/t/640x400/ostrovok/b8/36/b8361fe4dbc443a4b406ed1cfa9c5671f832c3e6.jpeg" alt="">
                        </div>
                        <div class="card-title">
                            Отель Азимут
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img">
                            <img data-action="zoom" src="https://t-ec.bstatic.com/images/hotel/max1024x768/187/187584159.jpg" alt="">
                        </div>
                        <div class="card-title">
                            Отель Crowne Plaza
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-img">
                            <img data-action="zoom" src="https://s3-eu-west-1.amazonaws.com/media.agentika.com/user/d0821621-35c2-469e-91a3-d7fe3f32319b.jpeg" alt="">
                        </div>
                        <div class="card-title">
                            Отель Hilton Garden Inn
                        </div>
                    </div>
                </div>
            </div>
            <br>
        <p>
            Ваша задача – обозначить ваши предпочтения. Мы, в свою очередь, подберем наиболее подходящий вариант проживания по приемлемым ценам.
        </p>
        <p>
            Если Вы хотите насладиться нетронутой башкирской природой, отдохнуть вдалеке от шумного города и столпотворения людей на улицах, то коттеджи, деревенские домики на берегу реки – вот то, что Вам нужно. Свежий воздух придаст Вам сил и энергии.
        </p>

    </div>
</section>

@endsection
