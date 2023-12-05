<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocotravel</title>
    <link rel="stylesheet" href="main.css">
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
            <a classs="menu_option" id="aviaBilet" href="#l">
                <img src="images/plane_active.svg">
                <span class="active">Авиабилеты</span>
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
                    <div class="div-text">
                        <h1>Авиабилеты в Казахстане</h1>
                    </div>
                    <?php
                    include('db.php'); // Подключение к базе данных
                    if (!isset($conn)) {
                        die("Error: Database connection not established.");
                    }

                    if (isset($_SESSION['user']['user_id'])) {
                        $userID = $_SESSION['user']['user_id'];

                        // Check if the user already has bonuses
                        $getUserBonusQuery = "SELECT bonus FROM users WHERE user_id = $userID";
                        $getUserBonusResult = pg_query($conn, $getUserBonusQuery);

                        if (!$getUserBonusResult) {
                            die("Error checking user bonuses: " . pg_last_error($conn));
                        }

                        $userBonus = pg_fetch_assoc($getUserBonusResult)['bonus'];

                        // If the user doesn't have bonuses, check the number of purchased tickets
                        if ($userBonus == 0) {
                            $checkTicketsQuery = "SELECT COUNT(*) AS ticket_count FROM tickets WHERE user_id = $userID AND isPayed = true";
                            $checkTicketsResult = pg_query($conn, $checkTicketsQuery);

                            if (!$checkTicketsResult) {
                                die("Error checking the number of purchased tickets: " . pg_last_error($conn));
                            }

                            $ticketCount = pg_fetch_assoc($checkTicketsResult)['ticket_count'];

                            // If the ticket count is greater than or equal to 10, add a bonus
                            if ($ticketCount >= 2) {
                                $updateBonusQuery = "UPDATE users SET bonus = 500 WHERE user_id = $userID";
                                $updateBonusResult = pg_query($conn, $updateBonusQuery);

                                if (!$updateBonusResult) {
                                    die("Error updating user bonus: " . pg_last_error($conn));
                                }

                                echo "Congratulations! You have received a bonus of 500 tenge for purchasing more than 10 tickets.";
                            }
                        }

                    }

                    $deleteQuery = "DELETE FROM tickets WHERE isPayed = false";
                    $deleteResult = pg_query($conn, $deleteQuery);

                    if (!$deleteResult) {
                        die("Error deleting unpaid tickets: " . pg_last_error($conn));
                    }

                    // Запрос для получения списка городов из таблицы "cities"
                    $query = "SELECT city_name, city_id FROM cities";
                    $querySeat = "SELECT class_name, class_id FROM ticket_classes";
                    $result = pg_query($conn, $query);
                    $resultSeat = pg_query($conn, $querySeat);
                    $seatData = pg_fetch_all($resultSeat);
                    $cityData = pg_fetch_all($result);
                    ?>

                    <form class="form-zakaz" action="buy.php" method="post">
                        <div class="labels">
                            <div class="form-group">
                                <select id="from" name="from" required>
                                    <option value="" disabled selected>Откуда</option>
                                    <?php foreach ($cityData as $city): ?>
                                        <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="to" name="to" required>
                                    <option value="" disabled selected>Куда</option>
                                    <?php foreach ($cityData as $city): ?>
                                        <option value="<?php echo $city['city_id']; ?>"><?php echo $city['city_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="ticket-type" name="ticket-type" required>
                                    <option value="" disabled selected>Выберите класс места</option>
                                    <?php foreach ($seatData as $seat): ?>
                                        <option value="<?php echo $seat['class_id']; ?>"><?php echo $seat['class_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" id="date" name="date" placeholder="14 окт" required>
                            </div>
                            <button type="submit" class="find">Найти</button>
                        </div>
                    </form>

                    <div class="div-text">
                        <h2>Подробнее о поиске авиабилетов на Chocotravel</h2>
                            <p>Именно по этим причинам люди используют Chocotravel как бесплатный<br> сервис по поиску авиабилетов</p>
                    </div>

                    <div class="blocks">
                        <div class="one-block">
                            <img src="images/mainpage-features-plane-2.svg">
                            <h3>1000 авиакомпаний</h3>
                            <p>Chocotravel.com сравнивает предложения более 1000 авиакомпаний мира, чтобы найти для вас лучший вариант перелета</p>
                        </div>
                        <div class="one-block">
                            <img src="images/mainpage-features-wallet-2.svg">
                            <h3>Авиабилеты по цене авиакомпаний</h3>
                            <p>На Chocotravel.com вы приобретаете билеты по стоимости авиакомпании, без скрытых комиссий и сборов, а иногда даже дешевле</p>
                        </div>
                        <div class="one-block">
                            <img src="images/mainpage-features-clock-2.svg">
                            <h3>Круглосуточная поддержка</h3>
                            <p>Мы решаем ваши проблемы 24 часа в сутки</p>
                        </div>
                        <div class="one-block">
                            <img src="images/mainpage-features-touch-2.svg">
                            <h3>Покупка за 3 минуты</h3>
                            <p>Вы экономите время, больше не нужно ездить в агентства. Проводите время с любимыми</p>
                        </div>
                        <div class="one-block">
                            <img src="images/mainpage-features-mobile-2.svg">
                            <h3>Все билеты в твоем мобильном</h3>
                            <p>Полнофункциональные мобильные приложения для Android и IOS</p>
                        </div>
                        <div class="one-block">
                            <img src="images/mainpage-features-handshake-2.svg">
                            <h3>Надежность</h3>
                            <p>Нам доверяют более 200 000 казахстанцев ежегодно</p>
                        </div>
                    </div>

                    <div class="aboutUs">
                        <p>
                            Часто сталкиваетесь с необходимостью купить билеты на самолет? Думали ли Вы о том,как было бы здорово, если бы бронирование авиабилетов занимало всего 5 минут? Теперь это стало реально! Благодаря сервису Chocotravel.com купить авиабилеты онлайн в Казахстане
                            можно в несколько кликов.
                        </p>
                        <p>
                            <strong>Покупка ЖД и авиабилетов онлайн:</strong>
                        </p>
                        <p>
                            1. Экономит Ваше время.
                        </p>
                        <p>
                            Автоматизированная система поиска в режиме онлайн после ввода параметров находит лучшие варианты авиаперелета, предлагаемые всеми доступными авиакомпаниями. За считанные минуты перед Вами появится перечень выгодных предложений более чем от 1000 авиакомпаний.
                            При этом Вам совершенноне нужно ехать в другой конец города и напрасно тратить время в длинных очередях в кассе!
                        </p>
                        <p>
                            2. Экономит Ваши деньги.
                        </p>
                        <p>
                            Вы сможете подобрать дешевые авиабилеты по различным направлениям. Цены на авиабилеты порадуют Вас, ведь мы продаем их без наценок.
                        </p>
                        <p>
                            3. Множество способов оплаты.
                        </p>
                        <p>
                            Вы можете оплатить покупку любым удобным для вас способом:
                        </p>
                        <ol>
                            <li>банковскими картами VISA, Mastercard и Union Pay;</li>
                            <li>через приложение Рахмет;</li>
                            <li>в рассрочку Freedom Finance credit</li>
                        </ol>
                        <p>
                            <strong>Преимущества портала Chocotravel.com:</strong>
                        </p>
                        <ul>
                            <li>На сайте Вы можете найти, забронировать и купить авиабилеты онлайн на рейсы практически любой авиакомпании в мире.</li>
                            <li>Мы помогаем найти билет на любое направление по минимальной стоимости.</li>
                            <li>У нас Вы также можете приобрести железнодорожные билеты онлайн.</li>
                            <li>При заполнении формы заказа Вам понадобится лишь один раз вписать информацию о себе. При последующих покупках система автоматически сохраняет данные, избавляя Вас от утомительной процедуры ввода данных. Возможность страхования
                                по выбранной программе.</li>
                        </ul>
                    </div>

                    <div class="main_articles">
                        <div class="main_articles_title">
                            <p>СМИ о нас</p>
                            <a href="#">Посмотреть все статьи</a>
                        </div>

                        <div class="article-tab">
                            <a>
                                <div>
                                    <img src="images/tengri1.jpg">
                                </div>
                            </a>
                        </div>

                        <div class="article-tab">
                            <a>
                                <div>
                                    <img src="images/forbes.png">
                                </div>
                            </a>
                        </div>

                        <div class="article-tab">
                            <a>
                                <div>
                                    <img src="images/forbes.png">
                                </div>
                            </a>
                        </div>

                        <div class="article-tab">
                            <a>
                                <div>
                                    <img src="images/kazinf.jpg">
                                </div>
                            </a>
                        </div>

                        <div class="article-tab">
                            <a>
                                <div>
                                    <img src="images/tengri1.jpg">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="install-app">
                        <img src="images/download-app.png" width="424" height="404">
                        <div class="install-app-container">
                            <div class="install-app_text">
                                <h3>УСТАНОВИ ПРИЛОЖЕНИЕ CHOCOTRAVEL!</h3>
                                <p>Все билеты без наценок в твоем мобильном.</p>
                            </div>

                            <div class="install-app_shops">
                                <a href="#">
                                    <img src = "images/app-store-badge.svg" width="138" height="45">
                                </a>
                                <a href="#">
                                    <img src = "images/google-play-badge.png" width="152" height="45">
                                </a>
                                <a href="#">
                                    <img src = "images/app-gallery-badge.png" width="152" height="45">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-row">
            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПОПУЛЯРНЫЕ НАПРАВЛЕНИЯ</li>
                    <li>
                        <a href="#">Алматы — Астана</a>
                    </li>
                    <li>
                        <a href="#">Алматы — Дубай</a>
                    </li>
                    <li>
                        <a href="#">Алматы — Стамбул</a>
                    </li>
                    <li>
                        <a href="#">Алматы — Бангкок</a>
                    </li>
                    <li>
                        <a href="#">Алматы — Москва</a>
                    </li>
                    <li>
                        <a href="#">Популярные направления</a>
                    </li>

                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">АВИАКОМПАНИИ</li>
                    <li>
                        <a href="#">Air Astana</a>
                    </li>
                    <li>
                        <a href="#">Qazaq Air</a>
                    </li>
                    <li>
                        <a href="#">Aeroflot</a>
                    </li>
                    <li>
                        <a href="#">SCAT</a>
                    </li>
                    <li>
                        <a href="#">Все авиакомпании</a>
                    </li>

                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПОПУЛЯРНЫЕ СТРАНЫ</li>
                    <li>
                        <a href="#">Авиабилеты в Россию</a>
                    </li>
                    <li>
                        <a href="#">Авиабилеты в Таиланд</a>
                    </li>
                    <li>
                        <a href="#">Авиабилеты в Турцию</a>
                    </li>
                    <li>
                        <a href="#">Авиабилеты в Германию</a>
                    </li>
                    <li>
                        <a href="#">Авиабилеты в Грузию</a>
                    </li>
                    <li>
                        <a href="#">Все страны</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПРОДУКТЫ</li>
                    <li>
                        <a href="#">Авиабилеты</a>
                    </li>
                    <li>
                        <a href="#">ЖД билеты</a>
                    </li>
                    <li>
                        <a href="#">Визовая поддержка</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-row">
            <div class="footer-col">
                <ul>
                    <li class="footer-header">О НАС</li>
                    <li>
                        <a href="about.php">О компании</a>
                    </li>
                    <li>
                        <a href="#">Блог</a>
                    </li>
                    <li>
                        <a href="#">Способы оплаты</a>
                    </li>
                    <li>
                        <a href="#">Контакты</a>
                    </li>
                    <li>
                        <a href="#">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="#">Публичная оферта ЖД</a>
                    </li>
                    <li>
                        <a href="smi.php">СМИ о нас</a>
                    </li>

                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПОЛЬЗОВАТЕЛЯМ</li>
                    <li>
                        <a href="#">Вопросы-ответы</a>
                    </li>
                    <li>
                        <a href="#">Отзывы</a>
                    </li>
                    <li>
                        <a href="#">Лучшие цены</a>
                    </li>
                    <li>
                        <a href="reg.php">Регистрация на рейс</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</li>
                    <li>
                        <a href="#">Авиакомпании</a>
                    </li>
                    <li>
                        <a href="#">Аэропорты</a>
                    </li>
                    <li>
                        <a href="#">Страны</a>
                    </li>
                    <li>
                        <a href="#">Города</a>
                    </li>
                </ul>
            </div>

            <div class="footer-col">
                <ul>
                    <li class="footer-header">ПАРТНЕРАМ</li>
                    <li>
                        <a href="#">Корпоративным клиентам</a>
                    </li>
                    <li>
                        <a href="#">Рекламодателям</a>
                    </li>
                    <li>
                        <a href="#">Сотрудничество</a>
                    </li>
                    <li>
                        <a href="agents.php">Стать агентом</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="footer-row">
            <div class="footer-col_icons">
                <ul>
                    <li>
                        <div class="cards-logo">
                            <div class="item visa"></div>
                            <div class="item mastercard"></div>
                            <div class="item unionpay"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-col_icons">
                <ul>
                    <li>
                        <div class="cards-logo">
                            <a class="item astanahub" href="#"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-col_icons">
                <ul>
                    <li>
                        <div class="cards-logo">
                            <a class="item socialInst" href="#"></a>
                            <a class="item socialFacb" href="#"></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-col_icons">
                <ul>
                    <li>
                        <div class="cards-logo">
                            <div class="item depositphotos"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>