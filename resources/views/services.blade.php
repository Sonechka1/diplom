@extends('layout')

@section('title', 'Услуги')
@section('content')
    <div class="content" style="font-family: 'Monserat', sans-serif;">
        <h1 style="text-align: center;font-size: 35px; margin: 20px;">Наши услуги</h1>
        <p style="text-align: center;font-size: 25px;margin: 15px auto; width: 80%;">Премиум Логистик Групп — это
            команда профессионалов с многолетним опытом успешной реализации логистических проектов всех уровней
            сложности, а также собственные логистические терминалы для приемки, обработки, хранения и отправки грузов,
            собственный и управляемый автопарк и полный спектр транспортно-логистических услуг.
            МЫ РАБОТАЕМ ДЛЯ ВАС! А ВЫ РАБОТАЙТЕ С НАМИ.</p>

        <!-- КАРТОЧКИ НАШИ УСЛУГИ -->
        <div class="ysligi" style="margin: 25px;">
            <div class="container-img">
                <img src="assets/img/1.jpg" style="width: 300px; height: 185px;" alt="Snow">

                <!-- Кнопка-триггер модального окна -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_1">
                    Доставка в торговые сети
                </button>

                <!-- МОДАЛЬНОЕ ОКНО Доставка в торговые сети -->
                <div class="modal fade" style="color: #333;" id="exampleModal_1" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Доставка в торговые сети</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Доставка до дверей</h2>
                                <p class="margin-bottom-m">Наша логистическая компания предлагает услуги перевозки от
                                    двери до двери. Заказчику данной услуги нет нужды беспокоиться о следующих
                                    моментах:</p>
                                <ul class="margin-bottom-m">
                                    <li> поиск и подача транспорта;</li>
                                    <li> сохранность груза;</li>
                                    <li> сроки доставки.</li>
                                </ul>
                                <h3 class="margin-bottom-m"> Наши преимущества</h3>
                                <p class="margin-bottom-m">Благодаря демократичным тарифам грузоперевозка от адреса до
                                    адреса является доступной и востребованной услугой. Доставка не имеет лимитов по
                                    весу и объему.
                                    Перевозчик отслеживает передвижение груза 24 часа в сутки и держит заказчика услуги
                                    в курсе. Каждому клиенту гарантирована экономическая выгода (нет нужды в транзитных
                                    складах), оперативность предоставления услуг (логистические схемы идеально
                                    отработаны) и безопасность сделки (вероятность форс-мажора минимальна)</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container-img">
                <img src="assets/img/7.jpg" style="width: 300px; height: 185px;" alt="Snow">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_2">
                    Сборные грузы
                </button>

                <!-- МОДАЛЬНОЕ ОКНО Сборные грузы -->
                <div class="modal fade" style="color: #333;" id="exampleModal_2" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Сборные грузы</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Сборные грузы</h2>
                                <p class="margin-bottom-m">Крупная логистическая компания осуществляет перевозку сборных
                                    грузов по выгодным тарифам. Услуга означает транспортировку разногабаритных грузов
                                    различных категорий, требующих доставки в одном направлении.</p>
                                <h3 class="margin-bottom-m">Оптимизация расходов</h3>
                                Перевозка сборных грузов выгодна по следующим причинам:
                                <ul class="margin-bottom-m">
                                    <li>1. Существенная финансовая экономия для каждого заказчика. Клиент оплачивает
                                        только то место в грузовике, которое занимает его партия товара. Благодаря
                                        коллективной перевозке сумма к оплате выходит намного меньше, нежели при заказе
                                        всего ТС.
                                    </li>
                                    <li> 2. Быстрые сроки доставки обеспечиваются грамотными логистическими решениями,
                                        оптимально продуманными маршрутами, высокой квалификацией водителей. За
                                        находящимся в пути транспортом ведется 24-часовой мониторинг.
                                    </li>
                                    <li>3. Возможна доставка малогабаритных грузов, поскольку нет ограничений по min
                                        объему партии.
                                    </li>
                                </ul>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-img">
                <img src="assets/img/5.jpg" style="width: 300px; height: 185px;" alt="Snow">
                <!-- МОДАЛЬНОЕ ОКНО -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_3">
                    Интернет-магазины
                </button>

                <!-- МОДАЛЬНОЕ ОКНО Интернет-магазины -->
                <div class="modal fade" style="color: #333;" id="exampleModal_3" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Интернет-магазины</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Интернет-магазины</h2>
                                <p class="margin-bottom-m">Наша логистическая компания организует для интернет-магазинов
                                    быструю доставку, что повышает конкурентоспособность торговой точки. Каждый этап
                                    доставки максимально оптимизирован как для продавца, так и для заказчика. Учитывая
                                    темпы развития e-commerce, услуга будет пользоваться все большим спросом.</p>
                                Данная доставка не влечет за собой дополнительных затрат, но имеет ряд преимуществ:
                                <ul class="margin-bottom-m">
                                    <li>быстрое оформление электронных документов;</li>
                                    <li>укомплектованный товар можно привозить на склад перевозчика самостоятельно либо
                                        вызывать курьера;
                                    </li>
                                    <li>услуга «отслеживание заказа»;</li>
                                </ul>
                                <h3 class="margin-bottom-m">Почему мы?</h3>
                                <p class="margin-bottom-m">
                                    Наша компания всегда доставляет груз быстро и без накладок, благодаря идеально
                                    отработанным логистическим схемам и оптимальным маршрутам. Товар прибывает на место
                                    в целостности и сохранности.
                                </p>
                                <p class="margin-bottom-m">Для каждой компании дистанционной торговли может быть
                                    предоставлен тот вид транспортировки, который конкретный интернет магазин считает
                                    наиболее предпочтительным. При работе с наложенным платежом менеджеры логистической
                                    компании принимают его и перечисляют оплату за товар на счет онлайн магазина.</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-img">
                <img src="assets/img/1.jpg" style="width: 300px; height: 185px;" alt="Snow">

                <!-- МОДАЛЬНОЕ ОКНО -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_4">
                    Перевозка полными машинами
                </button>

                <!-- МОДАЛЬНОЕ ОКНО Перевозка полными машинами -->
                <div class="modal fade" style="color: #333;" id="exampleModal_4" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Перевозка полными машинами</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Перевозка полными машинами</h2>
                                <p>Перевозка грузов полными машинами сегодня лидирует по популярности. Это самый
                                    экономичный вариант транспортировки.
                                    Бюджетно и эффективно</p>
                                <p>При универсальной автоперевозке полными машинами задействуются различные модификации
                                    кузовов грузовиков.</p>
                                Таким способом доступно перевозить все виды грузов:
                                <ul class="margin-bottom-m">
                                    <li> тяжеловесные;</li>
                                    <li> негабаритные;</li>
                                    <li> относящиеся к категории опасных;</li>
                                    <li> требующие определенных условий.</li>
                                </ul>


                                <p class="margin-bottom-m">Доставка автотранспортом – это порука того, что груз будет в
                                    пункте назначения в соответствии с установленным сроком. Если в пути происходит
                                    непредвиденная ситуация, то наша компания без промедления меняет ТС либо составляет
                                    новый оптимальный маршрут.</p>


                                <p class="margin-bottom-m">Ориентируясь на характер груза, компания предоставляет самый
                                    подходящий вид автотранспорта для конкретной перевозки.</p>

                                <h3 class="margin-bottom-m">Клиенту гарантировано:</h3>
                                <ul class="margin-bottom-m">
                                    <li>1. Максимальная скорость доставки</li>
                                    <li>2. Сохранность партии товара.</li>
                                    <li>3. Незначительные финансовые затраты благодаря низким тарифам, грамотным
                                        логистическим решениям и современному оснащению.
                                    </li>
                                </ul>


                                <p>Автопарк компании укомплектован наиболее предпочтительными ТС для подобных перевозок,
                                    это авто малого тоннажа, фуры и др.</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-img">
                <img src="assets/img/6.jpg" style="width: 300px; height: 185px;" alt="Snow">
                <!-- МОДАЛЬНОЕ ОКНО -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_5">
                    Страхование грузов
                </button>

                <!-- МОДАЛЬНОЕ ОКНО Страхование грузов -->
                <div class="modal fade" style="color: #333;" id="exampleModal_5" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Страхование грузов</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Страхование грузов</h2>
                                <p class="margin-bottom-m">Самый рекомендуемый вид страхования груза при транспортировке
                                    – это страхование ответственности за все возможные угрозы. Помимо частичной или
                                    стопроцентной порчи, безвозвратной потери товара встречаются также факты
                                    мошенничества. Страховое покрытие распространяется на эти и другие виды рисков. При
                                    страховании груза владелец предохраняет себя от возможных денежных потерь в случае
                                    неприятности с партией.</p>
                                <p class="margin-bottom-m">Наша компания является ведущим перевозчиком, который
                                    выступает страхователем заказчика транспортной услуги, тем самым демонстрируя свою
                                    готовность нести ответственность и подтверждая надежность своей компании и высокий
                                    профессионализм.
                                </p>

                                <h3 class="margin-bottom-m">Что дает страховка груза?</h3>
                                <p class="margin-bottom-m">Страховка защищает груз при перевозке и временном хранении.
                                    При наличии страховки на груз можно не беспокоиться о следующем:</p>
                                <ul class="margin-bottom-m">
                                    <li>исполнение требований инвесторов (партнеров);</li>
                                    <li>получение страховой защиты;</li>
                                    <li>сохранение позиций на рынке независимо от размеров материального ущерба.</li>
                                </ul>


                                <p class="margin-bottom-m">Всесторонняя защита груза – основа бизнеса, связанного с
                                    перевозкой товара на любом виде транспорта. Опасность для груза могут представлять
                                    плохие дороги, разбушевавшиеся стихии, другие участники дорожного движения.</p>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Закрыть
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-img">
                <img src="assets/img/1.jpg" style="width: 300px; height: 185px;" alt="Snow">

                <!-- МОДАЛЬНОЕ ОКНО -->
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#exampleModal_6">
                    Доставка в торговые сети
                </button>

                <!-- МОДАЛЬНОЕ ОКНО ПОЗВОНИТЬ НАМ -->
                <div class="modal fade" style="color: #333;" id="exampleModal_6" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <h2 class="margin-bottom-m">Доставка в торговые сети</h2>
                                <p class="margin-bottom-m">Наша компания осуществляет доставку грузов в торговые сети
                                    отлажено, вне зависимости от объемов партий и характера груза.</p>
                                <h3 class="margin-bottom-m">Мы имеем опыт и гарантируем качество</h3>
                                <p class="margin-bottom-m">По роду своей деятельности мы сталкивались со сложнейшими
                                    логистическими задачами и всегда принимали верные решения. В итоге каждый
                                    супермаркет вовремя получал свой товар. Сотрудники компании отлично разбираются в
                                    особенностях документации на продукты питания, иные виды груза, оперативно готовя
                                    все бумаги.
                                    Перемещаемый груз находится под контролем компании 24-часа в сутки, а его полная
                                    безопасность гарантирована.</p>

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
@endsection
