@extends('admin.layoutAdmin')
@section('title', 'Заказы')
@section('content')
    <div class="container" style="text-align: center;">
        <h3>Текущие заказы сотрудника</h3>
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">№</th>

                    <th scope="col">Начальная точка</th>
                    <th scope="col">Конечная точка</th>
                    <th scope="col">Текущая местоположение</th>
                    <th scope="col">Статус</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($acceptedOrders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>
                            @if ($order->orderStructure && $order->orderStructure->startPoint)
                                {{ $order->orderStructure->startPoint }}
                            @else
                                No related data
                            @endif
                        </td>
                        <td>
                            @if ($order->orderStructure && $order->orderStructure->endPoint)
                                {{ $order->orderStructure->endPoint }}
                            @else
                                No related data
                        @endif


                        <td>
                            <form action="{{ route('orders.updateLocation', $order->id) }}" method="POST">
                                @csrf
                                @method('POST')

                                <input type="text" id="currentLocation" name="currentLocation"

                                       value="{{ $order->currentLocation }}">
                                <button class="btn btn-outline-success" type="submit">Изменить местоположение</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('changeStatus', $order->id),  }}"
                                  value="{{ $order->id }}"
                                  method="POST">
                                @csrf
                                @method('POST')
                                <select name="status_id">
                                    <option selected>...</option>
                                    <option value="2">Принят</option>
                                    <option value="3">В обработке</option>
                                    <option value="5">В доставке</option>
                                    <option value="4">Выполнен</option>


                                    <!-- Добавьте другие варианты здесь -->
                                </select>
                                <button class="btn btn-outline-info" type="submit">Изменить статус</button>
                            </form>
                        </td>


                        <td>{{ $order->message }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection
