<?php
require("../admin/database/db.php");
require("../admin/templates/Block.php");

use Templates\Block;

$_GET["url"] = explode("/", $_GET["url"])[1];

$page = R::findOne("pages", "WHERE url=:url", ["url" => $_GET["url"]]);

$tagged_pages = R::getAll("SELECT * FROM pages WHERE tag=:tag", ["tag" => $page->tag]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?=$page->description?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../tiger.css/reset.css">
    <link rel="stylesheet" href="../tiger.css/tiger.css">
    <link rel="stylesheet" href="../tiger.css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="icon" href="../favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.8.0/dist/css/suggestions.min.css" type="text/css"
          rel="stylesheet"/>


    <title><?= $page->title ?></title>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter49902688 = new Ya.Metrika2(
                        {
                            id: 49902688,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                        }
                    );
                } catch (e) {
                }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/49902688" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114748239-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-114748239-1');
    </script>
</head>

<body>
<header class="third_level_header" style="background-image: url(<?= $page->img_first ?>)">
    <div class="header_menu_open">
        <div class="header_contacts">
            <div class="header_logo"></div>
            <div class="header_contacts_info">
                <div class="header_contacts_info_item">
                    <div class="header_phone_info">
                        <a class="header_contacts_item__telephon" href='tel:8 (800) 700-09-35'>
                            <svg enable-background="new 0 0 348.1 348.1" version="1.1" viewBox="0 0 348.1 348.1"
                                 xml:space="preserve">
                                    <path fill="#ffffff"
                                          d="m340.3 275.1l-53.8-53.8c-10.7-10.7-28.4-10.3-39.5 0.7l-27.1 27.1c-1.7-0.9-3.5-1.9-5.3-3-17.1-9.5-40.5-22.5-65.1-47.1-24.7-24.7-37.7-48.1-47.2-65.3-1-1.8-2-3.6-2.9-5.2l18.2-18.1 8.9-8.9c11.1-11.1 11.4-28.8 0.7-39.5l-53.8-53.8c-10.7-10.7-28.4-10.4-39.5 0.7l-15.2 15.3 0.4 0.4c-5.1 6.5-9.3 14-12.5 22-2.9 7.7-4.7 15-5.6 22.3-7 58.9 19.9 112.7 92.9 185.6 100.9 100.9 182.2 93.2 185.7 92.9 7.6-0.9 15-2.7 22.4-5.6 8-3.1 15.5-7.4 21.9-12.4l0.3 0.3 15.3-15c11.1-11.2 11.5-28.9 0.8-39.6z"/>
                                </svg>
                            8 (800) 700-09-35</a>
                        <span class="header_contacts_item__tel_comment">Звонок по России бесплатный</span>
                    </div>
                    <div class="header_email_info">
                        <span class="header_email">autotransport24@yandex.ru</span>
                    </div>
                </div>
                <button class="btn header_contacts_info_item__btn" onclick="modal_on_second()">Заказать звонок</button>
                <span class="burger_menu_title">Меню</span>
            </div>
        </div>
        <div class="header_menu_open_image"></div>
        <nav class="header_menu_open_nav">
            <ul>
                <li class="header_menu_open_nav_point">
                    <a data-scroll href="#services">
                        <div class="header_menu_open_nav_decoration"></div>
                        Услуги
                    </a>
                </li>
                <li class="header_menu_open_nav_point">
                    <a data-scroll href="#advantages">
                        <div class="header_menu_open_nav_decoration"></div>
                        Преимущества
                    </a>
                </li>
                <li class="header_menu_open_nav_point">
                    <a data-scroll href="#about">
                        <div class="header_menu_open_nav_decoration"></div>
                        О компании
                    </a>
                </li>
                <li class="header_menu_open_nav_point">
                    <a data-scroll href="#clients_review">
                        <div class="header_menu_open_nav_decoration"></div>
                        Отзывы
                    </a>
                </li>
                <li class="header_menu_open_nav_point">
                    <a data-scroll id="to_payment_info" href="../posts">
                        <div class="header_menu_open_nav_decoration"></div>
                        Статьи
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header_wrap"></div>
    <div class="header_contacts">
        <a href="../">
            <div class="header_logo"></div>
        </a>
        <div class="header_contacts_info">
            <div class="header_contacts_info_item">
                <div class="header_phone_info">
                    <a class="header_contacts_item__telephon" href='tel:8 (800) 700-09-35'>
                        <svg enable-background="new 0 0 348.1 348.1" version="1.1" viewBox="0 0 348.1 348.1"
                             xml:space="preserve">
                                <path fill="#ffffff"
                                      d="m340.3 275.1l-53.8-53.8c-10.7-10.7-28.4-10.3-39.5 0.7l-27.1 27.1c-1.7-0.9-3.5-1.9-5.3-3-17.1-9.5-40.5-22.5-65.1-47.1-24.7-24.7-37.7-48.1-47.2-65.3-1-1.8-2-3.6-2.9-5.2l18.2-18.1 8.9-8.9c11.1-11.1 11.4-28.8 0.7-39.5l-53.8-53.8c-10.7-10.7-28.4-10.4-39.5 0.7l-15.2 15.3 0.4 0.4c-5.1 6.5-9.3 14-12.5 22-2.9 7.7-4.7 15-5.6 22.3-7 58.9 19.9 112.7 92.9 185.6 100.9 100.9 182.2 93.2 185.7 92.9 7.6-0.9 15-2.7 22.4-5.6 8-3.1 15.5-7.4 21.9-12.4l0.3 0.3 15.3-15c11.1-11.2 11.5-28.9 0.8-39.6z"/>
                            </svg>
                        8 (800) 700-09-35</a>
                    <span class="header_contacts_item__tel_comment">Звонок по России бесплатный</span>
                </div>
                <div class="haeder_email_info">
                    <span class="header_email">autotransport24@yandex.ru</span>
                </div>
            </div>
            <button class="btn header_contacts_info_item__btn" onclick="modal_on_second()">Заказать звонок</button>
            <div class="header_menu">
                <div class="header_burger_menu">
                    <div class="menu__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <span class="burger_menu_title">Меню</span>
            </div>
        </div>
    </div>
    <div class="header_content">
        <h2><?= $page->offer ?></h2>
        <p class="visible_header_text"><?= $page->content ?></p>
        <p class="invisible_header_text"><?= $page->content ?></p>
        <div class="header_count">

            <div class="invisible_header_counter">
                <span class="invisible_header_counter_item">1</span>/4
            </div>

            <form class="header_count_form" id="form1" method="post" action="../thanks_window.php">
                <input id='ADDRESS_FROM_HEADER' class="header_count_form_input invisible_header_input"
                       name="ADDRESS_FROM_HEADER"
                       type="text" placeholder="Город отправления" required>
                <input id="ADDRESS_TO_HEADER" name="ADDRESS_TO_HEADER"
                       class="header_count_form_input invisible_header_input"
                       type="text" placeholder="Город доставки" required>
                <input class="header_count_form_input invisible_header_input" name="weight" type="text"
                       placeholder="Масса груза, кг" required>
                <input class="header_count_form_input invisible_header_input" name="header_telephone" type="text"
                       placeholder="Контактный телефон" required>
                <button id="next" class="header_count_form__btn invisible_header_btn">Далее</button>
                <input class="header_count_form__btn" id="form1_btn" name="form1" type="submit" value="Быстрый рассчет">
            </form>
            <div class="policy">*оставляя заявку, вы соглашаетесь с <a href="../politikaconf.pdf" target="_blank">политикой конфиденциальности сайта</a></div>
        </div>
    </div>
    <div class="header_decoration_line">
        <svg enable-background="new 0 0 5333 885.4" version="1.1" viewBox="0 0 5333 885.4" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #E0E0E0;
                    }
                </style>
            <polygon class="st0" points="5350.5 904 -12.4 904 -29 559 1847 575 3770.1 435.9 5351 297.1"/>
            <polygon class="st0" points="-6.1 841.3 1889.5 685.3 3170.1 484.9 5340.8 289.4 5333.4 892.2 1.6 892.2"/>
            <polygon class="st1" points="5333 473 5333 283 3579.7 447"/>
            <polygon points="1.1 676 1876.3 625 3680.1 438.9 1848.9 558.3 0.2 548.9"/>
            <polygon class="st1" points="-1.4 672.8 1873.7 621.8 3173 494 1921 700 -1.8 862.5"/>
            </svg>
    </div>
