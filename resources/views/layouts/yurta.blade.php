<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="описание">
    <meta name="keywords" content="ключевые слова">
    <meta name="author" content="автор">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/yurta.css">
    <title>Yurta</title>
</head>
<body>
<div class="app">
    <header class="fixed-top header" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-none py-1">
                <a class="navbar-brand" href="#">
                    <img src="img/yurta-logo.png" width="75" alt="Yurta">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-top ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Сервисы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Работа</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Трансферы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Страхование</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Лицензия</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('content', View::make('landing'))
    <footer class="footer section">
        <h4 class="text-center footer__title">Subscribe to our newsletter</h4>
        <div class="d-table mx-auto text-center">
            <form class="d-block my-5">
                <div class="row no-gutters">
                    <div class="col-7">
                        <input type="text" placeholder="Your email address">
                    </div>
                    <div class="col-5">
                        <button class="green__button">Subscribe now</button>
                    </div>
                </div>
            </form>
            <p>Subscribe nowf you want to recieve updates and new via email.</p>
            <p>Don't worry, it won't happen often.</p>
        </div>
        <!-- Line -->
        <nav class="footer__nav-social d-table mx-auto">
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
                    <span class="text-white">&copy; 2019 Yurta. All rights reserved. </span>
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
<script src="js/yurta.js"></script>

</body>
</html>