@php use App\Models\Delivery; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=b3bfb125-34e0-4a05-bbe9-d8931e35e2a7&lang=ru_RU"
            type="text/javascript"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .content {
            min-height: calc(100% - 80px); /* 50px - высота футера */
            padding-bottom: 80px; /* 50px - высота футера */
        }

        .footer {
            width: 100%;
            height: 80px; /* Высота футера */
            position: fixed;
            bottom: 0;
            background-color: #333;
            color: #fff;
            text-align: center;
            line-height: 50px;
        }

        body {
            margin-top: 20px;
        }

        .steps {
            border: 1px solid #e7e7e7
        }

        .steps-header {
            padding: .375rem;
            border-bottom: 1px solid #e7e7e7
        }

        .steps-header .progress {
            height: .25rem
        }

        .steps-body {
            display: table;
            table-layout: fixed;
            width: 100%
        }

        .step {
            display: table-cell;
            position: relative;
            padding: 1rem .75rem;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            border-right: 1px dashed #dfdfdf;
            color: rgba(0, 0, 0, 0.65);
            font-weight: 600;
            text-align: center;
            text-decoration: none
        }

        .step:last-child {
            border-right: 0
        }

        .step-indicator {
            display: block;
            position: absolute;
            top: .75rem;
            left: .75rem;
            width: 1.5rem;
            height: 1.5rem;
            border: 1px solid #e7e7e7;
            border-radius: 50%;
            background-color: #fff;
            font-size: .875rem;
            line-height: 1.375rem
        }

        .has-indicator {
            padding-right: 1.5rem;
            padding-left: 2.375rem
        }

        .has-indicator .step-indicator {
            top: 50%;
            margin-top: -.75rem
        }

        .step-icon {
            display: block;
            width: 1.5rem;
            height: 1.5rem;
            margin: 0 auto;
            margin-bottom: .75rem;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            color: #888
        }

        .step:hover {
            color: rgba(0, 0, 0, 0.9);
            text-decoration: none
        }

        .step:hover .step-indicator {
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            border-color: transparent;
            background-color: #f4f4f4
        }

        .step:hover .step-icon {
            color: rgba(0, 0, 0, 0.9)
        }

        .step-active,
        .step-active:hover {
            color: rgba(0, 0, 0, 0.9);
            pointer-events: none;
            cursor: default
        }

        .step-active .step-indicator,
        .step-active:hover .step-indicator {
            border-color: transparent;
            background-color: #5c77fc;
            color: #fff
        }

        .step-active .step-icon,
        .step-active:hover .step-icon {
            color: #5c77fc
        }

        .step-completed .step-indicator,
        .step-completed:hover .step-indicator {
            border-color: transparent;
            background-color: rgba(51, 203, 129, 0.12);
            color: #33cb81;
            line-height: 1.25rem
        }

        .step-completed .step-indicator .feather,
        .step-completed:hover .step-indicator .feather {
            width: .875rem;
            height: .875rem
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
        }

        .text-reset {
            --bs-text-opacity: 1;
            color: inherit !important;
        }

        a {
            color: #5465ff;
            text-decoration: none;
        }
    </style>
    <title>Ваш заказ</title>
</head>

