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
    <link rel="stylesheet" href="flight_details.css">
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
            <?php
            include('db.php');
            if (!isset($conn)) {
                die("Error: Database connection not established.");
            }

            $flight_id = $_GET['flight_id'];
            $return_flight_id = isset($_GET['return_flight_id']) ? $_GET['return_flight_id'] : null;
            $_SESSION['flight_id'] = $flight_id;
            $_SESSION['return_flight_id'] = $return_flight_id;
            $class_id = $_SESSION['ticket_type'];
            $total_price = $_SESSION['total_price'];
//            print_r($_SESSION);

            $querySeat = "SELECT class_name, class_id FROM ticket_classes";
            $resultSeat = pg_query($conn, $querySeat);
            $seatData = pg_fetch_all($resultSeat);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user_id = $_SESSION['user']['user_id'];
                $first_name = $_POST['firstName'];
                $last_name = $_POST['lastName'];
                $birthdate = $_POST['birthdate'];
                $document_number = $_POST['documentNumber'];
                $iin = $_POST['iin'];
                $phone_number = $_POST['phoneNumber'];
                $email = $_POST['email'];
                $isPayed = 'f';


                $isChild = in_array('child', $_POST['passengerType']) ? 't' : 'f';
                $isStudent = in_array('student', $_POST['passengerType']) ? 't' : 'f';
                $isPensioner = in_array('pensioner', $_POST['passengerType']) ? 't' : 'f';
                $isDisabled = in_array('disabled', $_POST['passengerType']) ? 't' : 'f';

                $discount = 0;
                if ($isChild === 't') {
                    $discount += 0.2;
                }
                if ($isStudent === 't') {
                    $discount += 0.15;
                }
                if ($isPensioner === 't') {
                    $discount += 0.1;
                }
                if ($isDisabled === 't') {
                    $discount += 0.25;
                }

                $_SESSION['discount']  =  $discount;

                if($return_flight_id != null){
                    $query = "INSERT INTO tickets 
                          (flight_id, user_id, first_name, last_name, birthdate, document_number, iin, phone_number, email, isPayed, 
                           isChild, isStudent, isPensioner, isDisabled, class_id) 
                          VALUES 
                          ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15)
                          RETURNING ticket_id";

                    $result = pg_query_params($conn, $query, array(
                        $flight_id,
                        $user_id,
                        $first_name,
                        $last_name,
                        $birthdate,
                        $document_number,
                        $iin,
                        $phone_number,
                        $email,
                        $isPayed,
                        $isChild,
                        $isStudent,
                        $isPensioner,
                        $isDisabled,
                        $class_id
                    ));

                    if (!$result) {
                        echo "Ошибка: " . pg_last_error($conn);
                    }


                    if ($result) {
                        $row = pg_fetch_assoc($result);
                        $ticket_id = $row['ticket_id'];

                        $query_return  = "INSERT INTO tickets 
                              (flight_id, user_id, first_name, last_name, birthdate, document_number, iin, phone_number, email, isPayed, 
                               isChild, isStudent, isPensioner, isDisabled, class_id) 
                              VALUES 
                              ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15)
                              RETURNING ticket_id";

                        $result_return = pg_query_params($conn, $query_return, array(
                            $return_flight_id,
                            $user_id,
                            $first_name,
                            $last_name,
                            $birthdate,
                            $document_number,
                            $iin,
                            $phone_number,
                            $email,
                            $isPayed,
                            $isChild,
                            $isStudent,
                            $isPensioner,
                            $isDisabled,
                            $class_id
                        ));

                        if (!$result_return) {
                            echo "Ошибка: " . pg_last_error($conn);
                        }
                        if ($result_return) {
                            $row = pg_fetch_assoc($result_return);
                            $return_ticket_id = $row['ticket_id'];
                            echo '<script>window.location.href = "card.php?ticket_id=' . $ticket_id . '&return_ticket_id=' . $return_ticket_id . '";</script>';
                            exit();
                        } else {
                            echo "Ошибка при добавлении данных в базу данных: " . pg_last_error($conn);
                        }
                    } else {
                        echo "Ошибка при добавлении данных в базу данных: " . pg_last_error($conn);
                    }
                }
                else{
                    $query = "INSERT INTO tickets 
                      (flight_id, user_id, first_name, last_name, birthdate, document_number, iin, phone_number, email, isPayed, 
                       isChild, isStudent, isPensioner, isDisabled, class_id) 
                      VALUES 
                      ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15)
                      RETURNING ticket_id";

                    $result = pg_query_params($conn, $query, array(
                        $flight_id,
                        $user_id,
                        $first_name,
                        $last_name,
                        $birthdate,
                        $document_number,
                        $iin,
                        $phone_number,
                        $email,
                        $isPayed,
                        $isChild,
                        $isStudent,
                        $isPensioner,
                        $isDisabled,
                        $class_id
                    ));

                    if (!$result) {
                        echo "Ошибка: " . pg_last_error($conn);
                    }


                    if ($result) {
//                                echo "Данные успешно добавлены в базу данных.";
                        $row = pg_fetch_assoc($result);
                        $ticket_id = $row['ticket_id'];
                        echo '<script>window.location.href = "card.php?ticket_id=' . $ticket_id . '";</script>';
                        exit();
                    } else {
                        echo "Ошибка при добавлении данных в базу данных: " . pg_last_error($conn);
                    }
                }

            }

            if ($_COOKIE['user'] == 'Yes') {
                if (is_numeric($flight_id)) {
                    $query = "SELECT flights.*, airlines.airline_name 
                          FROM flights 
                          JOIN airlines ON flights.airline_id = airlines.airline_id 
                          WHERE flights.flight_id = $flight_id";

                    if (!isset($conn)) {
                        die("Error: Database connection not established.");
                    }
                    $result = pg_query($conn, $query);

                    if(!is_null($return_flight_id)){
                        $queryReturn = "SELECT flights.*, airlines.airline_name 
                          FROM flights 
                          JOIN airlines ON flights.airline_id = airlines.airline_id 
                          WHERE flights.flight_id = $return_flight_id";

                        if (!isset($conn)) {
                            die("Error: Database connection not established.");
                        }
                        $resultReturn = pg_query($conn, $queryReturn);
                    }

                    if ($result) {
                        $row = pg_fetch_assoc($result);
                        if($resultReturn){
                            $rowReturn = pg_fetch_assoc($resultReturn);
                        }

                        if(is_null($return_flight_id)){
                            echo '<h2>Информация о рейсе</h2>';
                            echo '<table>';
                            echo '<tr><td>Авиакомпания:</td><td>' . $row['airline_name'] . '</td></tr>';
                            echo '<tr><td>Дата отправления:</td><td>' . date('d/m H:i', strtotime($row['departure_time'])) . '</td></tr>';
                            echo '<tr><td>Дата прибытия:</td><td>' . date('d/m H:i', strtotime($row['arrival_time'])) . '</td></tr>';
                            echo '<tr><td>Цена:</td><td>' . $total_price . ' ₸</td></tr>';
                            echo '</table>';
                        }


                        if(!is_null($return_flight_id)){
                            $multi = $total_price / ($row['price'] + $rowReturn['price']);
                            echo '<h2>Информация о рейсе</h2>';
                            echo '<table>';
                            echo '<tr><td>Авиакомпания:</td><td>' . $row['airline_name'] . '</td></tr>';
                            echo '<tr><td>Дата отправления:</td><td>' . date('d/m H:i', strtotime($row['departure_time'])) . '</td></tr>';
                            echo '<tr><td>Дата прибытия:</td><td>' . date('d/m H:i', strtotime($row['arrival_time'])) . '</td></tr>';
                            echo '<tr><td>Цена:</td><td>' . $row['price'] * $multi . ' ₸</td></tr>';
                            echo '</table>';
                            echo '<br>';
                            echo '<table>';
                            echo '<tr><td>Авиакомпания:</td><td>' . $rowReturn['airline_name'] . '</td></tr>';
                            echo '<tr><td>Дата отправления:</td><td>' . date('d/m H:i', strtotime($rowReturn['departure_time'])) . '</td></tr>';
                            echo '<tr><td>Дата прибытия:</td><td>' . date('d/m H:i', strtotime($rowReturn['arrival_time'])) . '</td></tr>';
                            echo '<tr><td>Цена:</td><td>' . $rowReturn['price']* $multi
                                . ' ₸</td></tr>';
                            echo '</table>';
                        }

                        echo '<style>';
                        echo 'table { border-collapse: collapse; width: 100%; }';
                        echo 'td, th { border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #ffffff; }';
                        echo 'th { background-color: #f2f2f2; }';
                        echo '</style>';


                        echo '<form class="container1" style="margin-top: 100px; margin-bottom: 100px" method="post">';
                        echo '  <div class="left">';
                        echo '    <div class="form">';
                        echo '      <label class="form-label" for="firstName">Имя:</label>';
                        echo '      <input class="form-input" type="text" name="firstName" required value="' . (isset($_SESSION['user']['name']) ? htmlspecialchars($_SESSION['user']['name']) : '') . '"><br>';
                        echo '      <label class="form-label" for="lastName">Фамилия:</label>';
                        echo '      <input class="form-input" type="text" name="lastName" required value="' . (isset($_SESSION['user']['surname']) ? htmlspecialchars($_SESSION['user']['surname']) : '') . '"><br>';
                        echo '      <label class="form-label" for="birthdate">Дата рождения:</label>';
                        echo '      <input class="form-input" type="date" name="birthdate" required><br>';
                        echo '      <label class="form-label" for="documentNumber">Номер документа:</label>';
                        echo '      <input class="form-input" type="text" name="documentNumber" required><br>';
                        echo '      <label class="form-label" for="iin">ИИН:</label>';
                        echo '      <input class="form-input" type="text" name="iin" required><br>';
                        echo '      <label class="form-label" for="phoneNumber">Номер телефона:</label>';
                        echo '      <input class="form-input" type="tel" name="phoneNumber" required><br>';
                        echo '      <label class="form-label" for="email">Электронная почта:</label>';
                        echo '      <input class="form-input" type="email" name="email" required value="' . (isset($_SESSION['user']['email']) ? htmlspecialchars($_SESSION['user']['email']) : '') . '"><br>';
                        echo '<label class="form-label-1">Типы пассажира:</label><br>';
                        echo '<div class="checkbox-group">';
                        echo '<label><input type="checkbox" name="passengerType[]" value="child">Ребенок</label><br>';
                        echo '<label><input type="checkbox" name="passengerType[]" value="student">Студент</label><br>';
                        echo '<label><input type="checkbox" name="passengerType[]" value="pensioner">Пенсионер</label><br>';
                        echo '<label><input type="checkbox" name="passengerType[]" value="disabled">Инвалид</label><br>';
                        echo '</div>';


                        echo '      <button type="submit" class="form-button" >Отправить</button>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '  <div class="right"></div>';

                        echo '</form>';

                    } else {
                        echo "Ошибка при получении данных о рейсе.";
                    }
                } else {
                    echo "Неверный параметр flight_id.";
                }
                exit();
            } else {
                header("Location: login.php");
                exit();
            }
            ?>
            <a href="main.php">Вернуться на главную страницу</a>
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