@extends('layout')

@section('title', 'О нас')
@section('content')
    <div class="content">
        <div class="about">
            <h1 style="margin-top: 15px;">О НАС</h1>
            <p class="margin-bottom-m">Компания «Премиум Логистик Групп» оказывает транспортные услуги, направленные на
                удовлетворение потребностей клиентов по всей России. Наши клиенты могут воспользоваться полным
                комплексом услуг в области автомобильных грузоперевозок, как при частичной, так и при полной загрузке
                транспорта, а также при доставке грузов «от двери до двери».
                «Премиум Логистик Групп» доставляет товары точно в срок, в целости и сохранности. Для осуществления
                транспортных услуг мы используем наши собственные транспортные средства и терминалы, а также объекты
                инфраструктуры партнеров, которым мы полностью доверяем.
            </p>
            <p class="margin-bottom-m">Нашими клиентами являются: производители товаров народного потребления,
                электроники и бытовой техники, косметической продукции, биологических добавок, бытовой химии, сети
                розничной торговли, алкогольной продукции а так же Интернет-магазины и компании сегмента B2C.</p>

            <!-- ВСТАВКА ЮТУБ ВИДЕО -->
            <div class="video margin-bottom-m">
                <iframe class="margin-bottom-m" style="text-align: center;" width="960" height="515"
                        src="https://www.youtube.com/embed/QYIIp_TyldU" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
        </div>

        <!-- БЛОК КОНТАКТЫ -->
        <div class="contact-blok centr">
            <h2 class="margin-bottom-m">Наши контакты</h2>
            <div class="contact margin-bottom-m"
                 style="display: flex; gap:10px; justify-content: center; font-size: 25px; ">
                <span><ion-icon name="map-outline" style="font-size: 28px;"></ion-icon></span>
                <p> Москва <br> ул. Страны Советов 44 А</p>
            </div>
            <div class="contact margin-bottom-m"
                 style="display: flex; gap:10px; justify-content: center; font-size: 25px; ">
                <span><ion-icon name="call-outline" style="font-size: 28px;"></ion-icon></span>
                <p>8 (800) 700-50-93, 8 (903) 436 41 37</p>
            </div>
            <div class="contact margin-bottom-m"
                 style="display: flex; gap:10px; justify-content: center; font-size: 25px; ">
                <span><ion-icon name="alarm-outline" style="font-size: 28px;"></ion-icon></span>
                <p>Режим работы: с 9:00 до 18:00</p>
            </div>
            <div class="contact margin-bottom-m"
                 style="display: flex; gap:10px; justify-content: center; font-size: 25px; ">
                <span><ion-icon name="chatbubbles-outline" style="font-size: 28px;"></ion-icon></span>
                <p>u.bonchuzhny@premium-logistics.ru</p>
            </div>
        </div>
        <!-- ГОРИЗОНТАЛЬНЫЙ СПИСОК СНИЗУ -->
        <ul class="menu-main ">
            <li><a href="#ex3" onclick="document.getElementById('id3').style.display='block'">Реквизиты</a></li>
            <li><a href="#ex1" onclick="document.getElementById('id1').style.display='block'">Политика
                    конфединцальности</a></li>
            <li><a href="#ex2" onclick="document.getElementById('id2').style.display='block'">Возврат денежных
                    средств</a></li>
            <li><a href="#ex4" onclick="document.getElementById('id4').style.display='block'">Оплата</a></li>
        </ul>
        <!-- МОДАЛЬНЫЕ ОКНА -->
        <!-- 1 ОКНО -->
        <div id="id1" class="modal">
				<span onclick="document.getElementById('id1').style.display='none'"
                      class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">

                <div class="container-modal " style="background-color:#f1f1f1">
                    <h2>ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</h2>
                    <p>
                        Согласие на обработку персональных данных<br>

                        Настоящим в соответствии с Федеральным законом № 152-ФЗ «О персональных данных» от 27.07.2006
                        года свободно, своей волей и в своем интересе выражаю свое безусловное согласие на обработку
                        моих персональных данных , зарегистрированным в соответствии с законодательством РФ по
                        адресу:344015, Ростовская область, г. Ростов-на-Дону, ул. Малиновского, д.70, кв.104
                        (далее по тексту - Оператор).<br>
                        Персональные данные - любая информация, относящаяся к определенному или определяемому на
                        основании такой информации физическому лицу.<br>
                        Настоящее Согласие выдано мною на обработку следующих персональных данных:<br>
                        - Email;<br>
                        - Телефон;<br>
                        - Имя.<br>

                        Согласие дано Оператору для совершения следующих действий с моими персональными данными с
                        использованием средств автоматизации и/или без использования таких средств: сбор,
                        систематизация, накопление, хранение, уточнение (обновление, изменение), использование,
                        обезличивание, а также осуществление любых иных действий, предусмотренных действующим
                        законодательством РФ как неавтоматизированными, так и автоматизированными способами.
                        Данное согласие дается Оператору для обработки моих персональных данных в следующих целях:<br>
                        - предоставление мне услуг/работ;<br>
                        - направление в мой адрес уведомлений, касающихся предоставляемых услуг/работ;<br>
                        - подготовка и направление ответов на мои запросы;<br>
                        - направление в мой адрес информации, в том числе рекламной, о
                        мероприятиях/товарах/услугах/работах Оператора.<br>

                        Настоящее согласие действует до момента его отзыва путем направления соответствующего
                        уведомления на электронный адрес info@premium-logistics.ru. В случае отзыва мною согласия на
                        обработку персональных данных Оператор вправе продолжить обработку персональных данных без моего
                        согласия при наличии оснований, указанных в пунктах 2 – 11 части 1 статьи 6, части 2 статьи 10 и
                        части 2 статьи 11 Федерального закона №152-ФЗ «О персональных данных» от 27.07.2006 г.
                    </p>

                </div>


                <button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn">
                    Cancel
                </button>

            </form>
        </div>
        <!-- 2 ОКНО -->
        <div id="id2" class="modal">
				<span onclick="document.getElementById('id2').style.display='none'"
                      class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">

                <div class="container-modal " style="background-color:#f1f1f1">
                    <h2>ВОЗВРАТ ДЕНЕЖНЫХ СРЕДСТВ</h2>
                    <p>
                        Возврат денежных средств производится только по заявлению клиента, написанному лично в офисе
                        регистрации при предъявлении паспорта.
                        Для клиентов из городов, где нет наших офисов – уточняйте у своего менеджера-куратора порядок
                        возврата денежных средств.
                    </p>

                </div>


                <button type="button" onclick="document.getElementById('id2').style.display='none'" class="cancelbtn">
                    Cancel
                </button>

            </form>
        </div>
        <!-- 3 ОКНО -->
        <div id="id3" class="modal">
				<span onclick="document.getElementById('id3').style.display='none'"
                      class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">

                <div class="container-modal " style="background-color:#f1f1f1">
                    <h2>РЕКВИЗИТЫ</h2>
                    <p>
                    <div class="content clearfix">
                        <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                            <div class="field-items">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        <th scope="col">Полное наименование организации</th>
                                        <th scope="col">Индивидуальный предприниматель Ярославский Сергей Анатольевич
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>Сокращенное название

                                        </td>
                                        <td>ИП Ярославский Сергей Анатольевич</td>

                                    </tr>
                                    <tr>

                                        <td>Юридический адрес</td>
                                        <td>344015, Ростовская область, г. Ростов-на-Дону, ул. Малиновского, д.70,
                                            кв.104
                                        </td>

                                    </tr>
                                    <tr>

                                        <td>Фактический адрес</td>
                                        <td>344015, Ростовская область, г. Ростов-на-Дону, ул. Малиновского, д.70,
                                            кв.104
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Телефон\факс</td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td>ОГРНИП</td>
                                        <td>316619600272181</td>
                                    </tr>
                                    <tr>

                                        <td>ОКВЭД</td>
                                        <td>64.30</td>
                                    </tr>
                                    <tr>

                                        <td>ИНН</td>
                                        <td>260901913754</td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Полное наименование учреждения банка
                                        </td>
                                        <td>ПАО СБЕРБАНК</td>
                                    </tr>
                                    <tr>

                                        <td>Местонахождение учреждения банка</td>
                                        <td></td>
                                    </tr>
                                    <tr>

                                        <td>БИК</td>
                                        <td>044525225</td>
                                    </tr>
                                    <tr>

                                        <td>Расчетный счет</td>
                                        <td>40802810440000121307</td>
                                    </tr>
                                    <tr>

                                        <td>Корреспондентский счет</td>
                                        <td>30101810400000000225</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </p>

                </div>


                <button type="button" onclick="document.getElementById('id3').style.display='none'" class="cancelbtn">
                    Cancel
                </button>

            </form>
        </div>
        <!-- 4 ОКНО -->
        <div id="id4" class="modal">
				<span onclick="document.getElementById('id4').style.display='none'"
                      class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">

                <div class="container-modal " style="background-color:#f1f1f1">
                    <h2>ОПЛАТА</h2>
                    <p>
                    <div class="content clearfix">
                        <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                            <b>Банковской картой Cбербанк эквайринг</b><br>

                            После получения уведомления о создании документа на оплату. (смс оповещение, либо оповещение
                            по e-mail).<br>
                            По ссылке из уведомления, или перейдя в раздел "клиентам авмвей -&gt; Отследить заказ-&gt;
                            номер заказа" станет доступна кнопка оплаты.<br>
                            Далее следуйте инструкциям на сайте платежной системы. <br><br>
                            Использовать для оплаты разрешается только вашу личную банковскую карту. <br>
                            Все действия с персональными данными осуществляются при помощи защищенного канала на сервере
                            платежной системы. <br>
                            В систему заказов premium-logistics.ru персональные данные о ваших банковских картах не
                            передаются. <br>

                            В случае, если осуществить платеж не удается, свяжитесь, пожалуйста, с представителем вашего
                            банка для выяснения причины отказа в платеже.<br><br>
                            Настоящий сайт поддерживает 256-битное шифрование. Конфиденциальность сообщаемой
                            персональной информации обеспечивается ПАО СБЕРБАНК. <br><br>Введённая информация не будет
                            предоставлена третьим лицам за исключением случаев, предусмотренных законодательством РФ.
                            <br> Проведение платежей по банковским картам осуществляется в строгом соответствии с
                            требованиями платёжных систем МИР, Visa Int., MasterCard Europe Sprl, JCB.
                        </div>
                    </div>
                    </p>

                </div>


                <button type="button" onclick="document.getElementById('id4').style.display='none'" class="cancelbtn">
                    Cancel
                </button>

            </form>
        </div>

    </div>
@endsection
