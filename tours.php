<!DOCTYPE html>
<html>

<head>
    <title>
        Дешевые авиабилеты онлайн: купить авиабилеты в Казахстане. Поиск и бронирование билетов на самолет по доступным ценам
    </title>
    <link href="main.css" rel="stylesheet" type="text/css">
    <link href="tours.css" rel="stylesheet" type="text/css">
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
                <span class="active">Туры</span>
            </a>
        </div>
    </div>



    <section id="tours-landing-app">
        <section class="my-16">
            <header class="relative text-black tours-container mb-16">
                <h1 class="mb-4 text-5x1 font-extrabold">Chocotravel Tours</h1>
                <h2 class="mb-8 text-x1">Оставьте заявку и мы свяжемся с вами</h2>
                <div class="bg-white rounded-2x1 px-10 py-12 text-x1" style="max-width: 460px;">
                    <div>
                        <div class="flex flex-col mb-4">
                            <div class="relative">
                                <input type="text" placeholder="Имя" class="p-4 w-full text-x1 text-black bg-gray-300 rounded-lg border-none">
                            </div>
                            <div class="relative mt-6">
                                <input type="tel" inputmode="tel" placeholder="Номер телефона" class="p-4 w-full text-x1 text-black bg-gray-300 rounded-lg border-none">
                            </div>
                            <button class="base-button mt-6 p-4 flex justify-center rounded-lg --default --accent" type="submit" style="font-size: 20px; font-weight: 700; border-radius: 8px;">
                                <span>Оставить заявку</span>
                            </button>
                        </div>
                        <div class="text-black text-base">
                            <span class="font-bold">Доступные направления:</span> <span>Турция, Египет, Тайланд, Мальдивы, ГОА, Шри-Ланка</span>
                        </div>
                    </div>
                </div>
                <img src="images/tourist_1.webp" role="presentation" width="485" height="862" class="absolute right-0" style="bottom:  -250px;">
            </header>
            <section class="bg-tours-pattern py-16 text-white bg-blue-500 mb-24">
                <div class="mx-auto text-center" style="max-width: 1200px;">
                    <h2 class="mt-0 mb-8 text-5x1 font-extrabold">Что мы предлагаем</h2>
                    <div class="flex justify-between items-start text-x1">
                        <div class="px-4">
                            <img src="images/plane.svg" role="presentation" width="56" height="56" class="mb-2">
                            <span class="block">Только прямые рейсы</span>
                        </div>
                        <div class="px-4 border border-t-0 border-b-0 border-solid border-white border-opacity-50">
                            <img src="images/money.svg" role="presentation" width="56" height="56" class="mb-2">
                            <span class="block">Гарантия возврата денег до подтверждения тура</span>
                        </div>
                        <div class="px-4">
                            <img src="images/money_2.svg" role="presentation" width="56" height="56" class="mb-2">
                            <span class="block">Фиксированные цены на 48 часов</span>
                        </div>
                        <div class="px-4 border border-t-0 border-b-0 border-r-0 border-solid border-white border-opacity-50">
                            <img src="images/box.svg" role="presentation" width="56" height="56" class="mb-2">
                            <span class="block">Перелет, проживание, питание, трансфер, страховка</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-tours-gradient py-12 px-4 text-center text-white rounded-2x1 mb-24 mx-auto" style="max-width: 1000px;">
                <h3 class="mt-0 mb-8 text-4x1 font-bold">Гарантия самой низкой цены</h3>
                <p class="my-0 mx-auto w-8/12 text-2x1">Если вы оставите заявку с предложением от конкурента, мы продадим вам выгоднее</p>
            </section>
            <section class="pt-16 pb-12 px-6 text-center bg-white mb-24">
                <h2 class="mt-0 mb-4 text-5x1 font-extrabold text-black">Интересные туры</h2>
                <p class="my-0 mb-12 mx-auto w-6-12 text-x1 text-gray-500">Исследуйте самые популярные направления в мире и отправляйтесь в путешествие вместе с Chocotravel</p>
                <div>
                    <div class="hide-scrollbar overflow-x-scroll">
                        <div class="mb-5 inline-flex space-x-6 transition-transform duration-200" style="transition: none 0s ease 0s; transform: translateX(-322.083px);">
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5cb7054ec9bd7.jpg" width="300" height="182" alt="Sultan Gardens Resort SHarm El Sheikh" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Fujairah Rotana Resort & Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/61c4c31c94320.JPG" width="300" height="182" alt="Naama Bay Promenade Beach Resort Managed By Accor" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Naama Bay Promenade Beach Resort Managed By Accor</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 768 142тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/53ec6c8a20567.jpg" width="300" height="182" alt="Ajman Saray A Luxury Collection Resort" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Аджман, ОАЭ</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Ajman Saray A Luxury Collection Resort</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 776 601тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5ce03c97f38e2.JPG" width="300" height="182" alt="Stella di MAre Beach Hotel and Spa" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Stella di MAre Beach Hotel and Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5c3761d6e77f2.jpg" width="300" height="182" alt="Coral Sea Sensatori Resort" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Рас Носрани, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Coral Sea Sensatori Resort</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 959 131тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5bc85ad12b827.jpg" width="300" height="182" alt="Sultan Gardens Resort SHarm El Sheikh" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Fujairah Rotana Resort & Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5c39dac0cbf7e.jpg" width="300" height="182" alt="Sultan Gardens Resort SHarm El Sheikh" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Fujairah Rotana Resort & Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/23523_1.jpg" width="300" height="182" alt="Sultan Gardens Resort SHarm El Sheikh" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Fujairah Rotana Resort & Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            <div class="flex flex-col justify-between text-left text-black border border-solid border-gray-300 rounded-lg" style="max-width: 300px;">
                                <div class="mb-3">
                                    <img src="images/5c1a5b9781578.jpg" width="300" height="182" alt="Sultan Gardens Resort SHarm El Sheikh" class="mb-4 rounded-t-lg object-cover">
                                    <div class="px-5">
                                        <div class="mb-2 flex justify-between items-start">
                                            <span class="mt-px block text-base">Шарм-эль-Шейх, Египет</span>
                                            <div class="py-px px-2 flex items-center justify-between h-5 border border-solid border-orange-500 rounded">
                                                <span class="block text-sm font-bold" style="margin-right: 3px;"> 5 </span>
                                                <img src="images/yellow_star.svg" role="presentation" width="15" height="15">
                                            </div>
                                        </div>
                                        <span class="block text-x1 font-bold">Fujairah Rotana Resort & Spa</span>
                                    </div>
                                </div>
                                <div class="px-5 pb-6">
                                    <span class="mb-2 block text-3x1">от 823 788тг.</span>
                                    <span class="mb-4 block text-sm">2 чел / 6-7 ночей, перелет включен</span>
                                    <button class="base-button p-3 w-full font-bold --default --outline" type="button" style="font-size: 16px; border-width: 2px; border-radius: 8px;">Оставить заявку</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <button type="button" class="tours-carousel-btn --left mr-5"></button>
                    <button type="button" class="tours-carousel-btn --right"></button>
                </div>
            </section>
            <div>
                <section class="relative tours-container">
                    <h2 class="mt-0 mb-10 text-center text-5x1 font-extrabold text-black">Оставьте заявку, мы перезвоним вам</h2>
                    <div class="bg-white rounded-2x1 mb-24 mx-auto px-10 py-12 text-x1" style="max-width: 460px">
                        <div>
                            <div class="flex flex-col mb-4">
                                <div class="relative">
                                    <input type="text" placeholder="Имя" class="p-4 w-full text-x1 text-black bg-gray-300 rounded-lg border-none">
                                </div>
                                <div class="relative mt-6">
                                    <input type="tel" inputmode="tel" placeholder="Номер телефона" class="w-full p-4 text-x1 text-black bg-gray-300 rounded-lg border-none">
                                </div>
                                <button class="base-button mt-6 p-4 flex justify-center rounded-lg --default --accent" type="submit" style="font-size: 20px; font-weight: 700; border-radius: 8px;">
                                    <span>Оставить заявку</span>
                                </button>
                            </div>
                            <div class="text-black text-base">
                                <span class="font-bold">Доступные направления:</span> <span>Турция, Египет, Тайланд, Мальдивы, ГОА, Шри-Ланка</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-10 px-24 flex justify-between items-center text-x1 bg-blue-500 rounded-2x1">
                        <h3 class="text-white font-bold">Забронируйте отель заранее</h3>
                        <a href="https://sp.booking.com/main.php?aid=860418" target="_blank" class="flex px-6 py-4 font-semibold text-black no-underline bg-white" style="height: 25px; border-radius: 100px; ">Перейти на Booking.com</a>
                    </div>
                    <img src="images/tourist_2.webp" role="presentation" width="373" height="664" class="absolute" style="bottom: 45px; left: -70px;">
                </section>
            </div>
        </section>
    </section>




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