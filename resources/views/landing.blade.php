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
    <span class="welcome-text">
            {{ $data['welcome']->caption }}
        </span>
</section>

<section id="offer" class="section py-3">
    <div class="container">

        <div class="gallery">
            <div>
                <div class="row mt-5">
                    @if ($gallery) @foreach ($gallery as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="equal e-offer" data-title="{{$item->title}}" data-id="{{$item->id}}" data-img="{{$item->img}}">
                            <h6>{{ $item->title }}</h6>
                            <img src="/img/gallery/thumb/{{ $item->img }}" alt="{{ $item->title }}">
                        </div>
                    </div>
                    @endforeach @endif 
                </div>
            </div>
        </div>

        <h3 class="text-center">О нас</h3>

        <p class="slogan">Yurta Medical Group организует медицинские туры в г. Уфа, Республика Башкортостан по направлениям Стоматология и Офтальмология. Мы заботимся о наших клиентах и готовы предложить вам комплексное сопровождение от заявки и до результата!</p>

        <br />

    </div>
    <div class="container-fluid offer py-2">
        <div class="container mt-5">
            
        </div>
    </div>
</section>

@if ($service)
<section id="service" class="section py-3 bg-light">
    <h3 class="text-center">Медуслуги</h3>
    <div class="container">
        <p>
            Медицина является одной из приоритетных областей развития в Башкортостане.
            Огромный потенциал в области научных исследований и современных медицинских технологий открывает все новые перспективы. Квалифицированные специалисты, сохранившийся высокий уровень клинического мышления, современные медицинские центры и клиники – все это способствует эффективности лечения в клиниках Уфы.
        </p>
            
            
        <p>
            <span class="f-22 text-50-black">
                    Мы рады предложить лечение в Уфе по следующим направлениям:
            </span>
        </p>
        
        <div class="row row-service">
            <div class="col-md-6">
                <div class="card border-0 pt-4 shadow-sm">
                    <img src="img/eye_service.svg">
                    <div class="card-body">
                        <h4 class="card-title text-center">
                            Офтальмология
                        </h4>
                        <div class="card-text">
                            <ol>
                                <li>
                                        Лазерная коррекция зрения
                                    
                                        
                                </li>
                                <li>
                                        Хирургия катаракты
                                </li>
                            </ol>
                            
                            <p>Офтальмологи в Уфе известны во всем мире и считаются одними из лучших в России. Ежегодно выполняется более 50 тысяч операций. Более 200 офтальмологов и более 40 офтальмохирургов. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 pt-4 shadow-sm">
                    <img src="img/tooth_service.svg">
                    <div class="card-body">
                        <h4 class="card-title text-center">
                            Стоматология
                        </h4>
                        <div class="card-text">
                                <ol>
                                    <li>Лечение</li>
                                    <li>Протезирование</li>
                                    <li>Имплантация</li>
                                    <li>Хирургия</li>
                                    <li>Ортодонтия </li>
                                    <li>Эстетическая стоматология (Виниры и Люминиры)</li>
                                </ol>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>
                Офтальмологи в Уфе известны во всем мире и считаются одними из лучших в России. Ежегодно выполняется более 50 тысяч операций. Здесь более 200 офтальмологов и более 40 офтальмохирургов, самое современное оборудование и грамотные специалисты. Они оказывают весь спектр офтальмологической помощи доступный в мире на данный момент.</p>

        <p>
            В Уфе находится один из старейших институтов в России с 90 летней историей Уфимский НИИ глазных болезней, а также Всероссийский центр пластической и офтальмохирургии “Аллоплант”.       
        </p>     
    </div>
</section>
@endif

{{-- <section id="comments" class="section pt-3">
    <div class="container">
        <h3 class="text-center">Отзывы</h3>
    </div>
</section> --}}
<section id="relax" class="section pt-3 pb-5">
    <div class="container">
        <h3 class="text-center">Отдых</h3>
        <p>Путешествуй и оздоравливайся!</p> 

        <p>
            <b>
                    Вы давно хотели расширить горизонты, побывать в неизведанной Башкирии?
            </b>
        </p>
        <p>
                С YURTA MEDICAL GROUP все возможно!
                Медицинский туризм – способ совместить приятное с полезным. Это возможность осуществить задуманное. Наша компания дает возможность каждому проводить время на его личное усмотрение. Решите заранее, как бы Вы хотели провести свое свободное время в Уфе.
        </p>


    </div>
</section>
<section id="above" class="section pt-3 pb-5 bg-light">
    <div class="container">
        <h3 class="text-center">Проживание</h3>
        <p>Аренда квартир, гостиниц в Уфе.</p>
        <p>
            Наша компания длительное время сотрудничает с лучшими отелями и агентствами недвижимости в Уфы, поэтому мы можем обеспечить наиболее комфортные условия проживания, в зависимости от предпочтений наших клиентов.
        </p>
        <p>
            Ваша задача – обозначить ваши предпочтения. Мы, в свою очередь, подберем наиболее подходящий вариант проживания по приемлемым ценам. 
        </p>
        <p>
            Если Вы хотите насладиться нетронутой башкирской природой, отдохнуть вдалеке от шумного города и столпотворения людей на улицах, то коттеджи, деревенские домики на берегу реки – вот то, что Вам нужно. Свежий воздух придаст Вам сил и энергии. 
        </p>

    </div>
</section>

@endsection