</header>
<section class="article">
    <h2><?= $page->text_title ?></h2>
    <div class="article_content">
        <div class="article_content_text">
            <div class="text_wrap">
                <p><?= $page->text ?></p>
            </div>
            <button class="article__btn btn" onclick="modal_on_second()">Заказать грузоперевозку</button>
        </div>
        <div class="article_content_image" style="background-image: url(<?= $page->img_second ?>)"></div>
    </div>
</section>
<section class="online_apply">
    <h2><span class="apply_title_styled">ОНЛАЙН ЗАЯВКА</span> НА РАСЧЕТ <br> СТОИМОСТИ ДОСТАВКИ ГРУЗА</h2>
    <p>Предоставляем услуги погрузки и упаковки груза в каждом городе России.</p>
    <div class="online_apply_content">
        <form class="online_apply_content_form" action="../thanks_window.php" method="post">
            <div class="form_item">
                <span class="form_input_span">Откуда</span>
                <input id="ADDRESS_FROM_FOOTER" name="ADDRESS_FROM_FOOTER" type="text" size="100"
                       class="online_apply_content_style apply_count_form_input"
                       placeholder="Из города">
            </div>
            <div class="form_item">
                <span class="form_input_span">Куда</span>
                <input id="ADDRESS_TO_FOOTER" name="ADDRESS_TO_FOOTER"
                       class="online_apply_content_style apply_count_form_input"
                       type="text" placeholder="В город">
            </div>
            <div class="form_item">
                <span class="form_input_span">Масса груза, кг</span>
                <select name="weight_footer" class="online_apply_content_style online_apply_select styled-select slate">
                    <option>до 2 тонн</option>
                    <option>до 5 тонн</option>
                    <option>до 10 тонн</option>
                    <option>до 20 тонн</option>
                </select>
                <label class="form_item_checkbox">
                    <input name="lifters" type="checkbox">
                    </input>
                    <div class="form_item_checkbox_wrap">
                        <span class="icon-check"></span>
                    </div>
                    <span class="form_item_checkbox_text">Нужны грузчики</span>
                </label>
            </div>
            <div class="form_item">
                <span class="form_input_span">Тип авто</span>
                <select name="vehicle" class="online_apply_content_style online_apply_select styled-select slate">
                    <option>Газель</option>
                    <option>Бычок</option>
                    <option>КамАЗ</option>
                    <option>Фура</option>
                </select>
            </div>
            <div class="form_item">
                <span class="form_input_span">Дата</span>
                <input name="date" type="date" class="data_picker online_apply_content_style apply_count_form_input"
                       placeholder="Выбрать">
            </div>
            <div class="form_item">
                <span class="form_input_span">Номер телефона</span>
                <input id="telephone_from_footer" name="telephone_from_footer" type="tel"
                       class="online_apply_content_style apply_count_form_input"
                       placeholder="Ваш номер телефона" required>
            </div>
            <div class="form_item">
                <button name="form2" class="online_apply_content_style online_apply_form__btn" type="submit">Рассчитать
                    стоимость
                </button>
            </div>
        </form>
        <div class="policy">*оставляя заявку, вы соглашаетесь с <a href="../politikaconf.pdf" target="_blank">политикой конфиденциальности сайта</a></div>
    </div>
