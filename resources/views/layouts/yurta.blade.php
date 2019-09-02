<?php
    $settings = config('site');
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $settings['site.meta.desc'] }}">
    <meta name="keywords" content="{{ $settings['site.meta.key'] }}">
    <meta name="author" content="{{ $settings['site.meta.author'] }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="yurta-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/zoom.css">
    <link rel="stylesheet" href="css/yurta.css">
    <title>{{ $settings['site.title'] }}</title>
</head>

<body>
    <div class="app">
        @include('layouts.header')
        @yield('content', View::make('landing'))
        <!-- Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">


                    <div class="modal-body">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <footer class="footer section pt-3" id="contacts">
            <h3 class="text-center">Контакты</h3>
            <section class="contact-section bg-black mt-3">
                <div class="container">
                    <h4 class="mb-4">Консультация специалиста</h4>
                    <div class="row justify-content-between">

                        <div class="col-md-8 mr-auto">
                            @component('components.feedback') @endcomponent
                        </div>
                        <div class="col-md-4">
                            <div class="row row-contacts">
                                {{-- <div class="col-md-4 mb-3 mb-md-0">
                                        <div class="card py-4 h-100">
                                            <div class="card-body text-center">
                                                <i class="fas fa-map-marked-alt color__green text-primary mb-2"></i>
                                                <h4 class="text-uppercase m-0">Адрес</h4>
                                                <hr class="my-4">
                                                <div class="small text-black-50">
                                                    Уфа, ул. Ленина, 11
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                <div class="col-md-12 mb-3">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-envelope color__green text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Email</h4>
                                            <div class="small text-black-50">
                                                <a href="mailto:yurta-ufa@mail.ru" class="text-dark">
                                                    yurta-ufa@mail.ru
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fas fa-mobile-alt color__green text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Телефон</h4>
                                            <div class="small text-black-50">
                                                +7 927 932 99 90, +7 917 422 96 10
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="card py-4 h-100">
                                        <div class="card-body text-center">
                                            <i class="fab fa-instagram color__green text-primary mb-2"></i>
                                            <h4 class="text-uppercase m-0">Instagram</h4>
                                            <div class="small text-black-50">
                                                <a href="https://www.instagram.com/yurta_medical_group"
                                                    target="_blank">@yurta_medical_group</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <nav class="footer__nav-social d-table mx-auto mt-5">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-vk"></i>
            </a>
        </nav> --}}
            <div class="bg-light d-block mt-5 pt-4 pb-3">
                <p class="text-dark text-center">{{ $settings['site.footer'] }} &copy; 2019</p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/zoom.js"></script>
    <script src="js/yurta.js"></script>

</body>

</html>