@extends('admin.layoutAdmin')
@section('title', 'Администратор')
@section('content')

    <div class="container center">
        <br>
        <h3>Отчет по выполненным заказам</h3>

        <br>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Id сотрудника</th>
                    <th scope="col">Дата выполнения</th>
                </tr>
                </thead>
                <tbody>
                @foreach($completedOrders as $order)
                    <tr>
                        <th scope="row">{{ $order->id  }}</th>
                        <td>@if($order->status_id == 4)
                                Выполнен
                            @endif</td>
                        <td>{{  $order->employee_id  }}</td>
                        <td>{{ $order->date_completion }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>

@endsection