</section>
<section class="blog">
    <h2>НАШИ УСЛУГИ <br>
        грузоперевозок по россии <br>
        отдельным транспортом</h2>
<!--    <div class="blog_decoration_line_first">-->
<!--        <!--?xml version="1.0" encoding="utf-8"?-->
<!--        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!--        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"-->
<!--             x="0px" y="0px" viewBox="0 0 5333 265" style="enable-background:new 0 0 5333 265;" xml:space="preserve">-->
<!--                <style type="text/css">-->
<!--                    .st0 {-->
<!--                        fill: #FFFFFF;-->
<!--                    }-->
<!---->
<!--                    .st1 {-->
<!--                        fill: #F6F6F6;-->
<!--                    }-->
<!---->
<!--                    .st2 {-->
<!--                        fill: #E0E0E0;-->
<!--                    }-->
<!--                </style>-->
<!--            <polygon class="st0" points="5351,133 4323,33 -5,241 -0.8,-6.5 5350,-16 "></polygon>-->
<!--            <path class="st1"-->
<!--                  d="M-2.3,229.7c0,0,4039.3-105.9,4091.3-109.3c10-0.7,1244,127.3,1244,127.3v17.9H-0.8L-2.3,229.7z"></path>-->
<!--            <polygon class="st2" points="-5,231 4299,7 5333,99.1 5333,249.1 4103,123 "></polygon>-->
<!--            </svg>-->
<!--    </div>-->
<!--    <div class="blog_decoration_line_second">-->
<!--        <!--?xml version="1.0" encoding="utf-8"?-->
<!--        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!--        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"-->
<!--             x="0px" y="0px" viewBox="0 0 5333 560" style="enable-background:new 0 0 5333 560;" xml:space="preserve">-->
<!--                <style type="text/css">-->
<!--                    .st0 {-->
<!--                        fill: #FFFFFF;-->
<!--                        stroke: #000000;-->
<!--                        stroke-miterlimit: 10;-->
<!--                    }-->
<!---->
<!--                    .st1 {-->
<!--                        fill: #F6F6F6;-->
<!--                    }-->
<!---->
<!--                    .st2 {-->
<!--                        fill: #E0E0E0;-->
<!--                    }-->
<!---->
<!--                    .st3 {-->
<!--                        fill: #D4D4D4;-->
<!--                    }-->
<!--                </style>-->
<!--            <rect x="-12.6" y="-1.6" class="st0" width="5350.5" height="565"></rect>-->
<!--            <polygon class="st1" points="3607,208 -1,316 3,0 5619,-4 "></polygon>-->
<!--            <polygon class="st2" points="-5.4,545.9 3811,286 5327,26 3463,210 -9,410 "></polygon>-->
<!--            <polygon class="st3" points="-13,304 3463,210 -9,410 "></polygon>-->
<!--            </svg>-->
<!--    </div>-->
    <div class="blog_content">
        <div class="blog_content__images">
            <?
            $tagged_pages = array_reverse($tagged_pages, true);
            $count = 0;

            foreach($tagged_pages as $page) {
                if($count === 6) break;
                echo Block::generate_tagged_block($page["offer"], $page["img_first"]);
                $count++;
            }
            ?>
        </div>
        <div class="blog_content__text">
            <span>А также:</span>
            <div class="my-blog-slider">
                <?= Block::generate_slider_blocks(array_reverse($tagged_pages, true))?>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="payment_info" class="payment_info third_page_type_payment_info">
    <h2>Информация об оплате</h2>
    <div class="payment_info_content">
        <h3>Подробнее о способах оплаты:</h3>
        <div class="payment_info_column">
            <div class="payment_info___type_item">
                <div class="payment_info_type">
                    <div class="payment_info__number">1</div>
                    <span class="payment_type_info_text"
                          id='payment_info_type_first'>Безналичный расчет с НДС 18%</span>
                </div>
                <div id='payment_info_text_first' class="payment_info__type_text">
                    <p>Оплата производится c НДС 18% на основании счета до выгрузки транспортного средства. При
                        некоторых условиях возможна постоплата. Условия уточняйте у менеджера.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type">
                    <div class="payment_info__number">2</div>
                    <span class="payment_type_info_text" id='payment_info_type_second'>Безналичный расчет без НДС</span>
                </div>
                <div id='payment_info_text_second' class="payment_info__type_text">
                    <p>Оплата производится без НДС на основании счета до выгрузки транспортного средства. При
                        некоторых условиях возможна постоплата. Условия уточняйте у менеджера.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type">
                    <div class="payment_info__number">3</div>
                    <span class="payment_type_info_text" id='payment_info_type_third'>Оплата наличными</span>
                </div>
                <div id='payment_info_text_third' class="payment_info__type_text">
                    <p>Оплата производится наличными средствами на основании счета перед выгрузкой транспортного
                        средства.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type">
                    <div class="payment_info__number">4</div>
                    <span class="payment_type_info_text" id='payment_info_type_fourth'>Online оплата</span>
                </div>
                <div id='payment_info_text_fourth' class="payment_info__type_text">
                    <p>Оплата online переводом на карту Сбербанка и других банков до выгрузки транспортного
                        средства.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="logo_section">
        <div class="footer_logo"></div>
    </div>
    <div class="footer_item">
        <p class="footer_item_text">Наша миссия заключается в сохранении эмоционального, материального благополучия
            клиентов и развитии инфраструктуры за счёт быстрых и систематизированных грузоперевозок во всех
            регионах России. Работая с 2010 года, мы успели провести более 11500 тысяч успешных грузоперевозок. Наш
            автотранспорт позволяет перевозить груз с любыми характеристиками и габаритами.</p>
        <a class="confidential_politics" href="../politikaconf.pdf" target="_blank">Политика конфиденциальности</a>
        <span class="rights_reserved">Все права защищены. © Тайгер Логистик 2018</span>
        <div class="creator_logo">
            <div class="drim_logo"></div>
            <span>Разработка сайта</span>
        </div>
    </div>
    <div class="footer_item">
        <span class="footer_item_title">ИНФОРМАЦИЯ</span>
        <ul>
            <li class="footer_item_info_links">Наши услуги</li>
            <li class="footer_item_info_links">Наши преимущества</li>
            <li class="footer_item_info_links">О компании</li>
            <li class="footer_item_info_links">Отзывы</li>
            <li class="footer_item_info_links">Информация об оплате</li>
        </ul>

    </div>
    <div class="footer_item footer_social_links">
        <span class="footer_item_title">МЫ В СОЦ СЕТЯХ</span>
        <div class="social_link_container">
            <a class="solcial_link" href="https://vk.com/club134747802" target="_blank"><span class="icon-vk"></span></a>
        </div>
        <button class="online_apply_content_style footer_apply_form__btn" type="submit" onclick="modal_on_second()">
            Онлайн
            заявка
        </button>
    </div>
    <div class="footer_item">
        <span class="footer_item_title">Контакты</span>
        <div class="footer_contacts__content">
            <span class="footer_contacts_item">ООО «ТАЙГЕР-ЛОГИСТИК»</span>
            <span class="footer_contacts_item"><span
                        class="footer_contact_styled">Телефон:</span> 8 800 700 09 35</span>
            <span class="footer_contacts_item"><span class="footer_contact_styled">E-mail: </span>
                    autotransport24@yandex.ru</span>
            <span class="footer_contacts_item"><span class="footer_contact_styled">ОГРН</span> 1181690015121</span>
            <span class="footer_contacts_item"><span class="footer_contact_styled">ИНН</span> 1655399042</span>
            <span class="footer_contacts_item"><span class="footer_contact_styled">КПП</span> 165501001 </span>
        </div>
    </div>
    <div class="footer_decoration_line">
        <!--?xml version="1.0" encoding="utf-8"?-->
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5348.7 278.9" style="enable-background:new 0 0 5348.7 278.9;"
             xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #F6F6F6;
                    }

                    .st2 {
                        fill: #E0E0E0;
                    }
                </style>
            <rect x="-2.8" y="-15.8" class="st0" width="5366" height="310"></rect>
            <polygon class="st1" points="5362,257 3096.3,69.4 -10,182 -16,282 5363.2,294.3 "></polygon>
            <polygon class="st2" points="-43.3,182.9 3136.7,10.9 5388.7,138.9 5388.7,266.9 3048.7,98.9 "></polygon>
            </svg>
    </div>
