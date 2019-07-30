@extends('layouts.login')

@section('content')
<div class="row d-flex align-items-stretch">
    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
        <div class="slide-content bg-1">
        </div>
    </div>
    <div class="col-12 col-md-8 h-100 bg-white">
        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
            <div class="nav-get-started">
                <p>У Вас нет аккаунта?</p>
                <a class="btn get-started-btn" href="register-2.html">Начать</a>
            </div>
            <form action="/yurtaboard/login" method="post">
                <h3 class="mr-auto">Добро пожаловать! Давайте начнем</h3>
                <p class="mb-5 mr-auto">Введите свои данные ниже</p>
                {{ csrf_field() }}
                @if(\Illuminate\Support\Facades\Session::has('error_admin'))
                    <div class="alert alert-danger" role="alert">
                        {{\Illuminate\Support\Facades\Session::get('error_admin')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-user"></i></span>
                        </div>
                        <input type="text" class="form-control" name="login" placeholder="Логин">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Пароль">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary submit-btn" type="submit">ВОЙТИ</button>
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

<?php
    if (\Illuminate\Support\Facades\Session::has('error_admin')) {
        \Illuminate\Support\Facades\Session::forget('error_admin');
    }
    ?>
