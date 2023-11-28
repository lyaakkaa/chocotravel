<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="profile.css">
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
            <div class="content1">
                <div class="content-center">
                    <div class="container-flex">
                        <div class="profile-container">
                            <div class="img-container">
                                <img class="profile-picture" src="images/profile.png" alt="Profile Picture">
                            </div>


                            <?php
                            require('db.php');
                            if (!isset($conn)) {
                                die("Error: Database connection not established.");
                            }

                            $user_id = isset($_SESSION['user']['user_id']) ? $_SESSION['user']['user_id'] : null;

                            if ($user_id !== null) {
                                $user_query = "SELECT * FROM users WHERE user_id = $user_id";
                                $user_result = pg_query($conn, $user_query);

                                if ($user_result) {
                                    $user_data = pg_fetch_assoc($user_result);
                                    echo '<div class="user-details">';
                                    echo '<label>Имя:</label> ' . $user_data['name'] . '<br>';
                                    echo '<label>Фамилия:</label> ' . $user_data['surname'] . '<br>';
                                    echo '<label>Email:</label> ' . $user_data['email'] . '<br>';
                                    echo '</div>';

                                    $tickets_query = "
                                        SELECT
                                            tickets.ticket_id,
                                            tickets.first_name AS passenger_first_name,
                                            tickets.last_name AS passenger_last_name,
                                            departure_city.city_name AS departure_city_name,
                                            arrival_city.city_name AS arrival_city_name,
                                            flights.flight_number,
                                            flights.departure_time,  -- Добавлено поле departure_time
                                            flights.arrival_time,
                                            flights.price,
                                            airlines.airline_name
                                        FROM tickets
                                        INNER JOIN flights ON tickets.flight_id = flights.flight_id
                                        INNER JOIN cities AS departure_city ON flights.departure_city_id = departure_city.city_id
                                        INNER JOIN cities AS arrival_city ON flights.arrival_city_id = arrival_city.city_id
                                        INNER JOIN airlines ON flights.airline_id = airlines.airline_id
                                        WHERE tickets.user_id = $user_id
                                    ";



                                    $tickets_result = pg_query($conn, $tickets_query);

                                    if ($tickets_result) {
                                        echo '<div class="tickets-section">';
                                        echo '<h2>Купленные билеты</h2>';

                                        while ($ticket_data = pg_fetch_assoc($tickets_result)) {
                                            echo '<button class="cancel-button" onclick="cancelTicket(' . $ticket_data['ticket_id'] . ')">Отменить билет</button>';
                                            echo '<div class="box">';
                                            echo '  <ul class="left">';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '  </ul>';
                                            echo '';
                                            echo '  <ul class="right">';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '    <li></li>';
                                            echo '  </ul>';
                                            echo '  <div class="ticket">';
                                            echo '    <span class="airline">' . $ticket_data['airline_name'] . '</span>';
                                            echo '    <span class="airline airlineslip">' . $ticket_data['airline_name'] . '</span>';
                                            echo '    <div class="content">';
                                            echo '      <span class="jfk">' . $ticket_data['departure_city_name'] . '</span>';
                                            echo '      <span class="plane"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="60" width="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390"/><path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10"/></g></svg></span>';
                                            echo '      <span class="sfo">SFO</span>';
                                            echo '      <span class="jfk jfkslip">JFK</span>';
                                            echo '      <span class="plane planeslip"><?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50" width="50" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg"><g stroke="#222"><line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390"/><path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10"/></g></svg></span>';
                                            echo '      <span class="sfo sfoslip">SFO</span>';
                                            echo '      <div class="sub-content">';
                                            echo '        <span class="name">PASSENGER NAME<br><span>' . $ticket_data['passenger_first_name'] . ' ' . $ticket_data['passenger_last_name'] .'</span></span>';
                                            echo '        <span class="flight">FLIGHT N&deg;<br><span>' . $ticket_data['flight_number'] .'</span></span>';
                                            echo '        <span class="gate">GATE<br><span>11B</span></span>';
                                            echo '        <span class="seat">SEAT<br><span>45A</span></span>';
                                            echo '        <span class="boardingtime">BOARDING TIME<br><span>' . $ticket_data['departure_time'] .'</span></span>';
                                            echo '        <span class="flight flightslip">FLIGHT N&deg;<br><span>' . $ticket_data['flight_number'] .'</span></span>';
                                            echo '        <span class="seat seatslip">SEAT<br><span>45A</span></span>';
                                            echo '        <span class="name nameslip">PASSENGER NAME<br><span>' . $ticket_data['passenger_first_name'] . ' ' . $ticket_data['passenger_last_name'] .'</span></span>';
                                            echo '      </div>';
                                            echo '    </div>';
                                            echo '    <div class="barcode"></div>';
                                            echo '    <div class="barcode slip"></div>';
                                            echo '  </div>';
                                            echo '</div>';



                                        }

                                        echo '</div>';
                                    } else {
                                        echo 'Error retrieving ticket information: ' . pg_last_error($conn);
                                    }
                                } else {
                                    echo 'Error retrieving user information: ' . pg_last_error($conn);
                                }
                            } else {
                                echo 'User ID not found in session.';
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function cancelTicket(ticketId) {
            // Переход на страницу отмены с передачей параметра ticket_id
            window.location.href = 'cancel_ticket.php?ticket_id=' + ticketId;
        }
    </script>

</body>





</html>