<body>
<header>
    <div class="header-wrap">
        <!-- #header -->
        <div id="header" class="five columns clearfix" style="font-family: 'Monserat', sans-serif;">


            <div id="block-block-4" class="block block-block">

                <a href="index.html" title="Главная" rel="home" id="logo">

                    <div id="site-name" class="element-invisible">

                        <a href="{{route('index')}}" title="Главная" rel="home">ПремиумЛогистикГрупп</a>
                        <img class="logo" src="assets/img/LOGO.png" alt="logo" style="width: 70px;">

                    </div>
            </div>

            <div id="block-block-3" class="block block-block">


                <div class="content">
                    <p class="address-header">

                        Москва <br> ул. Страны Советов 44 А
                    </p>
                </div>
            </div>
            <div id="block-block-2" class="block block-block">


                <div class="content">

                    <p class="header-mail">info@premium-logistics.ru</p>
                    <br>
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Написать письмо
                    </button>

                    <!-- МОДАЛЬНОЕ ОКНО НАПИСАТЬ ПИСЬМО -->
                    <div class="modal fade" style="color: #333;" id="exampleModal" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Написать письмо</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input name="email" type="email" class="form-control" id="floatingInput"
                                                   placeholder="Example@mail.com">
                                            <label for="floatingInput">Почта</label>
                                        </div>
                                        <div class="form-floating">
                                            <input name="message" class="form-control"
                                                   placeholder="Leave a comment here"
                                                   id="floatingTextarea">
                                            <label for="floatingTextarea">Сообщение</label>
                                        </div>
                                        <button type="submit" class="btn btn-success">Отправить</button>
                                    </form>
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
            <div id="block-block-1" class="block block-block">


                <div class="content">
                    <p class="header-phone">8 (800) 700-50-93</p>
                    <br>
                    <!-- Кнопка-триггер модального окна -->
                    <button type="button" class="btn btn-success"
                            style="background-color:#8f8c8c; border-color:#8f8c8c;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Заказать звонок
                    </button>

                    <!-- МОДАЛЬНОЕ ОКНО ПОЗВОНИТЬ НАМ -->
                    <div class="modal fade" style="color: #333;" id="exampleModal2" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Закрыть"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input name="name" type="text" class="form-control" id="floatingInput"
                                                   placeholder="Иванов Иван Иванович">
                                            <label for="floatingInput">Фамилия Имя</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" name="phone" class="form-control" id="floatingInput"
                                                   placeholder="8-(888)-888-88-88">
                                            <label for="floatingInput">Номер телефона</label>
                                        </div>
                                        <button type="submit" class="btn btn-success">Отправить</button>
                                    </form>
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
        </div>


        <!-- /#header -->
    </div><!-- /МЕНЮ-->
    <div class="topnav" id="myTopnav">
        <a href="{{route('index')}}" class="" style="{{Route::is('index')?'background-color:#8f8c8c':''}}">Главная</a>
        <a href="{{route('services')}}" class=""
           style="{{Route::is('services')?'background-color:#8f8c8c':''}}">Услуги</a>
        <a href="{{route('autopark')}}" class=""
           style="{{Route::is('autopark')?'background-color:#8f8c8c':''}}">Автопарк</a>
        <a href="{{route('about')}}" class="" style="{{Route::is('about')?'background-color:#8f8c8c':''}}">О нас</a>
        @if (Auth::check())
            <a href="{{ route('PersanalCab') }}" class=" "
               style="{{Route::is('persanalCab')?'background-color:#8f8c8c':''}}">Личный кабинет</a>
        @else
            <a href="{{ route('login') }}" class=""
               style="{{Route::is('login')?'background-color:#8f8c8c':''}}">Войти</a>
        @endif

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

</header>

