<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocotravel</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="success.css">
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

<div class="wrapper">
    <div class="center">
        <div class="content">
            <div class="content-center">
                <div class="success-container">
                    <div class="success-icon">&#10004;</div>
                    <h1>Билет успешно оплачен!</h1>
                    <p>Вы можете проверить детали вашего билета в <a href="#">личном кабинете</a>.</p>
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