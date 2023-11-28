<!DOCTYPE html>
<html>

<head>
    <link href="reg.css" rel="stylesheet" type="text/css">
    <title>Регистрация на рейс</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reg.css">
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

    <div class="divAviaTextKaz">
        <h1>Онлайн-регистрация на рейс</h1>
        <div id="texx">
            <p><strong>Выберите авиакомпанию</strong></p>
            <p>В список включены только те авиакомпании, которые поддерживают онлайн-регистрацию.</p>
        </div>
    </div>

    <!-- <div id="box">
        <div id="grid">
            <div>
                <p><a href="https://airastana.com/rus/ru-ru/Moia-bron/Upravliat-bronirovaniem/Onlain-registratsiia"><img src="images/Air-Astana.jpg" width="110" height="60"></a></p>
                <div class="link"><p><a href="https://airastana.com/rus/ru-ru/Moia-bron/Upravliat-bronirovaniem/Onlain-registratsiia">Air Astana</a></p></div>
            </div>
        </div>
    </div> -->
    <div class="disp">
        <table cellpadding="35">
            <tbody>
                <tr>
                    <td class="logos">
                        <a class="link"
                            href="https://airastana.com/rus/ru-ru/Moia-bron/Upravliat-bronirovaniem/Onlain-registratsiia">
                            <img src="https://www.chocotravel.com/media/images/logo/original_r/kc_new_logo.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://airastana.com/rus/ru-ru/Moia-bron/Upravliat-bronirovaniem/Onlain-registratsiia">Air
                            Astana</a>
                    </td>
                    <td class="logos">
                        <a class="link"
                            href="http://www.scat.kz/ru/online-check-in.php">
                            <img src="https://www.chocotravel.com/media/images/logo/original_r/DV_logo.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="http://www.scat.kz/ru/online-check-in.php">SCAT Airlines</a>
                    </td>
                    <td class="logos">
                        <a class="link"
                            href="https://booking.bekair.aero/webcheck-in/">
                            <img id="bek" src="https://www.chocotravel.com/media/images/logo/original_r/z9.png"
                                width="100" height="50">
                        </a></br>
                        <a class="link"
                            href="https://booking.bekair.aero/webcheck-in/">Bek Air</a>
                    </td>
                    <td class="logos">
                        <a class="link"
                            href="https://www.flyqazaq.com/ru/checkin">
                            <img id="qazaq" src="https://www.chocotravel.com/media/images/logo/original_r/qazaq.png"
                                width="100" height="35">
                        </a></br>
                        <a class="link"
                            href="https://www.flyqazaq.com/ru/checkin">Qazaq Air</a>
                    </td>
                    <td class="logos">
                        <a class="link"
                            href="https://www.aeroflot.ru/ru-ru/information/airport/checkin/web_checkin">
                            <img src="https://www.chocotravel.com/media/images/logo/original_r/logo_aeroflot.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.aeroflot.ru/ru-ru/information/airport/checkin/web_checkin">Aeroflot</a>
                    </td>
                    <td class="logos">
                        <a class="link"
                            href="https://www.turkishairlines.com/">
                            <img src="https://www.chocotravel.com/media/images/logo/original_r/TK.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.turkishairlines.com/">Turkish Airlines</a>
                    </td>
                </tr>
                <tr>
                    <td class="logos">
                        <a class="link"
                            href="https://www.klm.com/travel/RU_RU/prepare_for_travel/checkin_options/internet_checkin/index.htm">
                            <img id="air2" src="https://www.chocotravel.com/media/images/logo/original_r/KL.png"
                                width="79" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.klm.com/travel/RU_RU/prepare_for_travel/checkin_options/internet_checkin/index.htm">KLM Royal Dutch Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.flyuia.com/ua/ua/services/check-in#online-registration">
                            <img id="air2" src="images/PS.png"
                                width="97" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.flyuia.com/ua/ua/services/check-in#online-registration">Ukraine Intl Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.etihad.com/ru-kz/manage/check-in">
                            <img id="air2" src="images/EY.png"
                                width="100" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.etihad.com/ru-kz/manage/check-in">Etihad Airways</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="http://www.uralairlines.ru/your-flight/register/online/">
                            <img id="air2" src="images/U6.png"
                                width="100" height="15">
                        </a></br>
                        <a class="link"
                            href="http://www.uralairlines.ru/your-flight/register/online/">Ural Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="http://by.csa.cz/ru/portal/info-and-services/services-csa/odbaveni_sub/internet_check_in2.htm">
                            <img id="air2" src="images/Czech.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="http://by.csa.cz/ru/portal/info-and-services/services-csa/odbaveni_sub/internet_check_in2.htm">Czech Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.lufthansa.com/ru/ru/Online-Check-in">
                            <img id="air2" src="images/LH.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.lufthansa.com/ru/ru/Online-Check-in">Lufthansa</a>
                    </td>
                </tr>


                <tr>
                    <td class="logos">
                        <a class="link"
                            href="https://www.flypgs.com/ru/полезная-информация/полетная-информация/регистрация">
                            <img id="air2" src="images/PC.png"
                                width="71" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.flypgs.com/ru/полезная-информация/полетная-информация/регистрация">Pegasus Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.hongkongairlines.com/en_US/Maintenance/HX_Maintenance">
                            <img id="air2" src="images/Hong-Kong-Airlines1.png"
                                width="88" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.hongkongairlines.com/en_US/Maintenance/HX_Maintenance">Hong Kong Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.omanair.com/gbl/en/en/manage-bookings/online-check-in">
                            <img id="air2" src="images/oman-air.png"
                                width="100" height="33">
                        </a></br>
                        <a class="link"
                            href="https://www.omanair.com/gbl/en/en/manage-bookings/online-check-in">Oman Air</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.royalairmaroc.com/int-en">
                            <img id="air2" src="images/AT.png"
                                width="64" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.royalairmaroc.com/int-en">Royal Air Maroc</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.finnair.com/ru-ru/регистрация-на-рейсы-finnair/зарегистрируйтесь-заранее">
                            <img id="air2" src="images/AY.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.finnair.com/ru-ru/регистрация-на-рейсы-finnair/зарегистрируйтесь-заранее">Finnair</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://check-in.alitalia.com/WebCheckIn/RU_EN">
                            <img id="air2" src="images/AZ.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://check-in.alitalia.com/WebCheckIn/RU_EN">Alitalia</a>
                    </td>
                </tr>

                <tr>
                    <td class="logos">
                        <a class="link"
                            href="https://belavia.by/#wci">
                            <img id="air2" src="images/B2.png"
                                width="100" height="27">
                        </a></br>
                        <a class="link"
                            href="https://belavia.by/#wci">Belavia</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.britishairways.com/ru-by/information/checking-in-and-boarding?source=MNVMMB1additional_checkin_options">
                            <img id="air2" src="images/BA.png"
                                width="100" height="43">
                        </a></br>
                        <a class="link"
                            href="https://www.britishairways.com/ru-by/information/checking-in-and-boarding?source=MNVMMB1additional_checkin_options">British Airways</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.omanair.com/gbl/en/en/manage-bookings/online-check-in">
                            <img id="air2" src="images/J2.png"
                                width="90" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.omanair.com/gbl/en/en/manage-bookings/online-check-in">Azerbaijan Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.airbaltic.com/ru/usloviya-onlayn-registratsii">
                            <img id="air2" src="images/BT.png"
                                width="100" height="23">
                        </a></br>
                        <a class="link"
                            href="https://www.airbaltic.com/ru/usloviya-onlayn-registratsii">Air Baltic</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.adria.si/en/manage-my-flight/">
                            <img id="air2" src="images/imgpsh_fullsize.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.adria.si/en/manage-my-flight/">Adria Airways</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.airchina.ru/RU/RU/booking/online-check-in/">
                            <img id="air2" src="images/CA.png"
                                width="100" height="25">
                        </a></br>
                        <a class="link"
                            href="https://www.airchina.ru/RU/RU/booking/online-check-in/">Air China</a>
                    </td>
                </tr>
                
                <tr>
                    <td class="logos">
                        <a class="link"
                            href="http://www.jetstar.com/au/en/planning-and-booking/checking-in/web-check-in">
                            <img id="air2" src="images/Jetstar-Japan-logo.png"
                                width="100" height="27">
                        </a></br>
                        <a class="link"
                            href="http://www.jetstar.com/au/en/planning-and-booking/checking-in/web-check-in">Jetstar Asia</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.koreanair.com/global/ru.php">
                            <img id="air2" src="images/KE.png"
                                width="100" height="12">
                        </a></br>
                        <a class="link"
                            href="https://www.koreanair.com/global/ru.php">Korean Air</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.cathaypacific.com/cx/en_HK/manage-booking/check-in/check-in-now.php">
                            <img id="air2" src="images/CX.png"
                                width="100" height="34">
                        </a></br>
                        <a class="link"
                            href="https://www.cathaypacific.com/cx/en_HK/manage-booking/check-in/check-in-now.php">Cathay Pacific</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="http://www.csair.com/en/online/check_in/index.shtml">
                            <img id="air2" src="images/CZ.png"
                                width="100" height="15">
                        </a></br>
                        <a class="link"
                            href="http://www.csair.com/en/online/check_in/index.shtml">China Southern Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://online.atlasglb.com/AtlasOnline/onlineCheckIn/onlineCheckInSearch.jsp?lang=en">
                            <img id="air2" src="images/Atlasglobal_logo.png"
                                width="100" height="19">
                        </a></br>
                        <a class="link"
                            href="https://online.atlasglb.com/AtlasOnline/onlineCheckIn/onlineCheckInSearch.jsp?lang=en">Atlasglobal</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.s7.ru/ru/info/onlayn-registratsiya-na-reys/">
                            <img id="air2" src="images/ff79bf77-805f-446b-ae6a-30e70c96c6dd "
                                width="100" height="35">
                        </a></br>
                        <a class="link"
                            href="https://www.s7.ru/ru/info/onlayn-registratsiya-na-reys/">S7 Airlines</a>
                    </td>
                </tr>

                
                <tr>
                    <td class="logos">
                        <a class="link"
                            href="http://airbishkek.kg/">
                            <img id="air2" src="images/KR.png"
                                width="100" height="27">
                        </a></br>
                        <a class="link"
                            href="http://airbishkek.kg/">Air Bishkek</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.flysas.com/ru-ru/">
                            <img id="scan" src="images/SK.png"
                                width="100" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.flysas.com/ru-ru/">Scandinavian Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.singaporeair.com/en_UK/sg/travel-info/check-in/online-mobile-checkin/">
                            <img id="air2" src="images/SQ.png"
                                width="50" height="50">
                        </a></br>
                        <a class="link"
                            href="https://www.singaporeair.com/en_UK/sg/travel-info/check-in/online-mobile-checkin/">Singapore Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://icheck.sita.aero/iCheckWebJ2/Home">
                            <img id="air2" src="images/MH.png"
                                width="100" height="27">
                        </a></br>
                        <a class="link"
                            href="https://icheck.sita.aero/iCheckWebJ2/Home">Malaysia Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.egyptair.com/en/fly/check-in/Pages/default.aspx">
                            <img id="air2" src="images/MS.png"
                                width="100" height="19">
                        </a></br>
                        <a class="link"
                            href="https://www.egyptair.com/en/fly/check-in/Pages/default.aspx">Egyptair</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="http://content.flyfrontier.com/manage-travel/online-check-in">
                            <img id="air2" src="images/F9.png"
                                width="100" height="23">
                        </a></br>
                        <a class="link"
                            href="http://content.flyfrontier.com/manage-travel/online-check-in">Frontier Airlines</a>
                    </td>
                </tr>



                <tr>
                    <td class="logos">
                        <a class="link"
                            href="http://airbishkek.kg/">
                            <img id="air2" src="images/UA.png"
                                width="100" height="33">
                        </a></br>
                        <a class="link"
                            href="http://airbishkek.kg/">United Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.flysas.com/ru-ru/">
                            <img id="rusl" src="images/7R.png"
                                width="100" height="42">
                        </a></br>
                        <a class="link"
                            href="https://www.flysas.com/ru-ru/">Rusline</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.singaporeair.com/en_UK/sg/travel-info/check-in/online-mobile-checkin/">
                            <img id="air2" src="images/UT.png"
                                width="100" height="40">
                        </a></br>
                        <a class="link"
                            href="https://www.singaporeair.com/en_UK/sg/travel-info/check-in/online-mobile-checkin/">Utair Aviation JSC</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://icheck.sita.aero/iCheckWebJ2/Home">
                            <img id="rus" src="images/FV.png"
                                width="100" height="21">
                        </a></br>
                        <a class="link"
                            href="https://icheck.sita.aero/iCheckWebJ2/Home">Rossiya-Russian Airlines</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.egyptair.com/en/fly/check-in/Pages/default.aspx">
                            <img id="air2" src="images/logo-flydubai.png"
                                width="100" height="22">
                        </a></br>
                        <a class="link"
                            href="https://www.egyptair.com/en/fly/check-in/Pages/default.aspx">Flydubai</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="http://content.flyfrontier.com/manage-travel/online-check-in">
                            <img id="air2" src="images/GA.png"
                                width="71" height="50">
                        </a></br>
                        <a class="link"
                            href="http://content.flyfrontier.com/manage-travel/online-check-in">Garuda Indonesia</a>
                    </td>
                </tr>

                

                <tr>
                    <td class="logos">
                        <a class="link"
                            href="https://www.onurair.com/tr/">
                            <img id="air2" src="images/Onur_air_logo_1.png"
                                width="100" height="24">
                        </a></br>
                        <a class="link"
                            href="https://www.onurair.com/tr/">Onur Air</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.austrian.com/not-available.php">
                            <img id="rusl" src="images/OS.png"
                                width="100" height="42">
                        </a></br>
                        <a class="link"
                            href="https://www.austrian.com/not-available.php">Austrian</a>
                    </td>


                    <td class="logos">
                        <a class="link"
                            href="https://www.croatiaairlines.com/ru">
                            <img id="air2" src="images/logo-20.png"
                                width="100" height="9">
                        </a></br>
                        <a class="link"
                            href="https://www.croatiaairlines.com/ru">Croatia Airlines</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </br>
    </br>
    </br>
    <h2 class="dispp">Условия регистрации</h2>
    <div class="textt">
        Для всех пассажиров регистрация на рейс, доступна следующими способами:
        </br>
        — до прибытия в аэропорт через интернет
        </br>
        — в аэропорту на стойках регистрации
        </br>
        Время начала регистрации билетов и оформления багажа определяют авиакомпании.
        </br>
    </div>
    <h2 class="dispp">Время прибытия в аэропорт</h2>
    <div class="textt">
        В зависимости от типа воздушного судна, направления полета и авиакомпании, регистрация на внутренние и международные рейсы может начинаться:
        </br>
        — для международных рейсов: за 2–3 часа до отправления рейса
        </br>
        — для внутренних рейсов: за 1–2 часа до отправления рейса
        </br>
        Время окончания регистрации — не позднее 40 минут до отправления рейса.
        </br>
        Точное время начала и окончания регистрации можно узнать заранее в представительствах авиакомпаний.
        </br>
        <strong>Пассажиры, опоздавшие на регистрацию, к полету не допускаются!</strong>
        </br>
    </div>
    <h2 class="dispp">Онлайн-регистрация</h2>
    <div class="texttt">
        Вы можете зарегистрироваться на рейс из любого места, где есть выход в интернет, используя мобильный телефон, персональный компьютер, 
        смартфон или планшет, это позволит вам сэкономить время, а также самостоятельно выбрать удобное место в салоне самолета.
        </br>
        Для того, чтобы воспользоваться услугой онлайн-регистрации, щелкните по соответствующей 
        ссылке в списке авиакомпаний, указанных выше и зарегистрируйтесь онлайн. В конце регистрации 
        Вам будет предложено получить посадочный талон по электронной почте либо мобильному телефону 
        (SMS) или сохранить его.
        </br>
        Посадочный талон необходимо распечатать. Если такой возможности не имеется, 
        то на стойке регистрации сообщите, что Вы уже зарегистрированы. Ваше имя уже будет 
        в базе авиакомпании, а распечатка талона займет лишь несколько секунд.
        </br>
        В случае возникновения технических ошибок после перехода на сайт авиакомпании, 
        Вам необходимо обратиться в службу поддержки выбранной авиакомпании.
        </br>
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