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
    <link rel="stylesheet" href="card.css">
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
            <?php
            include('db.php');
            if (!isset($conn)) {
                die("Error: Database connection not established.");
            }
            $flight_id = $_SESSION['flight_id'];
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user_id = $_SESSION['user']['user_id'];
                $first_name = $_POST['firstName'];
                $last_name = $_POST['lastName'];
                $birthdate = $_POST['birthdate'];
                $document_number = $_POST['documentNumber'];
                $expiry_date = $_POST['expiryDate'];
                $iin = $_POST['iin'];
                $phone_number = $_POST['phoneNumber'];
                $email = $_POST['email'];
                $isPayed = 'f';


                $query = "INSERT INTO tickets 
                              (flight_id, user_id, first_name, last_name, birthdate, document_number, expiry_date, iin, phone_number, email, isPayed) 
                              VALUES 
                              ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11)";

                $result = pg_query_params($conn, $query, array(
                    $flight_id,
                    $user_id,
                    $first_name,
                    $last_name,
                    $birthdate,
                    $document_number,
                    $expiry_date,
                    $iin,
                    $phone_number,
                    $email,
                    $isPayed
                ));

                if (!$result) {
                    echo "Ошибка: " . pg_last_error($conn);
                }


                if ($result) {
//                                echo "Данные успешно добавлены в базу данных.";
                    header("Location: card.php");
                    exit();
                } else {
                    echo "Ошибка при добавлении данных в базу данных: " . pg_last_error($conn);
                }
            }
            ?>
            <form class="container">
                <section class="ui">
                    <div class="container-left">
                        <form id="credit-card">
                            <div class="number-container">
                                <label>Card Number</label>
                                <input type="text" name="card-number" id="card-number" maxlength="19" placeholder="1234 5678 9101 1121"
                                       required
                                       onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </div>
                            <div class="name-container">
                                <label>Holder</label>
                                <input type="text" name="name-text" id="name-text" maxlength="30" placeholder="NOAH JACOB"
                                       required
                                       onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key == ' '">
                            </div>
                            <div class="infos-container">
                                <div class="expiration-container">
                                    <label>Valid-thru</label>
                                    <input type="text" name="valid-thru-text" id="valid-thru-text" maxlength="5" placeholder="02/40"
                                           required

                                           onkeypress="return event.charCode >=48 && event.charCode <= 57">
                                </div>
                                <div class="cvv-container">
                                    <label>CVV</label>
                                    <input type="text" name="cvv-text" id="cvv-text" maxlength="4" placeholder="1234"
                                           required
                                           onkeypress="return event.charCode >=48 && event.charCode <= 57">
                                </div>
                            </div>
                            <button type="submit" class="form-button">Оплатить</button>
                        </form>
                    </div>
                    <div class="container-right">
                        <div class="card">
                            <div class="intern">
                                <img class="approximation" src="images/aprox.png" alt="aproximation">
                                <div class="card-number">
                                    <div class="number-vl">1234 5678 9101 1121</div>
                                </div>
                                <div class="card-holder">
                                    <label>Holder</label>
                                    <div class="name-vl">NOAH JACOB</div>
                                </div>
                                <div class="card-infos">
                                    <div class="exp">
                                        <label>valid-thru</label>
                                        <div class="expiration-vl">02/40</div>
                                    </div>
                                    <div class="cvv">
                                        <label>CVV</label>
                                        <div class="cvv-vl">123</div>
                                    </div>
                                </div>
                                <img class="chip" src="images/chip.png" alt="chip">
                            </div>
                        </div>
                    </div>
                </section>
            </form>
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
<script src="card.js"></script>
</body>



</html>