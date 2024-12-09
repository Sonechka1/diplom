@extends('admin.layoutAdmin')
@section('title', 'Добавить сотрудника')
@section('content')

    <div class="container"
         style="margin-top: 150px; border: solid 1px #231E20; color: #231E20; border-radius: 10px; padding: 35px;">
        <form method="POST" action="{{ route('add_employee') }}" style="  ">
            @csrf
            <h2 class="center">Добавить сотрудника </h2>
            <div class="mb-3">

                <input type="text" class="form-control" name="email" id="email" placeholder="Логин" required>
                @error('password')
                <div style="width: 500px; color: red">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Имя" required>
                @error('name')
                <div style="width: 500px; color: red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон"
                       required>
                @error('phone')
                <div style="width: 500px; color: red">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Пароль"
                       required>
                @error('password')
                <div style="width: 500px; color: red">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                       placeholder="Повторите пароль"
                       required>
                @error('password_confirmation')
                <span class="error-message">{{$message}}</span>
                <br>
                @enderror
            </div>
            <div class="mb-3">

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

            </div>
            <br>

            <button type="submit" class="btn btn-outline-success" style=" color: #231E20; ">Добавить
            </button>
        </form>

    </div>
    </div>

@endsection
