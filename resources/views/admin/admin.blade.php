@extends('admin.layoutAdmin')
@section('title', 'Администратор')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Font Awesome CSS -->
    <style>
        .card {
            background-color: #6a0dad; /* Purple color */
            color: white;
        }

        .card-icon {
            font-size: 48px;
        }

        .table {
            margin-top: 20px;
        }
    </style>
    </head>
    <body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-users card-icon"></i>
                        <h5 class="card-title">Все клиенты</h5>
                        <p class="card-text">{{ $totalUsers }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart card-icon"></i>
                        <h5 class="card-title">Все заказы</h5>
                        <p class="card-text">{{ $totalOrders }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-dollar-sign card-icon"></i>
                        <h5 class="card-title">Вся прибыль</h5>
                        <p class="card-text">{{ $totalProfits }} ₽</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3>Список сотрудников</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль id</th>
                        <th>Уволить</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->role_id }}</td>
                            <td>
                                <form action="{{ route('fire.employee', ['userId' => $employee->id]) }}" method="post">
                                    @csrf
                                    <button type="submit">Уволить</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
