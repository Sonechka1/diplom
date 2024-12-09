@extends('layout')

@section('title', 'Главная')
@section('content')
    <div class="content">


        <div class="home-blok1">
            <div class="container"
                 style="display: flex; justify-content: space-between; font-family: 'Monserat', sans-serif;">

                <div class="blok1-text">
                    <h1>
                        PREMIUM LOGISTIC GROUP
                    </h1>
                    <p>
                        Вам нужно отправить большой груз или небольшую посылку? Хотите, чтобы они были доставлены в срок
                        в целости и сохранности? Имея собственный автопарк, мы выполняем проекты полного спектра
                        транспортно-логистических услуг, как доставку полными грузовиками, так и доставку Вашей
                        персональной посылки/заказа. Мы предлагаем комплексные решения по транспортной логистике и
                        дистрибуции для любого бизнеса
                    </p>


                </div>


                <!-- ФОРМА РАССЧЕТА СТОИМОСТИ ПРЕРВОЗКИ -->
                <div class="container-forma rounded" style="font-family: 'Monserat', sans-serif;">
                    <form method="POST" action="">
                        @csrf
                        <h3 class="margin-bottom-s" style="color: #333;">Рассчитать стоимость</h3>
                        <div class="mb-3">
                            <label for="Weight" class="form-label">Вес</label><br>
                            <input type="text" class="form-control-sm" placeholder="кг" id="weight" name="weight"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label for="distance" class="form-label">Расстояние</label><br>
                            <input type="text" class="form-control-sm" placeholder="км" id="distance" name="distance"
                                   required>
                        </div>
                        <button type="button" type="submit" class="btn btn-success margin-bottom-s "
                                style="background-color:#8f8c8c; border-color:#8f8c8c;" onClick="multiplyBy()"
                                Value="Multiply">Рассчитать
                        </button>
                        <h3>Стоимость перевозки:</h3>
                        <br><br>
                        <h3 style="text-align: center;">
                            <span id="result"></span>
                        </h3>
                    </form>
                </div>
            </div>
            <!-- ///СКРИПТ ДЛЯ РАССЧЕТА СТОИМОСТИ В ФОРМЕ -->
            <script>
                function multiplyBy() {
                    num1 = document.getElementById("weight").value;
                    num2 = document.getElementById("distance").value;
                    document.getElementById("result").innerHTML = num1 * 10 + num2 * 30; //дистанция 30 руб км, вес 10 руб кг;
                }
            </script>
        </div>
        <!-- БЛОК №2/ КАРТОЧКИ НАШИ УСЛУГИ -->
        <div class="home-blok2  margin-bottom-m" style="font-family: 'Monserat', sans-serif;">
            <h2 class="margin-bottom-m">Наши услуги</h2>
        </div>
        <div class="container margin-bottom-l" style="display: flex; justify-content: center;">
            <div class="row">
                <div class="col">
                    <div class="card rounded-3 center" style="text-align: center;">
                        <img style="width: 100%; padding: 20px;" src="assets/img/1.png" class="card-img-top center"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title center">Доставка в торговые сети</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card rounded-3 center" style="text-align: center;">
                        <img style="width: 100%; padding: 20px;" src="assets/img/2.png" class="card-img-top center"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Доставка до дверей</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card " style="text-align: center;">
                        <img style="width: 100%; padding: 20px;" src="assets/img/3.png" class="card-img-top center"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Сборные грузы</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="text-align: center;">
                        <img style="width: 100%; padding: 20px;" src="assets/img/4.png" class="card-img-top center">
                        <div class="card-body">
                            <h5 class="card-title">Интернет-магазины</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- БЛОК №3/ СПИСОК/ КАК ВОСПОЛЬЗОВАТЬСЯ УСЛУГАМИ -->
        <div class="home-blok3 margin-bottom-l" style="font-family: 'Monserat', sans-serif;">
            <div class="container-toc">
                <section class="toc-wrapper">
                    <h3 class="margin-bottom-m" style="text-align: center; font-size: 25px;">КАК ВОСПОЛЬЗОВАТЬСЯ НАШИМИ
                        УСЛУГАМИ</h3>
                    <ol class="toc">
                        <li><a href="">Заполнить форму заявки,
                                что бы заказать машину</a></li>
                        <li><a href="">Сообщите номер заказа
                                получателю груза</a></li>
                        <li><a href="">До прибытия машины передайте
                                груз и документы экспедитору</a></li>
                        <li><a href="">Узнайте номер накладной в журнале
                                заказов в личном кабинете или у
                                специалиста Контакт-центра

                            </a></li>
                        <li><a href="">Сообщите номер заказа
                                получателю груза</a></li>
                    </ol>
                </section>
            </div>
        </div>

        <p class="gradient-text" style="font-family: 'Monserat', sans-serif;">работать с нами комфортно!</p>


    </div>
    </div>
    <!-- СЕКЦИЯ НАШИ ПАРТНЕРЫ -->
    <section class="section-featured" style="font-family: 'Monserat', sans-serif;">
        <div class="container-logo">
            <div class="gradient-all margin-bottom-m">НАШИ ПАРТНЕНРЫ</div>
            <div class="logos margin-top-sm margin-bottom-sm">
                <a href="#"><img class="partner-1" src="assets/img/parthners/original-15ji.jpg" alt="logo 1"></a>
                <div class="line"></div>
                <a href="#"><img class="partner-2" src="assets/img/parthners/fd30b102_4857_4ea0_ab36_826e44164fd1.jpg"
                                 alt="logo 2"></a>
                <div class="line"></div>
                <a href="#"><img class="partner-3" src="assets/img/parthners/i7wjk9m1mwmlmo83oyi1kjbn1z1hinpi.png"
                                 alt="logo-3"></a>
                <div class="line"></div>
                <a href="#"><img class="partner-4" src="assets/img/parthners/j42j4moh50z178bdl8tpfo4pc5cazwuo.jpeg"
                                 alt="logo 4"></a>
            </div>
        </div>
    </section>
@endsection
