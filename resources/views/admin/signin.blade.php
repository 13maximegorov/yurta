@extends('layouts.login')

@section('content')
<div class="row d-flex align-items-stretch">
    <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
        <div class="slide-content bg-1">
        <div style="background: rgba(0, 0, 0, 0.2); height: 100%; width: 100%">
            <a class="navbar-brand mx-5 my-5" href="/">
                <img src="/img/yurta-logo.png" width="100" alt="Yurta">
            </a>
        </div>
        </div>
    </div>
    <div class="col-12 col-md-8 h-100 bg-white">
        <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
            <form action="/yurtaboard/login" method="post">
                <h3 class="mr-auto mb-4">Авторизация</h3>
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
