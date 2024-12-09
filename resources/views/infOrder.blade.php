@extends('admin.layoutAdmin')
@section('title', 'Заказы')
@section('content')

    <div class="content padding-top-m">

        <div class="container  center ">
            <h3 class="padding-bottom-m ">Информация о заказах</h3>
            <div class="input-group rounded padding-bottom-m">
                <form style="width:80%; display:flex;" action="/servis.infOrder/search" method="GET">
                    <input type="search" class="form-control rounded" name="search"
                           placeholder="Поиск по №заказа, имени или почте" aria-label="Search"
                           aria-describedby="search-addon">
                    <button class="input-group-text border-0" type="submit">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </form>

            </div>
            <div class="container" style="display: flex; gap: 10px; justify-content: center; margin-bottom: 15px;">
                @foreach ($orders as $order)
                    @if ($order->status_id != 4)
                        <!-- Проверка статуса на выполнен -->
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-subtitle"> № {{ $order->id }} </h5>
                                <h6 class=" card-title mb-2 text-body-secondary">Статус: @if($order->status_id == 1)
                                        оформлен
                                    @elseif($order->status_id == 2)
                                        принят
                                    @elseif($order->status_id == 3)
                                        в обработке
                                    @elseif($order->status_id == 4)
                                        выполнен
                                    @elseif($order->status_id == 5)
                                        в доставке
                                    @endif</h6>
                                <p class="card-text">Почта: {{ $order->email }}</p>
                                <a href="#" class="card-link"> @if(Auth::user()->isEmployee())
                                        <td>
                                            <form action="{{ route('changeStatus', $order->id) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <select name="status_id">
                                                    <option>@if($order->status_id == 1)
                                                            Оформлен
                                                        @elseif($order->status_id == 2)
                                                            Принят
                                                        @endif</option>
                                                    <option value="2">Принят</option>
                                                    <!-- Добавьте другие варианты здесь -->
                                                </select>
                                                <button class="btn btn-outline-info" type="submit">Изменить статус
                                                </button>
                                            </form>
                                        </td>
                                    @endif</a>
                                <br>
                                <p>Сотрудник приянвший заказ: {{ $order->employee_id }} </p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>


            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Номер заказа</th>
                    <th scope="col">Cтатус</th>
                    <th scope="col">Начальная точка</th>
                    <th scope="col">Текущая точка</th>
                    <th scope="col">Конечная точка</th>
                    <th scope="col">Дистанция</th>
                    <th scope="col">Вес</th>
                    <th scope="col">Цена</th>
                    <th scope="col">Дата отгрузки</th>
                    <th scope="col">Дата доставки</th>
                    <th scope="col">Дата создания заказа</th>
                    <th scope="col">Фио заказчика</th>
                    <th scope="col">Телефон</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    @foreach ($orderStruktures as $orderStructure)
                        <td>{{ $orderStructure->order_id }}</td>
                        <td> @if($orderStructure->order->status_id == 1)
                                оформлен
                            @elseif($orderStructure->order->status_id == 2)
                                принят
                            @elseif($orderStructure->order->status_id == 3)
                                в обработке
                            @elseif($orderStructure->order->status_id == 5)
                                в доставке
                            @elseif($orderStructure->order->status_id == 4)
                                <h6 style="color: #4CAF50">выполнен</h6>
                            @endif

                        </td>
                        <td>{{ $orderStructure->startPoint }}</td>
                        <td>{{ $orderStructure->currentLocation }}</td>
                        <td>{{ $orderStructure->endPoint }}</td>
                        <td>{{ $orderStructure->distance }}</td>
                        <td>{{ $orderStructure->weight }}</td>
                        <td>{{ $orderStructure->cost }}</td>
                        <td>{{ $orderStructure->shippingDate }}</td>
                        <td>{{ $orderStructure->arrivalDate }}</td>
                        <td>{{ $orderStructure->date }}</td>
                        <td>{{ $orderStructure->fullName }}</td>
                        <td>{{ $orderStructure->phone }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>
    </div>

@endsection
