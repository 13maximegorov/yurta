@extends('layouts.login')

@section('content')
<div class="row d-flex align-items-stretch">
    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
        <div class="slide-content bg-2">
        </div>
    </div>
    <div class="col-12 col-md-8 h-100 bg-white">
        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
            <div class="nav-get-started">
                <p>У Вас уже есть аккаунт?</p>
                <a class="btn get-started-btn" href="login-2.html">Войти</a>
            </div>
            <form action="#">
                <h3 class="mr-auto">Регистрация</h3>
                <p class="mb-5 mr-auto">Введите ваши данные</p>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Логин">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Пароль">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Повторите пароль">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary submit-btn">ВОЙТИ</button>
                </div>
                <div class="wrapper mt-5 text-gray">
                    <p class="footer-text">Copyright © 2019</p>
                    <!--<ul class="auth-footer text-gray">-->
                    <!--<li><a href="#">Terms & Conditions</a></li>-->
                    <!--<li><a href="#">Cookie Policy</a></li>-->
                    <!--</ul>-->
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection
