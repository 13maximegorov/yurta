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
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
{{--                                <img src="https://via.placeholder.com/39x39" alt="profile"/>--}}
                                <i class="icon-people"></i>
                                @if (\Illuminate\Support\Facades\Auth::check())
                                <span class="nav-profile-name">{{\Illuminate\Support\Facades\Auth::user()->login}}</span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown pb-0 down_exit" aria-labelledby="profileDropdown">
                                <div class="dropdown-divider"></div>
                                <a href="/yurtaboard/logout" class="dropdown-item">
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
                    <li class="nav-item" id="yurtaindex">
                        <a href="/yurtaboard/" class="nav-link"><i class="link-icon icon-screen-desktop"></i><span class="menu-title">Главная</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/cards" class="nav-link"><i class="link-icon icon-book-open"></i><span class="menu-title">Галерея</span><i class="menu-title"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/sections" class="nav-link"><i class="link-icon icon-note"></i><span class="menu-title">Секции</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/settings" class="nav-link"><i class="link-icon icon-settings"></i><span class="menu-title">Настройки</span></a>
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