</footer>
<section class="modal_window_second">
    <h2>Оставить заявку на доставку груза</h2>
    <p class="modal_text">Заполните контактную форму и мы с вами свяжемся</p>
    <div id="close_btn" class="close_btn" onclick="close_modal()">
    </div>
    <form id="prompt-form" method="post" action="../thanks_window.php">
        <input class="modal_window_input" name="name" type="text" placeholder="Введите Ваше имя">
        <input class="modal_window_input" id="phone-number" name="phone-number" type="text" maxlength="14"
               placeholder="Контактный телефон">
        <button class="modal_window_submit_btn" name="modal_btn" type="submit">Оставить заявку</button>
    </form>
    <p class="modal_agreement">Отправляя заявку, вы подтверждаете свое согласие с <a href="../politikaconf.pdf" target="_blank">политикой
            конфиденциальности</a></p>
</section>
<div id="modal_overlay"></div>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/min/tiny-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../tiger.js/countUp.js-master/countUp.js"></script>
<script src="../tiger.js/tiger.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.8.0/dist/js/jquery.suggestions.min.js"></script>
<script type="text/javascript">
    $("#ADDRESS_FROM_FOOTER").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
    $("#ADDRESS_TO_FOOTER").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
    $("#parcel_from_quiz").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
    $("#parcel_to_quiz").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
    $("#ADDRESS_TO_HEADER").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });
    $("#ADDRESS_FROM_HEADER").suggestions({
        token: "596aeed7db7406dd16886ad0bb66658819f9a37b",
        type: "ADDRESS",
        hint: false,
        bounds: "city",
        constraints: {
            label: "",
            locations: {
                city_type_full: "город"
            }
        },
        onSelect: function (suggestion) {
            console.log(suggestion);
        }
    });

    let count = 0;

    $("input#next").on("click", function (e) {
        if ($(e.currentTarget).val() === "Рассчитать стоимость") {
            $("input#form1_btn").click();
        }
    });
</script>
</body>

</html>