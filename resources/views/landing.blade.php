@extends('layouts.yurta') 
@section('content')
<section id="welcome" class="section">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-12">
            <div class="d-table mx-auto text-center welcome-info">
                <h1>{{ $data['welcome']->title }}</h1>
                <p>{{ $data['welcome']->slogan }}</p>
                <a href="#offer" class="welcome__btn">Начнём</a>
            </div>
        </div>
    </div>
    <span class="welcome-text">
            {{ $data['welcome']->caption }}
        </span>
</section>
<section id="offer" class="section py-3">
    <div class="container">
        <h3 class="text-center">О нас</h3>

        <p class="slogan">Yurta Medical Group организует медицинские туры в г. Уфа, Республика Башкортостан по направлениям Стоматология и Офтальмология. Мы заботимся о наших клиентах и готовы предложить вам комплексное сопровождение от заявки и до результата!</p>

        <div class="gallery">
            <div>
                <div class="row mt-5">
                    @if ($gallery) @foreach ($gallery as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="equal">
                            <h6>{{ $item->title }}</h6>
                            <img src="/img/gallery/{{ $item->img }}" alt="{{ $item->title }}">
                        </div>
                    </div>
                    @endforeach @endif {{--
                    <div class="col-md-6 col-lg-4">
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

    </div>
    <div class="container-fluid offer bg-light py-2">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-info">
                        <span class="d-block">Наши услуги</span>
                        <ul>
                            <li>Подбираем врача и курируем до конечного результата.</li>
                            <li>Первичная консультация онлайн</li>
                            <li>Консультация и лечение у лучших специалистов Уфы</li>
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
                            <div class="row no-gutters">
                                <div class="col-md-2 align-self-center text-center">
                                    <i class="fas fa-exclamation-circle color__green" style="font-size: 42px"></i>
                                </div>
                                <div class="col-md-10">
                                    <p>
                                        По вашему желанию может быть организован тур по городу и окрестностям Республики Башкортостан - нам есть что вам показать.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service" class="section service pt-3">
    <h3 class="text-center">Услуги</h3>
    <div class="container">

        <!-- Featured Project Row -->
        {{--
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="https://blackrockdigital.github.io/startbootstrap-grayscale/img/bg-masthead.jpg" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Shoreline</h4>
                    <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                </div>
            </div>
        </div> --}}

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <div class="equal">
                    <img class="img-fluid" src="/img/gallery/стоматология.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-dark text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Стоматология</h4>
                            <p class="mb-0 text-white-50">
                                <ol class="text-white-50">
                                    <li>Лечение</li>
                                    <li>Протезирование</li>
                                    <li>Имплантация</li>
                                    <li>Хирургия</li>
                                    <li>Ортодонтия </li>
                                    <li>Эстетическая стоматология (Виниры и Люминиры)</li>
                                </ol>  
                            </p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <div class="equal">
                    <img class="img-fluid" src="/img/gallery/офтальмология.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-dark text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Офтальмология</h4>
                            <p class="mb-0 text-white-50">
                                Офтальмологи в Уфе известны во всем мире и считаются одними из лучших в России. Ежегодно выполняется более 50 тысяч операций.Здесь более 200 офтальмологов и более 40 офтальмохирургов, самое современное оборудование и грамотные специалисты. Они оказывают весь спектр офтальмологической помощи доступный в мире на данный момент.
                                <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="work" class="section work py-5">
    <h3 class="text-center" style="line-height: 1.6">
            <?=$data['work']->title?>
        </h3>
    <div class="container">
        <p class="slogan color__grey">Мы предлагаем своим клиентам комплексное сопровождение, начиная с первого запроса и заканчивая выпиской из клиники после завершения лечения. Обязанность наших сотрудников заключается в обеспечении качества медицинской помощи, соответствующей научному уровню и вашим социальным потребностям.</p>

        <h4 class="text-center mt-5">Как мы работаем?</h4>

        <div class="row justify-content-center no-gutters mb-lg-0">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>1</small>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project"> 
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left px-3">
                            <h4 class="text-black mb-4">
                                Заявка на лечение
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                Вы сможете связаться с нами по нашим телефонам или заполнить форму и наш специалист свяжется с Вами в течение 24 часов с момента получения запроса. Для первичного разговора, пожалуйста, будьте готовы сообщить нам следующие данные:
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>2</small>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right px-3">
                            <h4 class="text-black mt-5 mb-4">
                                Разговор с  врачом, сбор анамнеза
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                После получения первичной информации с пациентом переговорит наш врач, который соберет подробный анамнез пациента и задаст уточняющие вопросы по медицинской ситуации и необходимых медицинских мероприятиях.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters mb-lg-0">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>3</small>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left px-3">
                            <h4 class="text-black mb-4">
                                Запрос в клинику
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                Далее мы отправляем запрос в клинику вместе с вашими медицинскими документами, снимками и т.п.
                                Все медицинские документы изучают врачи в клинике, которые впоследствии будут заниматься непосредственным лечением пациента.
                                Врач дает ответ о возможности/невозможности лечения, составляет план лечения и его длительность. Ответ врача может быть как в письменном виде, так и устно в телефонном разговоре.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>4</small>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black mt-5 mb-4">
                                Подготовка предложения для пациента
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                После получения ответа из клиники мы готовим для пациента официальное предложение, которое включает в себя информацию о клинике и враче, предполагаемом плане диагностики/лечения, стоимости и длительности лечения, стоимости сервисных услуг (трансферы, размещение, сопровождение переводчиком), стоимости организационных услуг.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center no-gutters mb-lg-0">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>5</small>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black mb-4">
                                Организация поездки
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                На протяжении всего процесса организации поездки Ваш персональный менеджер будет оказывать полное содействие по всем вопросам.
                                Наши врачи также отслеживают весь процесс оформления и при необходимости отвечают на вопросы медицинского характера.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>6</small>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black mt-5 mb-4">
                                Лечение
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                    Прилет и размещение
                                    По прилету в аэропорт мы организуем встречу в аэропорту и трансфер до клиники/отеля.
                                    На протяжении Вашего лечения Вас будет сопровождать переводчик-координатор.
                                    На первичные консультации и обследования 1-2 дня использование переводчика обязательно, далее Вы самостоятельно определяете необходимость работы с ним.
                                    Использование грамотного переводчика не только облегчит Ваш контакт с персоналом клиники, но и зачастую позволяет значительно ускорить процесс диагностики и лечения, и даже сэкономить на лечении.
                                    
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters mb-lg-0">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>7</small>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black mb-4">
                                Возвращение пациента
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                Перед выпиской из клиники рекомендуем попросить врача подготовить Выписной эпикриз и тщательно выяснить рекомендации по медикаментам.
                                Рекомендованные медикаменты можно приобрести в стране лечения. Для этого необходимо попросить врача выписать рецепты. Медикаменты можно заказать в любой аптеке.         
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 text-center align-self-center">
                <div class="work-info">
                    <small>8</small>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black mt-5 mb-4">
                                Постлечебная курация
                            </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                После возвращения мы поддерживаем связь с нашими пациентами.
                                Если возникают какие-то медицинские проблемы или вопросы у лечащих врачей по месту жительства, то мы всегда имеем возможность связаться с лечащим врачом за рубежом и уточнить порядок действий.
                                Если лечение длительное и требует нескольких поездок за границу, то мы организуем необходимое количество поездок.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     </div>
</section>
<!--
    <section id="transfers" class="section transfers pt-3">
        <h3 class="text-center">Трансферы</h3>
        <div class="container">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                              </div>
                              <small class="text-muted">9 mins</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    </section>
    -->
<section id="visa" class="section visa pt-3">
    <h3 class="text-center">{{ $data['visa']->title }}</h3>
    <div class="container">
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6 text-center align-self-center">
                <div class="visa-info">
                    <small>Код</small>
                    <span class="d-block">004</span>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-black mb-4">
                            Обыкновенная туристическая
                        </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                Оформляется на основании туристического приглашения, иностранцам,желающим посетить Россию в туристических целях (посещение выставок, культурных мероприятий, экскурсий, знакомство с достопримечательностями нашей страны и просто прогулки по нашим замечательным улицам). Виза может быть однократная или двукратная. Максимальный срок пребывания по туристической визе 1 мес. Срок оформления такого приглашения 1 день или срочное оформление — за 1 час.
                            </p>
                            <p class="text-black-50">
                                (Цель поездки указываемая в приглашении: ТУРИЗМ, АВТОТУРИЗМ, ТУРИЗМ ЦЕЛЕВОЙ, ТУРИЗМ-ОХОТА)Самый быстрый способ оформить краткосрочный визит в Россию, с туристической целью поездки. Для получения визы, в посольство достаточно предоставить копию приглашения (распечатанную копию или факсимильную)
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6 text-center align-self-center">
                <div class="visa-info">
                    <small>Код</small>
                    <span class="d-block">002</span>
                </div>
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-black mt-5 mb-4">
                            Обыкновенная частная    
                        </h4>
                            <p class="mb-0 text-black-50 mt-0">
                                Виза оформляется на основании Частного приглашения, оформленное по ходатайству гражданина РФ имеющего постоянную регистрацию на территории РФ. Документы на приглашение сдаются в районом отделении Федеральной Миграционной Служубы. Цель поездки в приглашение указана как ЧАСТНАЯ.
                            </p>
                            <p class="text-black-50">
                                По ходатайству юридического лица, возможно оформить гостевое приглашение для получения гостевой визы в РФ. Такие приглашения оформляются от юридического лица, для иностранных граждан собирающихся в Россию, с гостевой целью — встреча с родственниками, частные цели поездки, посещения мест захоронения, лечение и консультации в мед. учереждениях. Наша компания оформляет гостевые приглашения для получения гостевой визы в Россию.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="ornament-1 mt-5"></div>
</section>
<section id="license" class="section license pt-3 pb-5">
    <h3 class="text-center">{{ $data['license']->title }}</h3>
    <div class="container">
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-4 text-center align-self-center">
                <img src="img/license.jpg" class="img-fluid" alt="Лицензия">
            </div>
            <div class="col-lg-4">
                <img src="img/license.jpg" class="img-fluid" alt="Лицензия">
            </div>
            <div class="col-lg-4">
                <img src="img/license.jpg" class="img-fluid" alt="Лицензия">
            </div>
        </div>

    </div>

</section>
{{--
<section id="question" class="section question py-5 bg-light">
    <h4 class="text-center mb-4">
            Question? We will answer it and give the best advice!
        </h4>
    <nav class="d-flex justify-content-center">
        <button class="dark__button">Question</button>
        <button class="dark__button">Next</button>
    </nav>
</section> --}} 
@endsection