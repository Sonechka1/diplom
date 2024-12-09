@extends('layout')

@section('title', 'Регистрация')
@section('content')
    <div class="content-registr " style="background-color: #b7b7b766;">
        <div class="registratia centr padding-top-m " style="padding-bottom: 35px;">
            <h1>РЕГИСТРАЦИЯ</h1>
            <!-- ФОРМА РЕГИСТРАЦИИ -->
            <form class="decor margin-bottom-l " method="POST" novalidate action="{{ route('register') }}">
                @csrf
                <div class="form-left-decoration"></div>
                <div class="form-right-decoration"></div>
                <div class="circle"></div>
                <div class="form-inner padding-bottom-m">
                    <input class="form-inner {{$errors->has('name')?'error':''}} " type="text" placeholder="Введите Имя"
                           name="name" required>
                    @error('name')

                    <span class="error-message">{{$message}}</span>
                    <br>
                    @enderror

                    <input class="form-inner {{$errors->has('email')?'error':''}} " type="text"
                           placeholder="Введите E-mail" name="email" required>
                    @error('email')
                    <span class="error-message {{$errors->has('email')?'error':''}} ">{{$message}}</span>
                    <br>
                    @enderror

                    <input class="form-inner {{$errors->has('phone')?'error':''}} " type="text"
                           placeholder="Введите номер телефона" name="phone" required>
                    @error('phone')
                    <span class="error-message {{$errors->has('phone')?'error':''}} ">{{$message}}</span>
                    <br>
                    @enderror


                    <input class="form-inner {{$errors->has('password')?'error':''}} " type="text"
                           placeholder="Введите пароль" name="password" required>
                    @error('password')
                    <span class="error-message">{{$message}}</span>
                    <br>
                    @enderror
                    <input class="form-inner {{$errors->has('password_confirmation')?'error':''}} " type="text"
                           placeholder="Введите пароль" name="password_confirmation" required>
                    @error('password_confirmation')
                    <span class="error-message">{{$message}}</span>
                    <br>
                    @enderror
                    <!-- <input type="text" placeholder="Введите Имя" name="fname" required>
						<input type="text" placeholder="Введите Фамилию" name="lname" required>
						<input type="text" placeholder="Введите Отчество" name="otch" >
						<input type="text" placeholder="Введите Город" name="city" required>
						<input type="text" placeholder="Введите Адрес" name="adress" >
						<input type="text" placeholder="Введите номер телефона" name="number" required> -->


                    <button class="btn btn-success" style="background-color: #5d2a77; border-color: #5d2a77;

" type="submit">Зарегистрироваться
                    </button>
                    <br><br>
                    <span class="psw">Есть<a href="{{route('login')}}"> аккаунт?</a></span>
                </div>
            </form>

        </div>
    </div>

@endsection
