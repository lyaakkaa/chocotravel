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
    <main class="flex flex-col w-full min-h-full bg-gray-300">
        <header class="flex flex-shrink-0 mb-1">
            <div class="w-desktop mx-auto space-y-4">
                <section class="flex justify-between py-4.5">
                    <a href="https://www.chocotravel.com/ru/">
                        <picture>
                            <source type="image/webp" srcset="data:image/webp;base64,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">
                            <source type="image/png" srcset="data:image/png;base64,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"><img data-v-befade40="" src="data:image/png;base64,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"
                                alt="Логотип Chocotravel" width="204" height="35">
                        </picture>
                    </a>
                    <div class="flex items-center relative"><a href="https://b2b.chocotravel.com/ru/landing" class="flex items-center space-x-1"><img data-v-befade40="" src="/cabinet/assets/images/handshake-c05827f3.svg" width="20" height="20" alt=""><p data-v-befade40="" class="text-sm leading-5 text-black-primary"> Корпоративным клиентам </p></a>
                        <button type="button" class="header-item ml-8 border-2 border-blue-550 text-blue-550"> Выйти </button><a data-v-befade40="" href="/cabinet/" aria-current="page" class="header-item ml-3 mr-17 bg-blue-550 text-white router-link-exact-active router-link-active"> Личный кабинет </a>
                        <div class="locales-block-position"><button type="button" class="flex items-center w-full text-black-primary justify-end" data-v-bcb6ffcc=""><span class="text-sm leading-5"> Рус </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="duration-200 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m8 10 4 4 4-4"></path></svg></button>

                        </div>
                    </div>
                </section>
                <nav>
                    <ul class="flex space-x-2">
                        <li class="bg-white rounded-xl"><a href="https://www.chocotravel.com/ru/" class="flex items-center w-fit space-x-2 px-3 py-2.5"><img src="https://www.chocotravel.com/cabinet/assets/images/plane-4cfc07e4.svg" width="20" height="20" alt="Открыть страницу поиска авиабилетов"><h4 class="text-sm leading-6.5 text-black-primary"> Авиабилеты </h4></a></li>
                        <li class="bg-white rounded-xl"><a href="https://www.chocotravel.com/ru/railways" class="flex items-center w-fit space-x-2 px-3 py-2.5"><img src="https://www.chocotravel.com/cabinet/assets/images/train-f207374a.svg" width="20" height="20" alt="Открыть страницу поиска Ж/Д билетов"><h4 class="text-sm leading-6.5 text-black-primary"> ЖД билеты </h4></a></li>
                        <li class="bg-white rounded-xl"><a href="https://www.booking.com/?aid=874524" class="flex items-center w-fit space-x-2 px-3 py-2.5"><img src="https://www.chocotravel.com/cabinet/assets/images/hotel-aa6cb134.svg" width="20" height="20" alt="Открыть страницу поиска отелей"><h4 class="text-sm leading-6.5 text-black-primary"> Отели </h4></a></li>
                        <li class="bg-white rounded-xl"><a href="https://www.chocotravel.com/ru/rentalcars" class="flex items-center w-fit space-x-2 px-3 py-2.5"><img src="https://www.chocotravel.com/cabinet/assets/images/car-2e12ffc8.svg" width="20" height="20" alt="Открыть страницу поиска автомобиля для аренды"><h4 class="text-sm leading-6.5 text-black-primary"> Аренда авто </h4></a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="flex-grow w-desktop mx-auto min-h-screen">
            <section class="my-4">
                <header class="bg-white rounded-t-lg shadow" phone-number="8 (778) 421-12-43">
                    <div class="p-4 space-y-4 border-solid border-0 border-b border-gray-300">
                        <div class="flex items-center justify-between">
                            <h2 class="m-0 text-black text-xl font-semibold">Личный кабинет</h2>
                            <p class="m-0 space-x-2"><span data-qa-id="CabinetHeader.Username">+7 (747) 152-76-06</span></p>
                        </div>
                        <div class="flex items-center justify-between">
                            <ul class="flex items-center space-x-6">
                                <li><a href="/cabinet/" data-qa-id="CabinetHeader.OrdersLink" class="cabinet-link flex items-center py-1 px-4 text-sm font-semibold no-underline transition duration-300 bg-blue-500 hover:bg-blue-600 text-white space-x-2 whitespace-no-wrap"
                                        style="border-radius: 30px;"><svg width="20" height="20" fill="none" stroke="#FFF" xmlns="http://www.w3.org/2000/svg"><path d="M2.083 7.5v9.167c0 .46.373.833.834.833h14.166c.46 0 .834-.373.834-.833V7.5a.833.833 0 0 0-.834-.833H2.917a.833.833 0 0 0-.834.833Z" stroke-width="1.5" stroke-linejoin="round"></path><path d="m3.75 6.667 9.583-4.584 2.084 4.584" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.417 10.417a.833.833 0 1 0 0-1.667.833.833 0 0 0 0 1.667ZM5.417 12.917a.833.833 0 1 0 0-1.667.833.833 0 0 0 0 1.667ZM5.417 15.417a.833.833 0 1 0 0-1.667.833.833 0 0 0 0 1.667Z" fill="#fff"></path><path d="M8.75 14.583h1.667l4.583-5M10 12.083h2.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg><span>Заказы</span></a></li>
                                <li><a href="https://www.chocotravel.com/ru/cabinet/passengers" data-qa-id="CabinetHeader.PassengersLink" class="cabinet-link flex items-center py-1 px-4 text-sm font-semibold no-underline transition duration-300 space-x-2 bg-gray-200 hover:bg-gray-300 text-black"
                                        style="border-radius: 30px;"><svg width="20" height="20" fill="none" stroke="#387FBF" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.166 17.5v-1.667a3.333 3.333 0 0 0-3.333-3.333H4.166a3.333 3.333 0 0 0-3.333 3.333V17.5M7.5 9.167a3.333 3.333 0 1 0 0-6.667 3.333 3.333 0 0 0 0 6.667ZM19.166 17.5v-1.667a3.333 3.333 0 0 0-2.5-3.225M13.333 2.608a3.333 3.333 0 0 1 0 6.459"></path></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h20v20H0z"></path></clipPath></defs></svg><span>Пассажиры</span></a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <section class="open-sans">
                    <div class="flex items-center justify-between p-4 bg-white shadow rounded-b-lg">
                        <div dir="auto" class="dropdown v-select choco-select w-82 py-2 px-4 border border-solid border-gray-400 rounded-lg single searchable" data-qa-id="Orders.OrderFilterTypes">
                            <div class="dropdown-toggle">
                                <div class="vs__selected-options"><span class="selected-tag">
            Все заказы
           <!----></span> <input type="search" autocomplete="off" role="combobox" aria-label="Search for option" class="form-control"></div>
                                <div class="vs__actions"><button type="button" title="Clear selection" class="clear" style="display: none;"><span aria-hidden="true">×</span></button> <i role="presentation" class="open-indicator"></i>
                                    <div class="spinner" style="display: none;">Loading...</div>
                                </div>
                            </div>
                            <!---->
                        </div>
                        <div class="inline-block p-1 rounded-lg relative bg-gray-200 rounded-lg" data-qa-id="Orders.AviaRailwaysSwitcher">
                            <div class="relative z-10 flex"><button type="button" data-id="avia" class="ml-1 sm:px-6 py-2 px-0 sm:text-sm text-xs border-none rounded-lg focus:shadow-outline cursor-pointer first:ml-0 leading-relaxed appearance-none bg-transparent transition-colors duration-300 ease-in rounded-lg w-40 text-white"> Авиабилеты </button>
                                <button type="button" data-id="railways" class="ml-1 sm:px-6 py-2 px-0 sm:text-sm text-xs border-none rounded-lg focus:shadow-outline cursor-pointer first:ml-0 leading-relaxed appearance-none bg-transparent transition-colors duration-300 ease-in rounded-lg w-40 text-blue-500">
                                ЖД билеты </button>
                            </div>
                            <div class="absolute top-0 mt-1 z-0 bg-blue-500 rounded-lg shadow-md duration-500 transition-all" style="left: 4px; width: 160px; height: 38.75px;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col lg:flex-row items-center justify-evenly w-full py-8 lg:py-10 bg-white rounded-lg shadow mt-4">
                            <picture>
                                <source type="image/webp" srcset="/cabinet/assets/images/empty-orders-be24de1e.webp">
                                <source type="image/png" srcset="/cabinet/assets/images/empty-orders-0e859c0c.png"><img src="/cabinet/assets/images/empty-orders-0e859c0c.png" role="presentation" alt="" class="empty-orders-image"></picture>
                            <div>
                                <h5 data-qa-id="EmptyOrderList.NoOrderText" class="mt-4 lg:mt-0 mb-4 text-black text-base lg:text-xl font-semibold text-center"> У вас еще нет заказов </h5>
                                <p class="my-0 text-black text-center leading-normal">Воспользуйтесь поиском <br> и отправляйтесь в путешествие</p><a href="https://www.chocotravel.com/ru/" data-event="EmptyOrderList.FindTicketsButton" class="block w-48 mt-8 lg:mt-10 mx-auto p-2 lg:p-3 bg-blue-500 hover:bg-blue-600 rounded-lg text-sm text-white font-bold text-center no-underline leading-relaxed lg:leading-snug transition duration-300"> Найти билеты </a></div>
                        </div>
                        <!---->
                    </div>
                </section>
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

    </main>
</body>

</html>