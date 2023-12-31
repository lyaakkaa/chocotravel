<!DOCTYPE html>
<html>

<head>
    <title>
        Дешевые авиабилеты онлайн: купить авиабилеты в Казахстане. Поиск и бронирование билетов на самолет по доступным
        ценам
    </title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="rentalcars.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="chocofamily-logos">
        <div id="choco-projects" class="choco-projects">
            <ul class="choco-projects__list">
                <li class="choco-projects__item choco-projects__item_chocolife">
                    <a href="//chocolife.me/?utm_source=chocotravel.com&utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
                        <span class="choco-projects__title">Скидки до 90%</span>
                        <div class="choco-projects__logo"></div>
                    </a>
                </li>

                <li class="choco-projects__item choco-projects__item_tripfor">
                    <span class="choco-projects__title">Авиабилеты</span>
                    <div class="choco-projects__logo"></div>
                </li>

                <li class="choco-projects__item choco-projects__item_chocofood">
                    <a href="http://chocofood.kz/?utm_source=chocotravel.com&utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
                        <span class="choco-projects__title">Заказ Еды</span>
                        <div class="choco-projects__logo"></div>
                    </a>
                </li>

                <li class="choco-projects__item choco-projects__item_idoctor">
                    <a href="http://idoctor.kz/?utm_source=chocotravel&utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
                        <span class="choco-projects__title">Поиск врачей</span>
                        <div class="choco-projects__logo"></div>
                    </a>
                </li>

            </ul>

            <div class="login">
                <input id="is-authorized-input" type="hidden" value="">
                <div class="login-container">
                    <div id="auth-links" class="container-flex">
                        <a href="https://b2b.chocotravel.com/" class="login__link">
                            Бизнес аккаунт
                        </a>
                        <?php
                        if ($_COOKIE['user'] == 'Yes'):
