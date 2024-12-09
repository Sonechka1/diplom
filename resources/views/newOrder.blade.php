@extends('layout')
@section('title', 'Новый заказ')
@section('content')
    <div class="content margin-bottom-m padding-top-m">
        <h2 style="text-align: center;" class=" margin-bottom-m">Оформление нового заказа</h2><br>
        <br>


        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="post" action="{{ route('newOrder') }}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Фио"/>

                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" name="startPoint" id="startPoint" class="form-control"
                           placeholder="Начальная точка"/>

                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" name="endPoint" id="endPoint" class="form-control"
                           placeholder="Конечная точка"/>

                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="form6Example5" class="form-control" placeholder="Почта"/>

                </div>

                <!-- Number input -->
                <div class="form-outline mb-4">
                    <input type="text" name="phone" id="form6Example6" class="form-control" placeholder="Телефон"/>

                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="weight" id="weight" class="form-control"
                                   placeholder="Вес товара (кг)"/>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="date" name="shippingDate" id="shippingDate" class="form-control"/>
                            <br>
                            <label class="form-label" for="form6Example2">Дата отгрузки</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="date" name="arrivalDate" id="arrivalDate" class="form-control"/>
                            <br>
                            <label class="form-label" for="form6Example2">Дата доставки</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="distance" id="form6Example2" class="form-control"/>
                            <br>
                            <label class="form-label" for="form6Example2">Расстояние в км</label>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Оформить заказ</button>
            </form>


        </div>

    </div>

@endsection
