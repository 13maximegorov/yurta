@extends('layouts.yurta')

@section('content')
    <section id="welcome" class="section">
        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="col-md-12">
                <div class="d-table mx-auto text-center welcome-info">
                    <?php 
                        $title = json_decode ($data['welcome']->titles)
                    ?>
                    <h1>{{ $title->h1 }}</h1>
                    <p>{{ $data['welcome']->slogan }}</p>
                    <button>Начнём</button>
                </div>
            </div>
        </div>
        <span class="welcome-text">
            {{ $data['welcome']->caption }}
        </span>
    </section>
    <section id="offer" class="section py-3">
        <div class="container-fluid">
            <h3 class="text-center">О нас</h3>
            {{-- <span class="d-block text-center">clever treatment</span> --}}

            <p>YURTA MEDICAL GROUP организует медицинские туры в г. Уфа, Республика Башкортостан по направлениям Стоматология и Офтальмология. Мы заботимся о наших клиентах и готовы предложить вам комплексное сопровождение от заявки и до результата!</p>

            <div class="gallery">
                <div>
                    <div class="row mt-5">
                        @if ($gallery)
                            @foreach ($gallery as $item)
                                <div class="col-md-6 col-lg-4">
                                    <div class="equal">
                                        <h6>
                                            {{ $item->title }}
                                        </h6>
                                        <img src="/img/gallery/{{ $item->img }}" alt="{{ $item->title }}">
                                    </div>
                                </div>
                            @endforeach
                        @endif 
                        {{-- <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="https://www.goodnewsclinics.org/wp-content/uploads/2018/05/Hygienist.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="http://www.fareastdental.com/sites/default/files/photos/large/201512/img2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="https://img.freepik.com/free-photo/close-up-implan-tooth-support-fix-bridge-implan-crown_60829-516.jpg?size=626&ext=jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="https://s-ec.bstatic.com/images/hotel/max1024x768/797/79726354.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="https://www.libertytravel.com/sites/default/files/styles/full_size/public/flight-hero.jpg?itok=hhscHSGZ" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="equal">
                                <h6>Title not found</h6>
                                <img src="https://img1.southernliving.timeinc.net/sites/default/files/styles/story_card_hero/public/image/2016/01/main/ga_7388cf91891f4602_spcms.jpg?itok=smgvjcaa" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="offer-info">
                        <span class="d-block">Наши услуги</span>
                        <ul>
                            <li>Подбираем врача и курируем до конечного результата.</li>
                            <li>Первичная консультация онлайн</li>
                            <li>Консультация и лечение  у лучших специалистов Уфы</li>
                            <li>Трансфер - мы встретим Вас в аэропорту, разместим в отеле, отвезем в клинику.</li>
                            <li>Проживание в отеле / квартире / доме</li>
                            <li>Организация питания</li>
                            <li>Экскурсии по Уфе и Башкортостану </li>
                            <li>Туристические походы по знаменитым местам Башкортостана </li>
                        </ul> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="offer-info">
                        <span class="d-block">Для иностранных граждан</span>
                        <ul>
                            <li>Подготовка документов для въезда в Россию</li>
                            <li>Перевод документов на русский язык</li>
                            <li>Перевод заключения на английский язык, после прохождения лечения</li>
                            <li>Переводчик</li>
                        </ul>
                        <div class="arrow_box">
                            <p>
                                По вашему желанию может быть организован тур по городу и окрестностям Республики Башкортостан  - нам есть что вам показать.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="visa" class="section visa pt-3">
        <h3 class="text-center">Visa</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="visa-info">
                    <span>Обыкновенная туристическая (код 004)</span>
                    <p> оформляется на основании туристического приглашения, иностранцам, желающим посетить Россию в туристических целях (посещение выставок, культурных мероприятий, экскурсий, знакомство с достопримечательностями нашей страны и просто прогулки по нашим замечательным улицам).</p> 
                    <p>Виза может быть однократная или двукратная. Максимальный срок пребывания по туристической визе 1 мес. Срок оформления такого приглашения 1 день или срочное оформление — за 1 час.(Цель поездки указываемая в приглашении: ТУРИЗМ, АВТОТУРИЗМ, ТУРИЗМ ЦЕЛЕВОЙ, ТУРИЗМ-ОХОТА)Самый быстрый способ оформить краткосрочный визит в Россию, с туристической целью поездки. Для получения визы, в посольство достаточно предоставить копию приглашения (распечатанную копию или факсимильную)</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="visa-info">
                    <span>Обыкновенная частная (код 002)</span>   
                    <p>виза оформляется на основании Частного приглашения, оформленное по ходатайству гражданина РФ имеющего постоянную регистрацию на территории РФ. Документы на приглашение сдаются в районом отделении Федеральной Миграционной Служубы. Цель поездки в приглашение указана как ЧАСТНАЯ.</p>
                    <p>По ходатайству юридического лица, возможно оформить гостевое приглашение для получения гостевой визы в РФ. Такие приглашения оформляются от юридического лица, для иностранных граждан собирающихся в Россию, с гостевой целью — встреча с родственниками, частные цели поездки, посещения мест захоронения, лечение и консультации в мед. учереждениях. Наша компания оформляет гостевые приглашения для получения гостевой визы в Россию.</p>
                </div>
            </div>
        </div>
        {{-- <span class="d-block text-center">Registration of tourist and guest visas in more than 150 countries.</span>
        <div class="d-table mx-auto w-75 text-center">
            <p>If you go into the terminology, then the visa is a document that allows foreigners to enter the territory of the state. Most often the visa is pasted into the passport in the Form of a coupon. Sometimes they are put in the form of seals. Visas are issued by the consulate or embassy of the country, in which you intend to go. There are also special accredited centers. Naturally, the design of this document is worth the money.</p>
            <a href="#" class="white__button border d-inline-block my-5">More info</a>
        </div> --}}
        <div class="ornament-1 mt-5"></div>
    </section>
    <section id="work" class="section work py-5">
        <h3 class="text-center color__dark" style="line-height: 1.6">
            Мы работаем с лучшими <br />медицинскими компаниями
        </h3>
        <div class="container">
            
        </div>
        <div class="d-table mx-auto text-center">
            <p>Fill out the form with the desired medical services.</p>
            <p>We will contact you and offer of you the most advantageous tour.</p>
            <button class="green__button">open a profile</button>
        </div>
    </section>
    <section id="question" class="section question py-5 bg-light">
        <h4 class="text-center mb-4">
            Question? We will answer it and give the best advice!
        </h4>
        <nav class="d-flex justify-content-center">
            <button class="dark__button">Question</button>
            <button class="dark__button">Next</button>
        </nav>
    </section>
@endsection