//                            echo 'Current user cookie value: ' . $_COOKIE['user'];
                            ?>
                            <a id="cab_link" href="profile.php" title="" class="login__link">
                                Личный кабинет
                            </a>

                            <a href="logout.php" class="login__button" style="font-size: 12px; font-weight: 600; text-decoration: none;">
                                Выход
                            </a>
                        <?php else: ?>
                            <a id="login-button" type="button" class="login__button" href="voiti.php"> Войти</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header">
        <div class="main_logo">
            <a href="main.php">
                <img class="chocotravel-logo" src="images/chocotravel-logo.svg" alt="logo">
            </a>
        </div>

        <div class="menu_options">
            <a classs="menu_option" id="aviaBilet" href="main.php">
                <img src="images/plane_active.svg">
                <span>Авиабилеты</span>
            </a>
            <a class="menu_option" id="zhdBilet" href="zhd.php">
                <img src="images/jd_ticket.png">
                <span>ЖД билеты</span>
            </a>
            <a class="menu_option" id="Hotels" href="#">
                <img src="images/hotel.svg">
                <span>Гостиницы</span>
            </a>
            <a class="menu_option" id="Cars" href="rentalcars.php">
                <img src="images/rentalcars.svg">
                <span class="active">Авто</span>
            </a>
            <a class="menu_option" id="Visa" href="visa.php">
                <img src="images/visa.svg">
                <span>Визы</span>
            </a>
            <a class="menu_option" id="CorpClient" href="#">
                <img src="images/msb.svg">
                <span>Корпоративным клиентам</span>
            </a>
            <a class="menu_option" id="Tours" href="tours.php">
                <img src="images/tours.svg">
                <span>Туры</span>
            </a>
        </div>
    </div>


    <div class="auto-center">
        <div class="rental-cars">
            <div class="rental-cars__block rental-cars__block_top" id="forms">
                <div class="rental-cars__block_content">
                    <div class="rental-cars__block">
                        <div class="rental-cars__block">
                            <div class="rental-cars__forms">
                                <div class="rental-cars__forms_tabs">
                                    <div class="rental-cars__forms_tabs_tab rental-cars__forms_tabs_tab_active" tab="1" onclick="selectTab(1)">
                                        Предварительный расчет и бронирование
                                    </div>
                                    <div class="rental-cars__forms_tabs_tab" tab="2" onclick="selectTab(2)">
                                        Изменить или отменить бронирование
                                    </div>
                                </div>
                                <div class="rental-cars__forms_content">
                                    <iframe tab="1" class="rental-cars__forms_content_tab rental-cars__forms_content_tab_active" src="https://eixnbeweb01.rent-at-avis.com/avisonline/ru/IBE.nsf/ReservationStep1?OpenForm&MST=38CB55A0B8DEA242C12582BA005A5379" width="100%" height="600" align="middle" frameborder="0"></iframe>
                                    <iframe tab="2" class="rental-cars__forms_content_tab" src="https://eixnbeweb01.rent-at-avis.com/avisonline/ru/IBE.nsf/modifycancel?OpenForm&MST=38CB55A0B8DEA242C12582BA005A5379" width="100%" height="600" align="middle" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="rental-cars__block">
                            <div>
                                <div class="rental-cars__header" style="color: white; text-align: right;">
                                    <img src="images/chocotravellogo.svg">
                                    <br> Аренда автомобилей по всему миру онлайн
                                </div>
                                <img src="images/car.png" class="block rental-cars__block_top__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rental-cars__block">
                <div class="rental-cars__block_content">
                    <div class="rental-cars__header"> Попробуйте свободу на вкус, арендуя автомобиль в Avis</div>
                    <div class="rental-cars__block rental-cars__block_feature">
                        <img src="images/features_1.svg" style="margin-right: 76px;">
                        <div>
                            <b>Свобода передвижения.</b>
                            <br> Вы составляете собственный маршрут, не обращая внимание на расписание общественного транспорта.
                        </div>
                    </div>
                    <div class="rental-cars__block rental-cars__block_feature">
                        <img src="images/features_2.svg" style="margin-right: 76px;">
                        <div style="white-space: pre-line">
                            <b>Свобода выбора.</b>
                            <br> Вы можете выбрать: · автомобиль, который больше всего подходит под все Ваши требования; · станцию проката наиболее удобную для Вас; · дополнительные услуги и страховки, которые сделают Ваше путешествие еще более комфортным; · самое оптимальное для Вас время получения и возврата авто
                        </div>
                    </div>
                    <div class="rental-cars__block rental-cars__block_feature">
                        <img src="images/features_3.svg" style="margin-right: 76px;">
                        <div>
                            <b>Свободные руки.</b>
                            <br> Ведь все вещи Вы можете положить в багажник авто и забыть о тяжестях и усталости.
                        </div>
                    </div>
                </div>
            </div>
            <div style="background: #687482; color: white;">
                <div class="rental-cars__block rental-cars__block_comfort" style="width: calc(50vw + 500px); justify-content: space-between;">
                    <img src="images/comfort.png" style="margin-right: 70px; object-fit: cover; object-position: 100% 0;">
                    <div style="padding: 52px 0; max-width: 1000px;">
                        <div class="rental-cars__header_2">Путешествуйте с комфортом</div>
                        <p>Автомат или механика, небольшой автомобиль или микроавтобус, Вы сможете подобрать автомобиль под любые цели.</p>
                        <p>А для того, чтобы сделать Ваше путешествие еще более комфортным и безопасным мы предлагаем ряд дополнительных опций, таких как навигатор и детское кресло.</p>
                        <p>Вы можете заказать эти опции заранее при бронировании или во время получения авто на станции проката, при условии их наличия.</p>
                    </div>
                </div>
            </div>
            <div class="rental-cars__block_content">
                <div class="rental-cars__block rental-cars__block_extra">
                    <div>
                        <div class="rental-cars__header" style="text-align: left;">Допольнительные услуги</div>
                        <p>Также мы предлагаем дополнительные услуги, такие как расширенное страхование и доставка автомобиля к отелю. В стоимость аренды в большинстве стран аренды уже будет включена стандартная страховка от ущерба и угона с франшизой.</p>
                        <p>Франшиза (максимальная финансовая ответственность водителя при наступлении страхового случая) может отличаться в зависимости от страны и выбранной группы авто. Если Вы хотите воспользоваться полным страхованием или приобрести дополнительные страховки, просим Вас сообщать об этом нашим сотрудникам на станции проката.</p>
                        <p>После бронирования просим Вас ознакомиться с информацией по Вашей аренде в подтверждении бронирования, все ли верно там указано.</p>
                    </div>
                    <img src="images/extra.png">
                </div>
            </div>
            <div style="background: #687482; color: white;">
                <div class="rental-cars__block_content">
                    <div class="rental-cars__header" style="color: white; margin-bottom: 64px;">
                        Обращаем ваше внимание
                        <div style="font-size: 20px;">
                            Документы, которые водителю необходимо иметь при себе на станции проката:
                        </div>
                    </div>
                    <div class="rental-cars__block" style="flex-wrap: wrap; justify-content: center;">
                        <div class="rental-cars_doc">
                            <img src="images/passport.svg">
                            Действующий заграничный паспорт
                        </div>
                        <div class="rental-cars_doc">
                            <img src="images/credit-card.svg">
                            Кредитную карту на имя водителя
                        </div>
                        <div class="rental-cars_doc">
                            <img src="images/calendar.svg">
                            Подтверждение бронирования
                        </div>
                        <div class="rental-cars_doc">
                            <img src="images/driver-license.svg">
                            Действующие национальное и международное водительские удостоверения
                        </div>
                        <div class="rental-cars_doc">
                            <img src="images/contract.svg">
                            Ваучер <br>(если оплата была произведена в Казахстане)
                        </div>
                        <div class="rental-cars_doc">
                            <img src="images/internet.svg">
                            Подтверждение скидки <br>(если Вы воспользовались скидочным кодом, предъявите купон при получении авто)
                        </div>
                    </div>
                    <button class="rental-cars__button" onclick="toTop()">Забронировать авто</button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class = "footer-row">
            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ</li>
                    <li>
                        <a href = "#">Алматы — Астана</a>
                    </li>
                    <li>
                        <a href = "#">Алматы — Дубай</a>
                    </li>
                    <li>
                        <a href = "#">Алматы — Стамбул</a>
                    </li>
                    <li>
                        <a href = "#">Алматы — Бангкок</a>
                    </li>
                    <li>
                        <a href = "#">Алматы — Москва</a>
                    </li>
                    <li>
                        <a href = "#">Популярные направления</a>
                    </li>

                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">АВИАКОМПАНИИ</li>
                    <li>
                        <a href = "#">Air Astana</a>
                    </li>
                    <li>
                        <a href = "#">Qazaq Air</a>
                    </li>
                    <li>
                        <a href = "#">Aeroflot</a>
                    </li>
                    <li>
                        <a href = "#">SCAT</a>
                    </li>
                    <li>
                        <a href = "#">Все авиакомпании</a>
                    </li>

                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПОПУЛЯРНЫЕ СТРАНЫ</li>
                    <li>
                        <a href = "#">Авиабилеты в Россию</a>
                    </li>
                    <li>
                        <a href = "#">Авиабилеты в Таиланд</a>
                    </li>
                    <li>
                        <a href = "#">Авиабилеты в Турцию</a>
                    </li>
                    <li>
                        <a href = "#">Авиабилеты в Германию</a>
                    </li>
                    <li>
                        <a href = "#">Авиабилеты в Грузию</a>
                    </li>
                    <li>
                        <a href = "#">Все страны</a>
                    </li>
                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПРОДУКТЫ</li>
                    <li>
                        <a href = "#">Авиабилеты</a>
                    </li>
                    <li>
                        <a href = "#">ЖД билеты</a>
                    </li>
                    <li>
                        <a href = "#">Визовая поддержка</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class = "footer-row">
            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">О НАС</li>
                    <li>
                        <a href = "about.php">О компании</a>
                    </li>
                    <li>
                        <a href = "#">Блог</a>
                    </li>
                    <li>
                        <a href = "#">Способы оплаты</a>
                    </li>
                    <li>
                        <a href = "contacts.php">Контакты</a>
                    </li>
                    <li>
                        <a href = "#">Публичная оферта</a>
                    </li>
                    <li>
                        <a href = "#">Публичная оферта ЖД</a>
                    </li>
                    <li>
                        <a href = "smi.php">СМИ о нас</a>
                    </li>
                    
                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПОЛЬЗОВАТЕЛЯМ</li>
                    <li>
                        <a href = "#">Вопросы-ответы</a>
                    </li>
                    <li>
                        <a href = "#">Отзывы</a>
                    </li>
                    <li>
                        <a href = "#">Лучшие цены</a>
                    </li>
                    <li>
                        <a href = "reg.php">Регистрация на рейс</a>
                    </li>
                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</li>
                    <li>
                        <a href = "#">Авиакомпании</a>
                    </li>
                    <li>
                        <a href = "#">Аэропорты</a>
                    </li>
                    <li>
                        <a href = "#">Страны</a>
                    </li>
                    <li>
                        <a href = "#">Города</a>
                    </li>
                </ul>
            </div>

            <div class = "footer-col">
                <ul>
                    <li class = "footer-header">ПАРТНЕРАМ</li>
                    <li>
                        <a href = "#">Корпоративным клиентам</a>
                    </li>
                    <li>
                        <a href = "#">Рекламодателям</a>
                    </li>
                    <li>
                        <a href = "#">Сотрудничество</a>
                    </li>
                    <li>
                        <a href = "agents.php">Стать агентом</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class = "footer-row">
            <div class = "footer-col_icons">
                <ul>
                    <li>
                        <div class = "cards-logo">
                            <div class = "item visa"></div>
                            <div class = "item mastercard"></div>
                            <div class = "item unionpay"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "footer-col_icons">
                <ul>
                    <li>
                        <div class = "cards-logo">
                            <a class = "item astanahub" href = "#"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "footer-col_icons">
                <ul>
                    <li>
                        <div class = "cards-logo">
                            <a class = "item socialInst" href = "#"></a>
                            <a class = "item socialFacb" href = "#"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class = "footer-col_icons">
                <ul>
                    <li>
                        <div class = "cards-logo">
                            <div class = "item depositphotos"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>