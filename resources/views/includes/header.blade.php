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
                                        <input name="message" class="form-control" placeholder="Leave a comment here"
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
                <button type="button" class="btn btn-success" style="background-color:#8f8c8c; border-color:#8f8c8c;"
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
    <a href="{{route('services')}}" class="" style="{{Route::is('services')?'background-color:#8f8c8c':''}}">Услуги</a>
    <a href="{{route('autopark')}}" class=""
       style="{{Route::is('autopark')?'background-color:#8f8c8c':''}}">Автопарк</a>
    <a href="{{route('about')}}" class="" style="{{Route::is('about')?'background-color:#8f8c8c':''}}">О нас</a>
    @if (Auth::check())
        <a href="{{ route('PersanalCab') }}" class=" "
           style="{{Route::is('persanalCab')?'background-color:#8f8c8c':''}}">Личный кабинет</a>
    @else
        <a href="{{ route('login') }}" class="" style="{{Route::is('login')?'background-color:#8f8c8c':''}}">Войти</a>
    @endif

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
