@extends('admin.layoutAdmin')
@section('title', 'Администратор')
@section('content')

    <div class="container center">
        <h3 style="margin: 15px;">Список клиентов </h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Номер телефона</th>
                <th scope="col">Почта</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)

                <th scope="row">{{ $user->id }}</th>
                <th scope="row">{{ $user->name }}</th>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email}}</td>


                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

@endsection
