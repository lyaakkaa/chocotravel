<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chocotravel</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="smi.css">
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
                    <h1 class="heading-action-medium" align="center">СМИ о нас</h1>
                    <div class="content">
                        <div id="articles">
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/08bmwvvymkjlcv6qyimu.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Жителям Алматинской области предложили бесплатно слетать в Москву
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/jitelyam-almatinskoy-oblasti-predlojili-besplatno-sletat-300232/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис по продаже авиабилетов и брони отелей по всему миру Chocotravel.com продолжает свою провокационную деятельность. Сот...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/jitelyam-almatinskoy-oblasti-predlojili-besplatno-sletat-300232/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 11 августа 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/moz1ydofooegeidb70gm.png') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">На 8% упал рынок авиабилетов в Казахстане с начала 2016</p>
                                </div>
                                <a class="nofollowlink" data-link="http://forbes.kz/news/2016/08/03/newsid_117320/">
                                    <div class="short_desc_container">
                                        Между тем, председатель правления Altyn Bank Аскар Смагулов рассказал о появившейся в Казахстане возможности приобрести авиабилеты в расс...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://forbes.kz/news/2016/08/03/newsid_117320/" style="font-size: 12px!important;">forbes.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 03 августа 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/maqmvgysxg9zdj5bynbn.png') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">1 год после объединения Aviata и Chocotravel: останутся ли оба бренда на рынке?
                
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="https://forbes.kz//finances/markets/budut_li_suschestvovat_brendyi_aviata_i_chocotravel/">
                                    <div class="short_desc_container">
                                        Об этом и многом другом в интервью Forbes.kz рассказал директор объединённой компании Chocotravel и Aviata Николай Мазенцев ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://forbes.kz//finances/markets/budut_li_suschestvovat_brendyi_aviata_i_chocotravel/" style="font-size: 12px!important;">Forbes.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 29 мая 2019 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/5j360putqmg1gemph2pm.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">На 8% упал рынок авиабилетов в Казахстане с начала 2016 года</p>
                                </div>
                                <a class="nofollowlink" data-link="http://www.inform.kz/rus/article/2932741">
                                    <div class="short_desc_container">
                                        Как поясняется, сервис по онлайн-продаже авиабилетов Chocotravel и цифровой банк Altyn-I предлагают приобрести авиабилеты в любом направл...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://www.inform.kz/rus/article/2932741" style="font-size: 12px!important;">inform.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 03 августа 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/hhfjqkokqm7mkii3a3g1.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Средний чек на авиабилеты в Казахстане вырос почти на 70 процентов
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/kazakhstan_news/sredniy-chek-aviabiletyi-kazahstane-vyiros-na-70-protsentov-299832/">
                                    <div class="short_desc_container">
                                        Если в 2014 году 78 процентов авиабилетов продавалось за границу, то в 2016 году уже 64 процента. В результате чего структура спроса стал...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/kazakhstan_news/sredniy-chek-aviabiletyi-kazahstane-vyiros-na-70-protsentov-299832/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 03 августа 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/qm1eyituntdw4mjzfsfs.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Замены внешнего туризма локальным после девальвации не произошло – Chocotravel</p>
                                </div>
                                <a class="nofollowlink" data-link="https://vlast.kz/novosti/18635-zameny-vnesnego-turizma-lokalnym-posle-devalvacii-ne-proizoslo-chocotravel.php">
                                    <div class="short_desc_container">
                                        Экономический кризис не способствовал развитию локального туризма, тем не менее, ситуация на рынке авиабилетов может стабилизироваться к ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://vlast.kz/novosti/18635-zameny-vnesnego-turizma-lokalnym-posle-devalvacii-ne-proizoslo-chocotravel.php" style="font-size: 12px!important;">vlast.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 03 августа 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/dgs4oym54xgatpco2bby.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Автобусные билеты на Иссык-Куль и Алаколь теперь можно купить онлайн</p>
                                </div>
                                <a class="nofollowlink" data-link="http://profit.kz/news/33354/Avtobusnie-bileti-na-Issik-Kul-i-Alakol-teper-mozhno-kupit-onlajn/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис Chocotravel объвил о запуске онлайн-продажи билетов на автобусы по маршруту Алматы-Иссык-Куль-Алматы и Алматы-Алакол...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://profit.kz/news/33354/Avtobusnie-bileti-na-Issik-Kul-i-Alakol-teper-mozhno-kupit-onlajn/" style="font-size: 12px!important;">profit.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 11 июля 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/skibioz18otgoibx73t7.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Алматинцы боролись за право съездить в заповедник Катон-Карагай</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/almatintsyi-borolis-pravo-syezdit-zapovednik-katon-karagay-298149/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис по продаже авиабилетов и бронированию отелей по всему миру Chocotravel.com продолжает серию вирусных роликов, когда ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/almatintsyi-borolis-pravo-syezdit-zapovednik-katon-karagay-298149/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 07 июля 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/oheuw272ffposutakk2f.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Chocofamily привлек более $1 млн инвестиций</p>
                                </div>
                                <a class="nofollowlink" data-link="http://profit.kz/news/31231/Chocofamily-privlek-bolee-1-mln-investicij/">
                                    <div class="short_desc_container">
                                        Представители интернет-холдинга Chocofamily сообщили Profit.kz о привлечении более одного миллиона долларов инвестиций. Большая часть при...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://profit.kz/news/31231/Chocofamily-privlek-bolee-1-mln-investicij/" style="font-size: 12px!important;">profit.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 24 мая 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/kpm5qzimpo6ymbwggqwh.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Сколько стоит отдохнуть этим летом?</p>
                                </div>
                                <a class="nofollowlink" data-link="https://kapital.kz/economic/50365/skolko-stoit-otdohnut-etim-letom.php">
                                    <div class="short_desc_container">
                                        Из-за кризиса кошельки путешественников заметно похудели. Это связано и с ростом цен внутри страны, и с тем, что за границей все продаетс...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://kapital.kz/economic/50365/skolko-stoit-otdohnut-etim-letom.php" style="font-size: 12px!important;">kapital.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 18 мая 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/xfq3bugdp2adbrwqkodq.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">К конкуренции относимся серьезно, но коленки не дрожат</p>
                                </div>
                                <a class="nofollowlink" data-link="https://kapital.kz/experts/50036/k-konkurencii-otnosimsya-serezno-no-kolenki-ne-drozhat.php">
                                    <div class="short_desc_container">
                                        Онлайн-продажа авиабилетов считается одним из самых быстроразвивающихся сегментов электронной коммерции. Многие пользователи уже не прост...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://kapital.kz/experts/50036/k-konkurencii-otnosimsya-serezno-no-kolenki-ne-drozhat.php" style="font-size: 12px!important;">kapital.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 05 мая 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/qi6txdtbbi7ynkqquv1d.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Соучредитель Chocofamily и Chocotravel встретился со студентами AlmaU</p>
                                </div>
                                <a class="nofollowlink" data-link="http://www.almau.edu.kz/news/11357">
                                    <div class="short_desc_container">
                                        7 апреля 2016 года в Almaty Management University прошла гостевая лекция Николая Мазенцева, соучредителя Chocofamily, директора компании ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://www.almau.edu.kz/news/11357" style="font-size: 12px!important;">almau.edu.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 07 апреля 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/7lk1i2ccyisellxetgiz.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Астанчанам предлагали бесплатно слетать в Усть-Каменогорск</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/astanchanam-predlagali-besplatno-sletat-v-ust-kamenogorsk-288352/">
                                    <div class="short_desc_container">
                                        Сайт по продаже авиабилетов Chocotravel.com продолжает свою "провокационную" деятельность. В течение полугода представители интернет-серв...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/astanchanam-predlagali-besplatno-sletat-v-ust-kamenogorsk-288352/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 03 февраля 2016 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/akfdh8dfqnwt65xv95lz.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Алматинцам предлагали бесплатно слетать в Боровое</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/almatintsam-predlagali-besplatno-sletat-v-borovoe-286541/">
                                    <div class="short_desc_container">
                                        Сайт по продаже авиабилетов Chocotravel.com и национальный авиаперевозчик Air Astana продолжают свою акцию, когда любой прохожий может в...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/almatintsam-predlagali-besplatno-sletat-v-borovoe-286541/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 30 декабря 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/khcwwqac8juab7rbzovq.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">ВЫГОДНО ОНЛАЙН
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="http://and.kz/site/article/2202">
                                    <div class="short_desc_container">
                                        Современные путешественники предпочитают планировать отдых с максимальной для себя выгодой. Поэтому они все реже обращаются в фирмы-посре...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://and.kz/site/article/2202" style="font-size: 12px!important;">and.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 15 декабря 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/cgue6xfw5znlfrc7bdvy.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Павлодарцам предлагали бесплатно слетать в Алматы</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/pavlodartsam-predlagali-besplatno-sletat-v-almatyi-284117/">
                                    <div class="short_desc_container">
                                        Сайт по продаже авиабилетов Chocotravel.com и национальный авиаперевозчик Air Astana продолжают приятно удивлять казахстанцев. Случайным ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/pavlodartsam-predlagali-besplatno-sletat-v-almatyi-284117/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 16 ноября 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/iz9esxhpe8lfb1n9hoxd.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Алматинцам предложили бесплатно слетать в Татарстан</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/money/almatintsam-predlojili-besplatno-sletat-v-tatarstan-282681/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис по продаже авиабилетов Chocotravel.com вместе с национальным аваперевозчиком "Эйр Астана" продолжает серию вирусных ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/money/almatintsam-predlojili-besplatno-sletat-v-tatarstan-282681/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 20 октября 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/6b2wpachlv9slkeyhjfg.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">50 крупнейших интернет-компаний</p>
                                </div>
                                <a class="nofollowlink" data-link="http://forbes.kz//process/internet/5o_krupneyshih_internet-kompaniy/">
                                    <div class="short_desc_container">
                                        Онлайн-продажи одежды, бытовой техники и авиабилетов значительно увеличились в минувшем году. Виртуальное пространство вербует все больше...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://forbes.kz//process/internet/5o_krupneyshih_internet-kompaniy/" style="font-size: 12px!important;">forbes.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 01 сентября 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/kew8co9wo1i5g0drjhy6.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Сервис по продаже авиабилетов отправил пассажира метро к морю</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/servis-prodaje-aviabiletov-otpravil-passajira-metro-moryu-280469/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис по продаже авиабилетов Chocotravel.com продолжает открывать казахстанцам их страну. В прошлый раз случайные прохожие...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/servis-prodaje-aviabiletov-otpravil-passajira-metro-moryu-280469/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 08 сентября 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/k3tixoedshh4i6djbup3.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Сайт Chocotravel.com распродает авиабилеты по курсу 189 тенге за доллар
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/travel/sayt-Chocotravelcom-rasprodaet-aviabiletyi-kursu-189-tenge-279545/">
                                    <div class="short_desc_container">
                                        Второй день подряд онлайн-сервис по продаже авиабилетов Chocotravel.com бьет рекорды продаж. Связано это с тем, что, несмотря на вчерашне...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/travel/sayt-Chocotravelcom-rasprodaet-aviabiletyi-kursu-189-tenge-279545/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 20 августа 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/xv8e88zurlir2zq8avri.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Сервис по продаже авиабилетов отправил случайного прохожего в Шымкент
                                    </p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/strange_news/servis-prodaje-aviabiletov-otpravil-sluchaynogo-prohojego-279138/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис по продаже авиабилетов Chocotravel.com продолжает удивлять казахстанцев. Напомним, в прошлый раз они отправили в Аст...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/strange_news/servis-prodaje-aviabiletov-otpravil-sluchaynogo-prohojego-279138/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 12 августа 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/ryvacewwxpwiva3vpxae.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Сервис по продаже авиабилетов устроил неожиданный сюрприз для алматинцев</p>
                                </div>
                                <a class="nofollowlink" data-link="https://tengrinews.kz/kazakhstan_news/servis-prodaje-aviabiletov-ustroil-neojidannyiy-syurpriz-277318/">
                                    <div class="short_desc_container">
                                        Казахстанский сервис Chocotravel.com, который занимается продажей авиабилетов, устроил неожиданный сюрприз для прохожих в Алматы ко Дню с...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="https://tengrinews.kz/kazakhstan_news/servis-prodaje-aviabiletov-ustroil-neojidannyiy-syurpriz-277318/" style="font-size: 12px!important;">tengrinews.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 07 июля 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/xrhltrrzxaxmd4gd5q92.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Онлайн-продажи авиабилетов в Казахстане будут расти ежегодно на 30%</p>
                                </div>
                                <a class="nofollowlink" data-link="http://lsm.kz/onlajn-prodazhi-aviabiletov-v-kazahstane-budut-rasti-ezhegodno-na-30">
                                    <div class="short_desc_container">
                                        Эксперты прогнозируют рост казахстанского рынка онлайн-продаж авиабилетов на 30% ежегодно. В течение пяти-десяти лет доля продаж авиабиле...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://lsm.kz/onlajn-prodazhi-aviabiletov-v-kazahstane-budut-rasti-ezhegodno-na-30" style="font-size: 12px!important;">lsm.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 04 июня 2015 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/hk5xvgehg5b7ictzjpiy.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">AWARD.KZ 2014 – ПОБЕДИТЕЛИ 12-го сезона</p>
                                </div>
                                <a class="nofollowlink" data-link="http://www.award.kz/blog/show/id/54">
                                    <div class="short_desc_container">
                                        Традиционно, в конце ноября, отечественная интернет-общественность становится свидетельницей награждения лучших сайтов Казахстана. Конку...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://www.award.kz/blog/show/id/54" style="font-size: 12px!important;">award.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 20 ноября 2014 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/3a8yv3z1hwdll4azjcuh.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Эксперт: в Казахстане менее 10% авиабилетов продаются онлайн</p>
                                </div>
                                <a class="nofollowlink" data-link="http://total.kz/business/itcompanies/2014/12/15/ekspert_v_kazahstane_menee_10">
                                    <div class="short_desc_container">
                                        Бизнес по продаже авиабилетов онлайн – один из самых быстроразвивающихся в Казахстане, констатируют эксперты. По их прогнозам этот рынок ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://total.kz/business/itcompanies/2014/12/15/ekspert_v_kazahstane_menee_10" style="font-size: 12px!important;">total.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 15 декабря 2014 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/y8t5cqox55rjv6ze7mxk.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Алишер Еликбаев начал продавать авиабилеты</p>
                                </div>
                                <a class="nofollowlink" data-link="http://forbes.kz//process/internet/alisher_elikbaev_nachal_prodavat_aviabiletyi/">
                                    <div class="short_desc_container">
                                        До 1 млрд тенге намерен увеличить продажи авиабилетов через онлайн-сервис chocotravel.com бывший руководитель проекта Vox Populi ...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://forbes.kz//process/internet/alisher_elikbaev_nachal_prodavat_aviabiletyi/" style="font-size: 12px!important;">forbes.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 05 сентября 2014 г.</p>
                                </div>
                            </div>
                            <div class="article_tab">
                                <div class="article_image_tab" style="background: url('https://s3.eu-central-1.amazonaws.com/chocotravel/media/images/massmedia/9xvv74myl3uhwxrh2715.jpg') center no-repeat;background-size: contain;">
                
                                </div>
                                <div class="article_heading_tab">
                                    <p class="heading-action-small">Казахстанцы придут к онлайн бронированию туристических продуктов через три года</p>
                                </div>
                                <a class="nofollowlink" data-link="http://halyktravel.kz/kazakhstantsy-pridut-k-onlajn-bronirovaniyu-turisticheskikh-produktov-cherez-tri-goda">
                                    <div class="short_desc_container">
                                        Основатель сервиса chocotravel.com, Николай Мазенцев, отвечает на вопросы нашей редакции, прогнозирует будущее онлайн туризма в Казахстан...</div>
                                </a>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small" style="margin-top: 10px;">Источник: <a class="nofollowlink" data-link="http://halyktravel.kz/kazakhstantsy-pridut-k-onlajn-bronirovaniyu-turisticheskikh-produktov-cherez-tri-goda" style="font-size: 12px!important;">halyktravel.kz</a></p>
                                </div>
                                <div class="article_txt_tab">
                                    <p class="txt-action-small">Опубликовано: 15 января 2014 г.</p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
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