<main>
    <div class="container pb-5 mb-sm-4" style="padding-top: 20px;">
        <!-- Details-->
        <div class="row mb-3">
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-dark text-center"><span
                        class="font-weight-semibold mr-2">Дата принятия заказа:</span>@if($order->orderStructure)
                        {{ $order->orderStructure->date }}
                    @else
                        Нет данных
                    @endif
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-dark text-center"><span
                        class="font-weight-semibold mr-2">Статус:</span> @if($order->status_id == 1)
                        оформлен
                    @elseif($order->status_id == 2)
                        принят
                    @elseif($order->status_id == 3)
                        в обработке
                    @elseif($order->status_id == 4)
                        выполнен
                    @else
                        Нет данных
                    @endif
                </div>
            </div>
            <div class="col-sm-4 mb-2">
                <div class="bg-secondary p-4 text-dark text-center"><span class="font-weight-semibold mr-2">Ожидаемая дата доставки:</span>
                    @if($order->orderStructure)
                        {{ $order->orderStructure->arrivalDate }}
                    @else
                        Нет данных
                    @endif
                </div>
            </div>
        </div>
        <!-- Progress-->
        <div class="steps">
            <div class="steps-header">
                <div class="progress">
                    @if($order->status_id == 1)
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="40"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    @elseif($order->status_id == 3)
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    @elseif($order->status_id == 2)
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="40"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    @elseif($order->status_id == 5)
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="40"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    @elseif($order->status_id == 4)
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="40"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    @endif

                </div>
            </div>
            <div class="steps-body">
                <div class="step step-completed">
                    @if($order->status_id == 1 || $order->status_id == 2 || $order->status_id == 3 || $order->status_id == 4|| $order->status_id == 5 )
                        <span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg"
                                                          width="24" height="24"
                                                          viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor"
                                                          stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          class="feather feather-check"><polyline
                                    points="20 6 9 17 4 12"></polyline></svg></span>
                    @endif
                    <span class="step-icon">
                   <svg
                       xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                       class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline
                           points="22 4 12 14.01 9 11.01"></polyline></svg></span>Заказ оформлен
                </div>
                <div class="step step-completed">
                    @if($order->status_id == 3 || $order->status_id == 2 || $order->status_id == 4|| $order->status_id == 5 )

                        <span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg"
                                                          width="24" height="24"
                                                          viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor"
                                                          stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          class="feather feather-check"><polyline
                                    points="20 6 9 17 4 12"></polyline></svg></span>
                    @endif

                    <span class="step-icon"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></span>
                    Заказ в обаботке
                </div>
                <div class="step step-completed">

                    @if( $order->status_id == 2 || $order->status_id == 4|| $order->status_id == 5 )

                        <span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg"
                                                          width="24" height="24"
                                                          viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor"
                                                          stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          class="feather feather-check"><polyline
                                    points="20 6 9 17 4 12"></polyline></svg></span>
                    @endif

                    <span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                 width="24"
                                                 height="24" viewBox="0 0 24 24"
                                                 fill="none"
                                                 stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-award"><circle
                                cx="12"
                                cy="8"
                                r="7"></circle><polyline
                                points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg></span>Заказ принят
                </div>
                <div class="step step-completed">
                    @if( $order->status_id == 5|| $order->status_id == 4 )

                        <span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg"
                                                          width="24" height="24"
                                                          viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor"
                                                          stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          class="feather feather-check"><polyline
                                    points="20 6 9 17 4 12"></polyline></svg></span>
                    @endif


                    <span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-truck"><rect
                                x="1" y="3" width="15" height="13"></rect><polygon
                                points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5"
                                                                                            r="2.5"></circle><circle
                                cx="18.5" cy="18.5" r="2.5"></circle></svg></span>Заказ в доставке
                </div>
                <div class="step step-completed">
                    @if($order->status_id == 4)

                        <span class="step-indicator"><svg xmlns="http://www.w3.org/2000/svg"
                                                          width="24" height="24"
                                                          viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor"
                                                          stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"
                                                          class="feather feather-check"><polyline
                                    points="20 6 9 17 4 12"></polyline></svg></span>
                    @endif

                    <span class="step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-home"><path
                                d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline
                                points="9 22 9 12 15 12 15 22"></polyline></svg></span>Заказ выполнен
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center" style="display: grid; grid-template-columns: repeat(3,auto);">
        <!-- Billing address -->
        <div class=" ">
            <div class="card mb-4">
                <div class="card-body">

                    <address>
                        <strong>
                            @if($order->cost)
                                {{$order->cost }}
                            @else
                                Нет данных
                            @endif

                            ₽
                        </strong><br>
                        <br>
                        Текущее местоположение:<br>
                        @php
                            $deliveries = Delivery::where('order_id', $order->id)->get();
                        @endphp
                        @if($deliveries->isNotEmpty())
                            {{ $deliveries->last()->currentLocation }}
                        @else
                            Нет данных
                        @endif
                        <br>

                    </address>
                </div>
            </div>
        </div>
        <!-- Shipping information -->
        <div class="">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="h6">Общая информация</h3>
                    <strong>Номер</strong>
                    <span><a class="text-decoration-underline" target="_blank">@if($order->orderStructure)
                                {{ $order->orderStructure->order_id }}
                            @else
                                Нет данных
                            @endif</a> <i
                            class="bi bi-box-arrow-up-right"></i> </span>
                    <hr>

                    <address>
                        <strong>
                            @if($order->orderStructure)
                                {{ $order->orderStructure->fullName }}
                            @else
                                Нет данных
                            @endif
                        </strong><br>


                        <abbr title="Phone">P:</abbr>
                        @if($order->orderStructure)
                            {{ $order->orderStructure->phone }}
                        @else
                            Нет данных
                        @endif
                    </address>

                    <p>Начальная точка:
                        @if($order->orderStructure)
                            {{ $order->orderStructure->startPoint }}
                        @else
                            Нет данных
                        @endif</p>

                    <p>Конечная точка:
                        @if($order->orderStructure)
                            {{ $order->orderStructure->endPoint }}
                        @else
                            Нет данных
                        @endif</p>
                    Вес:
                    @if($order->orderStructure)
                        {{ $order->orderStructure->weight }}
                    @else
                        Нет данных
                    @endif кг <br>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class=" ">

                    <!-- Вертикальный список -->
                    <ul class="list-group">
                        <!-- Активные элементы -->

                        <li class="list-group-item " style="background-color: #000; color: #fff; font-weight: bold">
                            Отслеживание заказа
                        </li>
                        @if($deliveries->count() > 1)
                            @foreach($deliveries as $index => $item)
                                @if($deliveries->last()->id != $item->id )
                                    <li class="list-group-item" style="color: #ccc; text-decoration: line-through;">
                                        {{ $item->currentLocation }}
                                    </li>
                                @else
                                @endif
                            @endforeach
                        @endif


                        <li class="list-group-item ">
                            @if($deliveries->isNotEmpty())
                                <b> {{ $deliveries->last()->currentLocation }}</b>
                            @else
                                Нет данных
                            @endif
                        </li>

                    </ul>
                </div>
            </div>
        </div>


    </div>


