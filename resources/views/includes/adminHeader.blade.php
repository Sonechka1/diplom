@if(Auth::user()->isAdmin())

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark"
         style="font-family: 'Monserat', sans-serif;">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('admin')?'active':''}}" style="border-radius: 5px;"
                           aria-current="page" href="{{route('admin')}}">Администратор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{Route::is('infOrder')?'active':''}} "
                           href="{{route('infOrder')}}">Заказы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('client')?'active':''}}" style="border-radius: 5px;"
                           aria-current="page" href="{{route('client')}}">Клиенты</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Route::is('addEmployee')?'active':''}} " style="border-radius: 5px;"
                           href="{{route('addEmployee')}}">Добавить
                            сотрудника</a>
                    </li>
                    <li class="nav-item">
                    <li><a class="nav-link  {{Route::is('completed-orders')?'active':''}} " style="border-radius: 5px;"
                           href="{{route('completed-orders')}}">Отчет по заказам</a>
                    </li>
                    <li class="nav-item {{Route::is('adwards')?'active':''}}">
                        <a class="nav-link" href="{{route('adwards')}}">Премии</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"
                           style=" float: right; color: #FFFFff;   border: solid 1px #FF0000; border-radius: 5px;"
                           href="{{route('logout')}}">Выйти</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    </div>

@endif
@if(Auth::user()->isEmployee())

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('infOrder')?'active':''}}" style="border-radius: 5px;"
                           aria-current="page" href="{{route('infOrder')}}">Сотрудник</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('client')?'active':''}}" style="border-radius: 5px;"
                           aria-current="page" href="{{route('client')}}">Клиенты</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{Route::is('accepted_orders')?'active':''}} " style="border-radius: 5px;"
                           href="{{route('accepted_orders')}}">Заказы</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"
                           style=" float: right; color: #FFFFff;   border: solid 1px #FF0000; border-radius: 5px;"
                           href="{{route('logout')}}">Выйти</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>

@endif

