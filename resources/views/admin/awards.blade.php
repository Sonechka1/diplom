@extends('admin.layoutAdmin')
@section('title', 'Премии')
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
    <div class="container">
        <h3>Список сотрудников</h3>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>Рейтинг</th>
                        <th>Id сотрудника</th>
                        <th>Премия</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($normalizedResults as $result)
                        <tr>
                            <td>{{ $result->Rating }}</td>
                            <td>{{  $result->employee_id }}</td>
                            <td>

                                @php
                                    $bonus = 0;
                                    if ($result->Result >= 0.7 && $result->Result <= 1) {
                                        $bonus = 15;
                                    } elseif ($result->Result >= 0.4 && $result->Result < 0.7) {
                                        $bonus = 10;
                                    } elseif ($result->Result >= 0 && $result->Result < 0.4) {
                                        $bonus = 5;
                                    }
                                @endphp
                                {{ $bonus }}%

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
