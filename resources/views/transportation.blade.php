@extends('admin.layoutAdmin')
@section('title', 'Перевозки')
@section('content')

    <div class="content padding-top-m">

        <div class="container  ">
            <h3 class="padding-bottom-m">Информация о Перевозках</h3>
            <div class="input-group rounded padding-bottom-m">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

            </div>


            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">№</th>

                        <th scope="col">Начальная точка</th>
                        <th scope="col">Конечная точка</th>
                        <th scope="col">Текущая местоположение</th>
                        <th scope="col">Статус</th>
                        <th scope="col">Сообщение</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->number }}</th>

                            <td>{{ $order->orderStructure->startPoint }}</td>

                            <td>{{ $order->orderStructure->endPoint }}</td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('POST')

                                    <input type="text" id="currentLocation" name="currentLocation"
                                           value="{{ $order->orderStructure->currentLocation }}">
                                    <button class="btn btn-outline-success" type="submit">Изменить местоположение
                                    </button>
                                </form>
                            </td>
                            <td>
                            <th scope="col">
                                <form action="{{ route('changeStatus', $order->id),  }}"
                                      value="{{ $order->id }}"
                                      method="POST">
                                    @csrf
                                    @method('POST')
                                    <select name="status_id">
                                        <option selected>...</option>
                                        <option value="2">Принят</option>
                                        <option value="3">В обработке</option>
                                        <option value="4">Выполнен</option>


                                        <!-- Добавьте другие варианты здесь -->
                                    </select>
                                    <button class="btn btn-outline-info" type="submit">Изменить статус</button>
                                </form>
                            </th>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>


        </div>

    </div>
    </div>

@endsection
