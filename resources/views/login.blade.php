@extends('layout')
@section('title', 'Вход')
@section('content')
    <div class="content-avtorization" style="
    background-color: #8f8c8ca1;
">
        <div class="avtorization centr margin-top-m " style="padding-bottom: 35px;">
            <h1 class="padding-top-m" style="color: #fff;">АВТОРИЗАЦИЯ</h1>
            <!-- ФОРМА АВТОРИЗАЦИИ -->
            <form class="decor" method="POST" novalidate action="{{ route('login') }}">
                @csrf
                <div class="form-left-decoration"></div>
                <div class="form-right-decoration"></div>
                <div class="circle"></div>
                <div class="form-inner">

                    <input class="form-inner {{$errors->has('email')?'error':''}} " type="text"
                           placeholder="Введите email" name="email" required>
                    @error('email')
                    <span class="error-message">{{$message}}</span>
                    <br>
                    @enderror
                    <input class="form-inner {{$errors->has('password')?'error':''}} " type="password"
                           placeholder="Введите пароль" name="password" required>
                    @error('email')
                    <span class="error-message">{{$message}}</span>
                    <br>
                    @enderror
                    <button class="btn btn-success" style="background-color: #5d2a77; border-color: #5d2a77;" type=" submit
                    ">Войти
                    </button>
                    <br><br>
                    <span class="psw">Нет<a href="{{route('register')}}"> аккаунта?</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
