<!DOCTYPE html>
<html>

<head>
    <title>
        Дешевые авиабилеты онлайн: купить авиабилеты в Казахстане. Поиск и бронирование билетов на самолет по доступным
        ценам
    </title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="visa.css" rel="stylesheet" type="text/css">
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
                <span>Авто</span>
            </a>
            <a class="menu_option" id="Visa" href="visa.php">
                <img src="images/visa.svg">
                <span class="active">Визы</span>
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



    <div class="wrapper">
        <div class="center">
            <div class="content">
                <div class="content-center">
                    <div class="visa-container">
                        <span class="visa-container_header">Открывай мир с Chocotravel</span>
                        <h1 class="visa-container_text">Онлайн оформление визы в более 40 стран мира</h1>
                        <div class="visa-slider">
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/bzcrfwaijgy6gai5v8un.jpg');">
                                    <span class="visa-slider_country-name">Новая Зеландия</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/aofqffhhz9rior1g6cal.jpg');">
                                    <span class="visa-slider_country-name">Япония</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/ckq5rkl4rxgvhwrrf43a.jpg');">
                                    <span class="visa-slider_country-name">Эстония</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/ooq0p7e1twt6qdwvf9td.jpg');">
                                    <span class="visa-slider_country-name">Швеция</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/4ylogiyngyfyrmnbvyyc.jpg');">
                                    <span class="visa-slider_country-name">Чехия</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/2u1jmubc0nvbg5uujxet.jpg');">
                                    <span class="visa-slider_country-name">Франция</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/v2d5shjpsfubqdjud1yv.jpg');">
                                    <span class="visa-slider_country-name">США</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/jm5ws9dfzqo7jxiigdio.jpg');">
                                    <span class="visa-slider_country-name">Италия</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/tkmgvmhrxsvh955drcme.jpg');">
                                    <span class="visa-slider_country-name">Испания</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/50jhoit1hslbvbvplqbg.jpg');">
                                    <span class="visa-slider_country-name">Индия</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/vuohxmbxenl6nctaspx1.jpg');">
                                    <span class="visa-slider_country-name">Великобритания</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                            <div class="visa-slider_country">
                                <div class="visa-slider_img" style="background-image: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/popular_items/cities/c9bzvi8jhfmijhny5zyx.jpg');">
                                    <span class="visa-slider_country-name">Австралия</span>
                                </div>
                                <div class="visa-slider_country-backdrop"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-container">
                        <form class="visa-form">                            
                            <h1 class="visa-form_header">Оставьте заявку</h1>
                            <p class="visa-form_text">Мы свяжемся с вами, чтобы обсудить детали</p>
                            
                            <label class="form-label">
                                <span class="visa-form-span">Фамилия</span>
                                <input type="text" class="visa-form-input">
                            </label>

                            <label class="form-label">
                                <span class="visa-form-span">Имя</span>
                                <input type="text" class="visa-form-input">
                            </label>

                            <label class="form-label">
                                <span class="visa-form-span">Гражданство</span>
                                <select class="visa-form-select" style=" transition:all 0.3s easy-in 0s;">
                                    <option disabled="diabled" value>Выберите один из вариантов</option>
                                    <option-value="AU">Автралия</option-value>
                                    <option-value="AT">Австрия</option-value>
                                    <option-value="AZ">Азербайджан</option-value>
                                    <option-value="AL">Албания</option-value>
                                </select>
                            </label> 

                            <label class="form-label">
                                <span class="visa-form-span">Страна</span>
                                <select class="visa-form-select">
                                <option disabled="diabled" value>Выберите один из вариантов</option>
                                <option-value="AU">Автралия</option-value>
                                <option-value="AT">Австрия</option-value>
                                <option-value="AZ">Азербайджан</option-value>
                                <option-value="AL">Албания</option-value>
                                </select>
                            </label>

                            <label class="form-label">
                                <span class="visa-form-span">Дата поездки</span>
                                <input type="text" class="visa-form-input">  
                                
                                <div data-v-545a2a3a class="root absolute" style="left:50%; z-index:1401;transform: translateX(-50%); display:none">
                                    <div data-v-545a2a3a class="calendar-wrapper">
                                        <div data-v-545a2a3a class="calendar__header">
                                            <button data-v-545a2a3a type="button" class="calendar__month-btn  --left" style="display: none"></button>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label class="form-label">
                                <span class="visa-form-span">Контактный номер</span>
                                <input type="text" class="visa-form-input">
                            </label>

                            <label class="form-label">
                                <span class="visa-form-span">Электронная почта</span>
                                <input type="text" class="visa-form-input">
                            </label>

                            <button class="base-button" type="submit">Отправить заявку</button>
                        </form>
                    </div>
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