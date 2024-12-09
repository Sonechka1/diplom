@extends('layout')
@section('title', 'Личный кабинет')
@section('content')

    <div class="content margin-bottom-m padding-top-m">
        <div class="flex-container" style="display: flex;">


            <div class="container col-3" style="margin: 10px; border-radius: 15px;">
                <nav class="nav flex-column">
                    <a class="nav-link active" aria-current="page" href="#" style="border-radius: 10px;">Основная
                        информация</a>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#id_search_cargo">Где мой груз?</a>

                    <a class="nav-link" href="{{route('newOrder')}}">Создать заказ</a>
                    <a class=" nav-link" data-bs-toggle="modal" data-bs-target="#id_myOrders">Мои заказы</a>

                </nav>
            </div>


            <div class="container margin-bottom-m">

                <h2 class=" margin-bottom-m">Здравствуйте {{ $showuser->name }}!</h2>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Эл. адрес</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                               value="{{ $showuser->email }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Номер телефона</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                               value="{{ $showuser->phone }}">
                    </div>
                </div>


                @if(Auth::user()->isAdmin())
                    <a href="{{route('admin')}}" class="btn btn btn-outline-primary mb-3 ">Перейти в админ-панель</a>

                    <br>

                @elseif(Auth::user()->isEmployee())
                    <a href="{{route('infOrder')}}" style="float:left" class="btn btn btn-outline-primary mb-3 ">Перейти
                        в панель управления сотрудника </a> <br>
                @endif
                <div class="but" style="max-width: 300px; float: right; display:flex; gap:5px; align-items:center;">
                    <a href="{{route('logout')}}" class="btn btn btn-outline-danger mb-3 ">Выйти</a>
                </div>


            </div>
            <!-- ///////////////////////////// -->
            <!-- МОДАЛЬНОЕ ОКНО id_search_cargo -->
            <div class="modal fade" style="color: #333;" id="id_search_cargo" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Где мой груз?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                       placeholder="Введите № заказа">
                                <label for="floatingInput">Номер заказа</label>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" type="submit" class="btn btn-primary">Искать</button>
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <!-- МОДАЛЬНОЕ ОКНО MyOrders -->
            <div class="modal fade" style="color: #333;" id="id_myOrders" tabindex="-1"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Мои Заказы</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Номер</th>
                                    <th scope="col">Статус</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td style="color:#000;">
                                            @if($order->status_id == 1)
                                                <span class="badge bg-success  text-dark">оформлен</span>
                                            @elseif($order->status_id == 2)
                                                <span class="badge bg-success text-dark">принят</span>
                                            @elseif($order->status_id == 3)
                                                <span class="badge bg-warning text-dark">в обработке</span>
                                            @elseif($order->status_id == 4)
                                                <span class="badge bg-primary text-dark">выполнен</span>
                                            @elseif($order->status_id == 5)
                                                <span class="badge bg-primary text-dark">В доставке</span>
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('order.show', $order->id) }}" class="btn btn-primary">Подробнее</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <br>
                            <br>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                            </button>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
