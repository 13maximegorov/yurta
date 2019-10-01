<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Панель управления</title>
    <link rel="stylesheet" href="/admin1/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="/admin1/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin1/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin1/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/admin1/css/style.css">
    <link rel="stylesheet" href="/admin1/css/style1.css">
    <link rel="shortcut icon" href="../yurta-favicon.png" type="image/x-icon">
    <script src="https://cdn.tiny.cloud/1/cgncyve30m4opfemkpohj7zwcesdgq8veq7mxhk6tx902iku/tinymce/5/tinymce.min.js"></script>
</head>

<body>
<div class="container-scroller">
    <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
        <div class="nav-top flex-grow-1">
            <div class="container d-flex flex-row h-100 align-items-center">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center">
                    <a class="navbar-brand brand-logo text-dark" href="/yurtaboard">
                        Панель управления
                    </a>
                    <a class="navbar-brand brand-logo-mini text-dark" href="/yurtaboard">
                        Панель управления
                    </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
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
                    <li class="nav-item">
                        <a href="/yurtaboard/feedback" class="nav-link">
                            <span class="menu-title">Заявки</span>
                        </a>
                    </li>
                    <li class="nav-item" id="yurtaindex">
                        <a href="/yurtaboard" class="nav-link">
                            <span class="menu-title">Карточки</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/sections" class="nav-link">
                            <span class="menu-title">Секции</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/nav" class="nav-link">
                            <span class="menu-title">Навигация</span>
                            <i class="menu-title"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/service" class="nav-link">
                            <span class="menu-title">Услуги</span>
                            <i class="menu-title"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/yurtaboard/settings" class="nav-link">
                            <span class="menu-title">Настройки</span>
                        </a>
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
<script src="/admin1/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin1/vendors/js/vendor.bundle.addons.js"></script>
<script src="/admin1/js/dashboard.js"></script>
<script src="/admin1/js/template.js"></script>
<script src="/admin1/js/todolist.js"></script>
<script src="/admin1/js/dropify.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
    fullPage: true,
	allowContent: 'a[!href]; ul; div; li{text-align}(someclass); link'
  };
  tinymce.init({
   selector: 'textarea',
   plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste tinycomments tinydrive tinymcespellchecker',
   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen',
   toolbar_drawer: 'floating',
   //menubar: "file",
   tinycomments_mode: 'embedded',
   tinycomments_author: 'Author name'
});
</script>

</body>
</html>
