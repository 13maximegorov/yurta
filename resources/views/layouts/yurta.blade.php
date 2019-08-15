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
    <link rel="shortcut icon" href="yurta-favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/zoom.css">
    <link rel="stylesheet" href="css/yurta.css">
    <title>{{ $settings['site.title'] }}</title>
</head>
<body>
<div class="app">
    @include('layouts.header')
    @yield('content', View::make('landing'))
    <footer class="footer section pt-5" id="contacts">
        <h3 class="text-center">Как с нами связаться?</h3>
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
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
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope color__green text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                            <a href="mailto:" class="text-dark">hello@yurta.ru</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt color__green text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Телефон</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">+1 (555) 902-8832</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="footer__nav-social d-table mx-auto mt-5">
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-vk"></i>
            </a>
        </nav>
        <div class="footer__bg">
            <div class="footer__section">
                <div class="container">
                    <span class="text-white">&copy; 2019 {{ $settings['site.footer'] }} </span>
                </div>
            </div>
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
