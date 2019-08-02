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
            <span class="d-block text-center">clever treatment</span>

            <div class="gallery">
                <div>
                    <div class="row mt-5">
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
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row mt-5">
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
                        </div>
                    </div>
                </div>
            </div>

            <p>Especially for large enterprices, groups for people, "YURTA" organizes on-site medical <br />examenations and treatment in Russia</p>
            <span class="d-block text-center">All services are licensed</span>
        </div>
    </section>
    <section id="visa" class="section visa pt-5">
        <h3 class="text-center">Visa</h3>
        <span class="d-block text-center">Registration of tourist and guest visas in more than 150 countries.</span>
        <div class="d-table mx-auto w-75 text-center">
            <p>If you go into the terminology, then the visa is a document that allows foreigners to enter the territory of the state. Most often the visa is pasted into the passport in the Form of a coupon. Sometimes they are put in the form of seals. Visas are issued by the consulate or embassy of the country, in which you intend to go. There are also special accredited centers. Naturally, the design of this document is worth the money.</p>
            <a href="#" class="white__button border d-inline-block my-5">More info</a>
        </div>
        <div class="ornament-1 mt-5"></div>
    </section>
    <section id="tours" class="section">
        <h3 class="text-center py-5">Recent tours</h3>
        <div class="tours">
            <div class="tour">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <span class="d-block tour__title">Tour of treatment in Russia</span>
                        <p class="mb-4 tour__text">
                            We provide you with a package of services of treatment in Russia.
                        </p>

                        <p class="tour__text mb-5">
                            This is not only the constant walking around the polyclinics, but also<br /> an interesting plot of the Russian region, natural sources that give <br />yout strength.
                        </p>

                        <button class="tour__btn transparent__button">More tours</button>
                        <button class="tour__btn white__button">Request Quote</button>

                    </div>
                </div>
            </div>
            <div class="tour">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <span class="d-block tour__title">Tour of treatment in Russia</span>
                        <p class="mb-4 tour__text">
                            We provide you with a package of services of treatment in Russia.
                        </p>

                        <p class="tour__text mb-5">
                            This is not only the constant walking around the polyclinics, but also<br /> an interesting plot of the Russian region, natural sources that give <br />yout strength.
                        </p>

                        <button class="tour__btn transparent__button">More tours</button>
                        <button class="tour__btn white__button">Request Quote</button>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="work" class="section work py-5">
        <h3 class="text-center color__dark">We work with the best medical companies</h3>
        <div class="container">
            <div class="multiple-items">
                <div class="mx-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.sdasmile.com/wp-content/uploads/2017/03/featured-articles-img.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="mi-text">
                                <h5>STOMATOLOGY "DELUXE"</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum eaque excepturi tenetur, eos autem harum accusantium perferendis consequuntur minima laudantium veniam dicta molestiae voluptatem quisquam ipsam totam quia ullam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.sdasmile.com/wp-content/uploads/2017/03/featured-articles-img.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="mi-text">
                                <h5>STOMATOLOGY "DELUXE"</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum eaque excepturi tenetur, eos autem harum accusantium perferendis consequuntur minima laudantium veniam dicta molestiae voluptatem quisquam ipsam totam quia ullam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.sdasmile.com/wp-content/uploads/2017/03/featured-articles-img.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="mi-text">
                                <h5>STOMATOLOGY "DELUXE"</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum eaque excepturi tenetur, eos autem harum accusantium perferendis consequuntur minima laudantium veniam dicta molestiae voluptatem quisquam ipsam totam quia ullam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.sdasmile.com/wp-content/uploads/2017/03/featured-articles-img.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="mi-text">
                                <h5>STOMATOLOGY "DELUXE"</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio cum eaque excepturi tenetur, eos autem harum accusantium perferendis consequuntur minima laudantium veniam dicta molestiae voluptatem quisquam ipsam totam quia ullam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-table mx-auto text-center">
            <h3>The perfect tour for you</h3>
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
