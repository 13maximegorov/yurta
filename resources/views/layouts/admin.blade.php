<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin1/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="/admin1/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin1/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin1/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin1/css/style.css">
    <link rel="stylesheet" href="/admin1/css/style1.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin1/images/favicon.png" />
</head>

<body>
<div class="container-scroller">
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
        <div class="nav-top flex-grow-1">
            <div class="container d-flex flex-row h-100 align-items-center">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="/admin1/images/logo.svg" alt="logo"/></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin1/images/logo-mini.svg" alt="logo"/></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-envelope mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <div class="dropdown-item">
                                    <p class="mb-0 font-weight-normal float-left">У Вас 7 непрочитанных писем
                                    </p>
                                    <span class="badge badge-info badge-pill float-right">Просмотреть все</span>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium">Василий Корешкин
                                            <span class="float-right font-weight-light small-text">1 минуту назад</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            Встреча отменена
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium">Петр-маркетинг
                                            <span class="float-right font-weight-light small-text">15 минут назад</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            Запускаем новый продукт
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="https://via.placeholder.com/36x36" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow">
                                        <h6 class="preview-subject ellipsis font-weight-medium">Иван-директор
                                            <span class="float-right font-weight-light small-text">18 минут назад</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            Предстоит заседание правления
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">У Вас 4 новых уведомления
                                    </p>
                                    <span class="badge badge-pill badge-info float-right">Просмотреть все</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="icon-exclamation mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">Ошибка приложения</h6>
                                        <p class="font-weight-light small-text mb-0">
                                            прямо сейчас
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="icon-bubble mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">Настройки</h6>
                                        <p class="font-weight-light small-text mb-0">
                                            Личное сообщение
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="icon-user-following mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">Регистрация нового пользователя</h6>
                                        <p class="font-weight-light small-text mb-0">
                                            2 дня назад
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="https://via.placeholder.com/39x39" alt="profile"/>
                                <span class="nav-profile-name">Александр Александрович</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="icon-settings text-primary mr-2"></i>
                                    Настройки
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item">
                                    <i class="icon-logout text-primary mr-2"></i>
                                    Выход
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="icon-menu text-dark"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="nav-bottom">
            <div class="container">
                <ul class="nav page-navigation">
                    <li class="nav-item">
                        <a href="/yurtaboard/" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Главная</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/cards" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Карточки</span><i class="menu-arrow"></i></a>
                        <div class="submenu">
                            <ul class="submenu-item">
                                <li class="nav-item"><a class="nav-link" href="/yurtaboard/cards">Просмотр</a></li>
                                <li class="nav-item"><a class="nav-link" href="/yurtaboard/cards/add">Добавление</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/news_removal.html">Удаление</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
    @yield('content')

        <footer class="footer">
            <div class="w-100 clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019</span>
            </div>
        </footer>
    </div>

</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/admin1/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin1/vendors/js/vendor.bundle.addons.js"></script>
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/admin1/js/dashboard.js"></script>
<script src="/admin1/js/template.js"></script>
<script src="/admin1/js/todolist.js"></script>
<script src="/admin1/js/dropify.js"></script>
{{--<script src="/admin1/js/data-table.js"></script>--}}
{{--<script src="/admin1/js/db.js"></script>--}}
{{--<script src="/admin1/js/db2.js"></script>--}}
{{--<script src="/admin1/js/file-upload.js"></script>--}}
{{--<script src="/admin1/js/js-grid.js"></script>--}}
{{--<script src="/admin1/js/js-grid2.js"></script>--}}
{{--<script src="/admin1/js/select2.js"></script>--}}
{{--<script src="/admin1/js/typeahead.js"></script>--}}

<!-- End custom js for this page-->
</body>

</html>