</main>


<footer style="margin-top: 25px;">
    <div id="block-block-4" class="block block-block" style="font-family: 'Monserat', sans-serif;">

        <a href="index.html" title="Главная" rel="home" id="logo">

            <div id="site-name" class="element-invisible">
                <a href="index.html" title="Главная" rel="home">ПремиумЛогистикГрупп</a>
                <img class="logo-footer" src="assets/img/LOGO.png" alt="logo" style="width: 70px;">
            </div>
    </div>

    <div id="block-block-3" class="block block-block">


        <div class="content">
            <p class="address-header">

                Москва <br> ул. Страны Советов 44 А
            </p>
        </div>
    </div>
    <div id="block-block-2" class="block block-block">


        <div class="content">

            <p class="header-mail">info@premium-logistics.ru</p>
            <br>
            <!-- Кнопка-триггер модального окна -->
            <button type="button" class="btn btn-success" style="background-color:#8f8c8c; border-color:#8f8c8c;"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                Написать письмо
            </button>
        </div>
    </div>
    <div id="block-block-1" class="block block-block">


        <div class="content">
            <p class="header-phone">8 (800) 700-50-93</p>
            <br>

            <!-- Кнопка-триггер модального окна -->
            <button type="button" class="btn btn-success" style="background-color:#8f8c8c; border-color:#8f8c8c;"
                    data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Заказать звонок
            </button>
        </div>
    </div>
    </div>
</footer>
</body>
</html>
