@extends('layout')
@section('title', 'Заказ создан')
@section('content')
    <div class="container margin-bottom-xl margin-top-xl center ">


        <div class="card center">
            <div class="card-header">Успешно!</div>
            <div class="card-body">
                <h5 class="card-title">Ваш заказ создан</h5>
                <p class="card-text">Рассчитанная стоимость перевозки: {{ $order->cost }} рублей</p>
                <a href="{{ route('PersanalCab') }}" class="btn btn-primary">Открыть личный кабинет</a>
            </div>
        </div>

    </div>

@endsection
