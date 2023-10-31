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
                                <select id="ticket-type" name="ticket-type">
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
                                <input type="date" id="date" name="date" placeholder="14 окт"
                                       value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>">
                            </div>


                            <div class="form-group">
                                <label for="airline">Выберите авиакомпании:</label>
                                <div style="display: flex">
                                <?php
                                $query = "SELECT airline_id, airline_name FROM airlines";
                                $result = pg_query($conn, $query);
                                if ($result) {
                                    while ($row = pg_fetch_assoc($result)) {
                                        $checked = (isset($_POST['airline']) && in_array($row['airline_id'], $_POST['airline'])) ? 'checked' : '';
                                        echo '<label style="margin-right: 10px;"><input type="checkbox" name="airline[]" value="' . $row['airline_id'] . '" ' . $checked . '>' . $row['airline_name'] . '</label>';
                                    }
                                } else {
                                    echo '<p>Нет доступных авиакомпаний</p>';
                                }
                                pg_close($conn);
                                ?>
                                 </div>
                                <label for="returnDate">Выберите дату возврата:</label>
                                <input type="date" id="returnDate" name="returnDate" value="<?php echo isset($_POST['returnDate']) ? $_POST['returnDate'] : ''; ?>">
                            </div>







                            <button type="submit" class="find">Найти</button>
                        </div>
                    </form>





                    <div class="absolute top-0 left-0 mt-1"></div>

                    <?php
                    include('db.php');


                    if (isset($_POST['from']) && isset($_POST['to'])) {
                        $fromCityName = $_POST['from'];
                        $toCityName = $_POST['to'];
                        $returnDate = null;

                        if(isset($_POST['date'])){
                            $date = $_POST['date'];
                        }

                        if(isset($_POST["airline"])){
                            $airlines = $_POST["airline"];
                        }
                        if(isset($_POST["returnDate"])){
                            $returnDate = $_POST["returnDate"];
                        }





                        if ($fromCityName && $toCityName && $returnDate == null) {
                            // Construct the SQL query to fetch flights
                            $query = "SELECT * FROM flights WHERE departure_city_id = $fromCityName AND arrival_city_id = $toCityName";
                            if ($date) {
                                $query .= " AND date_trunc('day', arrival_time) = date_trunc('day', '$date'::date)";

                            }
                            if (!empty($airlines)) {
                                $airline_conditions = implode(',', $airlines);
                                $query .= " AND airline_id IN ($airline_conditions)";
                            }

                            $result = pg_query($conn, $query);

                            if ($result) {
                                while ($row = pg_fetch_assoc($result)) {
                                    echo '<div class="variant relative flex flex-wrap p-4 pt-6 bg-white rounded-lg shadow">';


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

                                    echo '<a class="button-link" href="flight_details.php?flight_id=' . $row['flight_id'] . '">Купить за ' . $row['price'] . ' ₸</a>';

                                    echo '</div>';

                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else {
                                echo "No flights found.";
                            }
                        }

                        else if ($returnDate !== null) {
//                            echo $returnDate;
                            $queryOutbound = "SELECT * FROM flights WHERE departure_city_id = $fromCityName AND arrival_city_id = $toCityName  AND date_trunc('day', arrival_time) = date_trunc('day', '$date'::date)";
                            $queryReturn = "SELECT * FROM flights WHERE departure_city_id = $toCityName AND arrival_city_id = $fromCityName AND date_trunc('day', arrival_time) = date_trunc('day', '$returnDate'::date)";
//                            echo "Query Outbound: $queryOutbound<br>";
//                            echo "Query Return: $queryReturn<br>";
                            if (!empty($airlines)) {
                                $airline_conditions = implode(',', $airlines);
                                $queryOutbound .= " AND airline_id IN ($airline_conditions)";
                                $queryReturn .= " AND airline_id IN ($airline_conditions)";
                            }

                            $resultOutbound = pg_query($conn, $queryOutbound);
                            $resultReturn = pg_query($conn, $queryReturn);
                            $foundPairs = false;

//                            echo "Result Outbound: " . pg_num_rows($resultOutbound) . "<br>";
//                            echo "Result Return: " . pg_num_rows($resultReturn) . "<br>";
                            if ($resultOutbound && $resultReturn && pg_num_rows($resultReturn) > 0 && pg_num_rows($resultOutbound) > 0) {
                                while ($rowOutbound = pg_fetch_assoc($resultOutbound)) {
                                    while ($rowReturn = pg_fetch_assoc($resultReturn)){
                                    echo '<div class="variant relative flex flex-wrap p-4 pt-6 bg-white rounded-lg shadow">';

                                    // Вывод информации о прямом рейсе в одну сторону
                                    echo '<div class="w-40 pr-3">';
                                    echo '<div class="flex flex-col"><img src="images/' . $rowOutbound['airline_id'] . '.png" alt="' . $rowOutbound['airline_id'] . '" class="mb-1 w-24 max-w-full"></div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-row w-40 text-xs">';
                                    echo 'Прямой';
                                    echo '</div>';

                                    echo '<div class="flex flex-col items-baseline w-40 mt-0 pl-4">';
                                    echo '<div class="space-y-1">';
                                    // Форматируем дату отправления
                                    $departureTimeOutbound = date('d/m H:i', strtotime($rowOutbound['departure_time']));
                                    $arrivalTimeOutbound = date('d/m H:i', strtotime($rowOutbound['arrival_time']));
                                    echo '<div><span class="font-bold">' . $departureTimeOutbound . '</span> <span class="text-xs">- ' . $arrivalTimeOutbound . '</span></div>';

                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="w-40 mt-0 text-xs">';
                                    echo '<div class "flex flex-col space-y-1"><span>' . $rowOutbound['flight_duration'] . '</span></div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-row items-start justify-end w-auto ml-auto mt-0">';
                                    echo '<div class="flex relative flex-row space-x-1">';
                                    echo '<div hide-on-click="false" placement="bottom" trigger="mouseenter focus manual" arrow="">';
                                    echo '<div tabindex="0"><img src="images/baggage.svg" alt="Иконка" class="w-6 cursor-pointer"></div>';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-col items-center w-48">';
                                    echo '<a class="button-link" href="flight_details.php?flight_id=' . $rowOutbound['flight_id'] . '">Купить за ' . ($rowOutbound['price'] + $rowReturn['price']) . ' ₸</a>';
                                    echo '</div>';

                                    echo '</div>';

                                    // Вывод информации о обратном рейсе
                                    echo '<div class="w-40 pr-3">';
                                    echo '<div class="flex flex-col"><img src="images/' . $rowReturn['airline_id'] . '.png" alt="' . $rowReturn['airline_id'] . '" class="mb-1 w-24 max-w-full"></div>';
                                    echo '</div>';

                                    echo '<div class="flex flex-row w-40 text-xs">';
                                    echo 'Прямой';
                                    echo '</div>';

                                    echo '<div class="flex flex-col items-baseline w-40 mt-0 pl-4">';
                                    echo '<div class="space-y-1">';
                                    // Форматируем дату отправления
                                    $departureTimeReturn = date('d/m H:i', strtotime($rowReturn['departure_time']));
                                    $arrivalTimeReturn = date('d/m H:i', strtotime($rowReturn['arrival_time']));
                                    echo '<div><span class="font-bold">' . $departureTimeReturn . '</span> <span class="text-xs">- ' . $arrivalTimeReturn . '</span></div>';
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="w-40 mt-0 text-xs">';
                                    echo '<div class="flex flex-col space-y-1"><span>' . $rowReturn['flight_duration'] . '</span></div>';
                                    echo '</div>';

                                    echo '</div>';
                                    echo '</div>';
                                    $foundPairs = true;
                                    }
                                    pg_result_seek($resultReturn, 0);
                                }
                            } else {
                                echo "There are no flights with such dates";
                            }
                        }


                    } else {
                        echo "Please provide valid search criteria.";
                    }
                    ?>



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


    <script>
        document.querySelector(".form-zakaz").addEventListener("submit", function (event) {
            const departureDate = new Date(document.querySelector("#date").value);
            const returnDate = new Date(document.querySelector("#returnDate").value);

            if (departureDate > returnDate) {
                event.preventDefault(); // Остановить отправку формы
                alert("Дата возврата не может быть раньше даты отправки.");
            }
        });
    </script>




</body>

</html>