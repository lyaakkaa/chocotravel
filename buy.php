<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocotravel</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="buy.css">
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
                            <a id="cab_link" href="/cabinet" title="" class="login__link">
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
                    <?php
                    include('db.php'); // Подключение к базе данных
                    if (!isset($conn)) {
                        die("Error: Database connection not established.");
                    }

                    // Запрос для получения списка городов из таблицы "cities"
                    $query = "SELECT city_name, city_id FROM cities";
                    $querySeat = "SELECT seat_class, seat_id FROM seats";
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
                                        <option value="<?php echo $city['city_id']; ?>"
                                            <?php if (isset($_POST['from']) && $_POST['from'] == $city['city_id']) echo 'selected'; ?>>
                                            <?php echo $city['city_name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="to" name="to" required>
                                    <option value="" disabled selected>Куда</option>
                                    <?php foreach ($cityData as $city): ?>
                                        <option value="<?php echo $city['city_id']; ?>"
                                            <?php if (isset($_POST['to']) && $_POST['to'] == $city['city_id']) echo 'selected'; ?>>
                                            <?php echo $city['city_name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select id="ticket-type" name="ticket-type" required>
                                    <option value="" disabled selected>Выберите класс места</option>
                                    <?php foreach ($seatData as $seat): ?>
                                        <option value="<?php echo $seat['seat_id']; ?>"
                                            <?php if (isset($_POST['ticket-type']) && $_POST['ticket-type'] == $seat['seat_id']) echo 'selected'; ?>>
                                            <?php echo $seat['seat_class']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" id="date" name="date" placeholder="14 окт" required
                                       value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>">
                            </div>
                            <button type="submit" class="find">Найти</button>
                        </div>
                    </form>




                    <div class="container-filters">
                        <div class="filter-1">
                            <div class="dropdown">
                                <button class="dropdown-btn">Авиакомпания</button>
                                <div class="dropdown-content">
                                    <a href="#">Опция 1</a>
                                    <a href="#">Опция 2</a>
                                    <a href="#">Опция 3</a>
                                </div>
                            </div>

                

                            <div class="range-slider">
                                <p class="range-slider-text">Цена билета</p>
                                <div class="prices">
                                    <p>127 081 тг</p>
                                    <p>2 155 704 тг</p>
                                </div>
                                <input type="range" class="min-price" value="100" min="10" max="500" step="10">
                                <input type="range" class="max-price" value="250" min="10" max="500" step="10">
                            </div>
                        </div>
                    </div>
                                        

                    
                    <div class="absolute top-0 left-0 mt-1"></div>

                    <?php
                    // Include the database connection code
                    include('db.php');


                    // Check if form data is submitted
                    if (isset($_POST['from']) && isset($_POST['to']) && isset($_POST['date'])) {
                        // Get user input from the form
                        $fromCityName = $_POST['from'];
                        $toCityName = $_POST['to'];
//                        echo $fromCityName;
//                        echo $toCityName;
                        $date = $_POST['date'];
//                        echo $date;



                        if ($fromCityName && $toCityName) {
                            // Construct the SQL query to fetch flights
                            $query = "SELECT * FROM flights WHERE departure_city_id = $fromCityName AND arrival_city_id = $toCityName AND arrival_time >= '$date'";
                            $result = pg_query($conn, $query);

                            if ($result) {
                                // Loop through the result set and display flight information
                                while ($row = pg_fetch_assoc($result)) {
                                    echo '<div class="variant relative flex flex-wrap p-4 pt-6 bg-white rounded-lg shadow">';

                                    // Вывод информации о рейсе из базы данных
                                    echo '<div class="w-40 pr-3">';
                                    echo '<div class="flex flex-col"><img src="images/' . $row['airline_id'] . '.png" alt="' . $row['airline_id'] . '" class="mb-1 w-24 max-w-full"></div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-row w-40 text-xs">';
                                    echo 'Прямой';
                                    echo '</div>';

                                    echo '<div class="flex flex-col items-baseline w-40 mt-0 pl-4">';
                                    echo '<div class="space-y-1">';
                                    // Форматируем дату отправления
                                    $departure_time = date('d/m H:i', strtotime($row['departure_time']));
                                    $arrival_time = date('d/m H:i', strtotime($row['arrival_time']));
                                    echo '<div><span class="font-bold">' . $departure_time . '</span> <span class="text-xs">- ' . $arrival_time . '</span></div>';

                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="w-40 mt-0 text-xs">';
                                    echo '<div class="flex flex-col space-y-1"><span>' . $row['flight_duration'] . '</span></div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-row items-start justify-end w-auto ml-auto mt-0">';
                                    echo '<div class="flex relative flex-row space-x-1">';
                                    echo '<div hide-on-click="false" placement="bottom" trigger="mouseenter focus manual" arrow="">';
                                    echo '<div tabindex="0"><img src="images/baggage.svg" alt="Иконка" class="w-6 cursor-pointer"></div>';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-col items-center w-48">';
                                    echo '<button type="button" class="base-button relative w-full mb-2 p-2 text-sm font-bold">Купить за ' . $row['price'] . ' ₸</button>';
                                    echo '</div>';

                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "No flights found.";
                            }
                        } else {
                            echo "City names not found in the database.";
                        }
                    } else {
                        echo "Please provide valid search criteria.";
                    }
                    ?>



                    <div class="variant relative flex flex-wrap p-4 pt-6 bg-white rounded-lg shadow">
                        <div class="absolute top-0 left-0 mt-1"></div>
                        <div class="w-40 pr-3">
                            <div class="flex flex-col"><img src="images/DV.png" alt="DV" class="mb-1 w-24 max-w-full"></div>
                        </div>
                        <div class="flex flex-row w-40 text-xs">
                            Прямой
                        </div>
                        <div class="flex flex-col items-baseline w-40 mt-0 pl-4">
                            <div class="space-y-1">
                                <div><span class="font-bold">16:55</span> <span class="text-xs">- 18:30</span></div>
                            </div>
                        </div>
                        <div class="w-40 mt-0 text-xs">
                            <div class="flex flex-col space-y-1"><span>
                            1 ч 35 м
                        </span></div>
                        </div>
                        <div class="flex flex-row items-start justify-end w-auto ml-auto mt-0">
                            <div class="flex relative flex-row space-x-1">
                                <div hide-on-click="false" placement="bottom" trigger="mouseenter focus manual" arrow="">
                                    <div tabindex="0"><img src="images/baggage.svg" alt="Иконка" class="w-6 cursor-pointer"></div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center w-48">
                                <p class="mt-0 mb-4 text-xs"><span class="mr-1 p-1 bg-orange-300 rounded">
                                    17 427 ₸
                                    </span> x 3 месяца
                                </p> 
                                <button type="button" class="base-button relative w-full mb-2 p-2 text-sm font-bold">
                                    Купить за 47 567 ₸
                                </button>
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