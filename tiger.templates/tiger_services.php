<?php
require("../admin/database/db.php");
require("../admin/templates/Block.php");

use Templates\Block;

$page = R::getAll("SELECT * FROM pages WHERE tag=:tag", ["tag" => $_GET["tag"]]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.8.8/tiny-slider.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../tiger.css/reset.css">
    <link rel="stylesheet" href="../tiger.css/tiger.css">
    <link rel="stylesheet" href="../tiger.css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@18.8.0/dist/css/suggestions.min.css" type="text/css"
          rel="stylesheet"/>

    <title>Транспортная компания Tiger Logistic - <?= $_GET["tag"] ?></title>

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
<header class="tiger_services_header">
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
                        <span class="header_email">autotrasport24@yandex.ru</span>
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
                    <a data-scroll id="to_payment_info" href="#payment_info">
                        <div class="header_menu_open_nav_decoration"></div>
                        Информация <br> об оплате
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header_wrap"></div>
    <div class="header_contacts">
        <a href="../index.html">
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
                    <span class="header_email">autotrasport24@yandex.ru</span>
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
        <h2><?= Block::get_offer($_GET["tag"]) ?></h2>
        <p class="visible_header_text">Получите расчет стоимости грузоперевозки за 60 секунд</p>
        <p class="invisible_header_text">Ответьте на 4 вопроса <br> и получите расчет стоимости грузоперевозки за
            60 секунд</p>
        <div class="header_count">
            <form class="header_count_form" id="form1" method="post" action="../thanks_window.php">
                <input id='ADDRESS_FROM_HEADER' class="header_count_form_input invisible_header_input"
                       name="ADDRESS_FROM_HEADER"
                       type="text" placeholder="Город отправления">
                <input id="ADDRESS_TO_HEADER" name="ADDRESS_TO_HEADER"
                       class="header_count_form_input invisible_header_input"
                       type="text" placeholder="Город доставки">
                <input class="header_count_form_input invisible_header_input" name="weight" type="text"
                       placeholder="Масса груза, кг">
                <input class="header_count_form_input invisible_header_input" name="header_telephone" type="text"
                       placeholder="Контактный телефон" required>
                <input type="text" class="header_count_form__btn invisible_header_btn" value="Далее" readonly>
                <input class="header_count_form__btn" name="form1" type="submit" value="Быстрый рассчет">
            </form>
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
<section class="price">
    <h2>ПРОЙДИТЕ ТЕСТ ЗА 1 МИНУТУ И <span class="styled_price_header">УЗНАЙТЕ СТОИМОСТЬ ГРУЗОПЕРЕВОЗКИ</span> ПРямо
        сейчас</h2>
    <div class="apply_questions">
        <p class="apply_questions_text quiz_header_text"><span class="apply_questions_styled_text">Узнайте
                    стоимость грузоперевозки</span>
            за 60 секунд + получите гарантированную скидку</p>
        <div class="progress_line">
            <p class="apply_questions_text">Осталось ответить на <span class="apply_questions_span">9</span>
                <span class="apply_questions_actual_quantity">вопросов</span>
            </p>
            <div class="progrss_line_item progrss_line_item__active"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
            <div class="progrss_line_item"></div>
        </div>
        <div class="current_question">
            <span>Шаг<span class="current_question_number">1</span></span>
            <div class="current_question_item current_question_item__active"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
            <div class="current_question_item"></div>
        </div>
        <div class="apply_questions_start">
            <div class="question_item second_question_container">
                <div class="question_item__text_container">
                    <div class="question_item_number">1</div>
                    <p class="question_item_text">Выберите вид автотранспорта для доставки груза</p>
                </div>
                <div class="apply_questions_checkbox_container">
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="Догруз">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Догруз</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="Газель">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Газель</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="3-тонник">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">3-тонник</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="5-тонник">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">5-тонник</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="10-тонник">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">10-тонник</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="Фура">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Фура</span>
                    </label>
                    <label class="question_item_checkbox second_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="transport" value="Негабарит">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Негабарит</span>
                    </label>
                    <div class="question_item__button_container">
                        <label class="question_item_checkbox_mark_type">
                            <input type="checkbox" name="answer" form="quiz_form">

                            <div class="question_item_checkbox_wrap_mark_type">
                                <span class="icon-check"></span>
                            </div>
                            <span class="question_item_checkbox_text_mark_type">*Поставьте галочку, если для
                                    транспортировки
                                    груза необходим температурный режим </span>
                        </label>
                        <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                            следующий шаг
                        </button>
                    </div>
                </div>
                <div class="question_info">
                    <div class="question_info_item invisible_item">
                        <h3>Догруз</h3>
                        <p>Догруз - это партия груза, которая может быть помещена в автомобиль, идущий нужным
                            маршрутом, при наличии свободного места в кузове.</p>
                    </div>
                    <div class="question_info_item">
                        <h3>«Газель»</h3>
                        <div class="question_info_item_img second_question_img"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>3-тонник</h3>
                        <div class="question_info_item_img third_question_img"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>5-тонник</h3>
                        <div class="question_info_item_img fourth_question_img"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>10-тонник</h3>
                        <div class="question_info_item_img fifth_question_img"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Фура</h3>
                        <div class="question_info_item_img sixth_question_img"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Негабарит</h3>
                        <div class="question_info_item_img seventh_question_img"></div>
                    </div>
                </div>
            </div>
            <div class="question_item first_question_container invisible_item">
                <div class="question_item__text_container ">
                    <div class="question_item_number">2</div>
                    <p class="question_item_text">Что вам нужно перевезти?</p>
                </div>
                <div class="apply_questions_checkbox_container new_input_container">
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Домашний переезд">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Домашний переезд</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Стройматериалы">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Стройматериалы</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Пиломатериалы">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Пиломатериалы</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Продукты питания">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Продукты питания</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Оборудование">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Оборудование</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Металл">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Металл</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="TNP">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">ТНП</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input class="question_item_checkbox_input" type="radio" name="type_of_parcel" form="quiz_form"
                               value="Трубы">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Трубы</span>
                    </label>
                    <label class="question_item_checkbox first_question">
                        <input id="other" class="question_item_checkbox_input" type="radio" name="type_of_parcel"
                               value="Другая">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Другая</span>
                        <input class="new_input_quiz invisible_item" type="text" name="type_of_parcel_other"
                               placeholder="Другое">
                    </label>
                </div>
                <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                    следующий шаг
                </button>
                <div class="quiz_back_button">
                    <svg id='1' class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item third_question_container invisible_item">
                <div class="question_item__text_container">
                    <div class="question_item_number">3</div>
                    <p class="question_item_text">Какая упаковка у вашего груза?</p>
                </div>
                <div class="apply_questions_checkbox_container">
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Коробки">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Коробки</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Паллеты">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Паллеты</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Ящики">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Ящики</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Мешки">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Мешки</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Биг-бэги">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Биг-бэги</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Обрешетка">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Обрешетка</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Связки">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Связки</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Нет">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Нет</span>
                    </label>
                    <label class="question_item_checkbox third_question">
                        <input class="question_item_checkbox_input checkbox_question_info_trigger" form="quiz_form"
                               type="radio" name="package" value="Другая">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Другая</span>
                    </label>
                    <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                        следующий шаг
                    </button>
                </div>
                <div class="question_info">
                    <div class="question_info_item invisible_item">
                        <h3>Коробка</h3>
                        <div class="question_info_item_img first_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Паллеты</h3>
                        <div class="question_info_item_img second_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Ящики</h3>
                        <div class="question_info_item_img third_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Мешки</h3>
                        <div class="question_info_item_img fourth_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Биг бэги</h3>
                        <div class="question_info_item_img fifth_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Обрешетка</h3>
                        <div class="question_info_item_img sixth_question_img_parcel_cover"></div>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Связка</h3>
                        <p>Связка - обычная связка веревкой или троссом.</p>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Нет</h3>
                        <p>Нет - упаковка не используется.</p>
                    </div>
                    <div class="question_info_item invisible_item">
                        <h3>Другая</h3>
                        <p>Другая - выберите этот пункт, если вашего вида упаковки нет в списке.</p>
                    </div>
                </div>
                <div class="quiz_back_button">
                    <svg id="2" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item invisible_item fourth_question_container">
                <div class="question_item__text_container">
                    <div class="question_item_number">4</div>
                    <p class="question_item_text">Какой вид погрузки вам необходим?</p>
                </div>
                <div class="apply_questions_checkbox_container">
                    <label class="question_item_checkbox fourth_question">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="type"
                               value="Сверху">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Сверху</span>
                    </label>
                    <label class="question_item_checkbox fourth_question">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="type"
                               value="Сбоку">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Сбоку</span>
                    </label>
                    <label class="question_item_checkbox fourth_question">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="type"
                               value="Сзади">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Сзади</span>
                    </label>
                    <label class="question_item_checkbox fourth_question">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="type"
                               value="Комбинированный">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Комбинированный</span>
                    </label>
                    <label class="question_item_checkbox fourth_question">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="type"
                               value="Без разницы">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Без разницы</span>
                    </label>
                </div>
                <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                    следующий шаг
                </button>
                <div class="quiz_back_button">
                    <svg id="3" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item fifth_question_container invisible_item">
                <div class="question_item__text_container">
                    <div class="question_item_number">5</div>
                    <div class="question_item_text_section">
                        <p class="question_item_text">Введите город отправки:</p>
                        <span>Если ваш город не найден, введите его самостоятельно</span>
                    </div>
                </div>
                <input type="text" class="quiz_textarea" form="quiz_form" name="parcel_from_quiz" id="parcel_from_quiz"
                       placeholder="Введите город отправки">
                <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                    следующий шаг
                </button>
                <label class="question_item_checkbox_mark_type">
                    <input type="checkbox" name="more_than_one_dep" form="quiz_form">

                    <div class="question_item_checkbox_wrap_mark_type">
                        <span class="icon-check"></span>
                    </div>
                    <span class="question_item_checkbox_text_mark_type">*Поставьте галочку, если в городе более
                            одной точки погрузки </span>
                </label>
                <div class="quiz_back_button">
                    <svg id="4" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item sixth_question_container invisible_item">
                <div class="question_item__text_container">
                    <div class="question_item_number">6</div>
                    <div class="question_item_text_section">
                        <p class="question_item_text">Введите город доставки</p>
                        <span>Если ваш город не найден, введите его самостоятельно</span>
                    </div>
                </div>
                <input type="text" form="quiz_form" class="quiz_textarea" name="parcel_to_quiz" id="parcel_to_quiz">
                <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" id='lol'
                        disabled>На
                    следующий шаг
                </button>
                <label class="question_item_checkbox_mark_type">
                    <input type="checkbox" name="more_than_one_destination" form="quiz_form">

                    <div class="question_item_checkbox_wrap_mark_type">
                        <span class="icon-check"></span>
                    </div>
                    <span class="question_item_checkbox_text_mark_type">*Поставьте галочку, если в городе более
                            1 точки выгрузки</span>
                </label>
                <div class="quiz_back_button">
                    <svg id="5" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item seventh_question_container invisible_item">
                <div class="question_item__text_container">
                    <div class="question_item_number">7</div>
                    <p class="question_item_text">Как срочно Вам нужно отправить груз?</p>
                </div>
                <div class="apply_questions_checkbox_container">
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="shipping"
                               value="Срочно">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Срочно</span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="shipping"
                               value="В течение 1-2 дней">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">В течение 1-2 дней</span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="shipping"
                               value="В течение 7 дней">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">В течение 7 дней </span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="shipping"
                               value="В течение 30 дней">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">В течение 30 дней</span>
                    </label>
                </div>
                <div class="button_wrap">
                    <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>На
                        следующий шаг
                    </button>
                </div>
                <div class="quiz_back_button">
                    <svg id="6" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item eighth_question_container invisible_item">
                <div class="question_item__text_container">
                    <div class="question_item_number">8</div>
                    <p class="question_item_text">Выберите форму вашей организации, <br> от которой будет
                        заключаться договор</p>
                </div>
                <div class="apply_questions_checkbox_container">
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="organisation"
                               value="Физ. Лицо">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Физ. Лицо</span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="organisation"
                               value="Юр. Лицо">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">Юр. Лицо</span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="organisation"
                               value="ИП">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">ИП</span>
                    </label>
                    <label class="question_item_checkbox">
                        <input class="question_item_checkbox_input" form="quiz_form" type="radio" name="organisation"
                               value="OOO">
                        <div class="question_item_checkbox_wrap">
                            <div class="checkbox_mark"></div>
                        </div>
                        <span class="question_item_checkbox_text">ООО</span>
                    </label>
                </div>
                <div class="button_wrap">
                    <button class="btn apply_questions_start__btn apply_questions_start__btn_disabled" disabled>
                        Завершить
                    </button>
                </div>
                <div class="quiz_back_button">
                    <svg id="7" class="quiz_back_button_image" viewBox="0 0 32 32">
                        <g data-name="1">
                            <path d="M16,1A11,11,0,0,0,5,12V22.59l-3.29-3.3L.29,20.71l5,5a1,1,0,0,0,1.42,0l5-5-1.42-1.42L7,22.59V12a9,9,0,0,1,18,0V30h2V12A11,11,0,0,0,16,1Z"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="question_item finish_container invisible_item">
                <div class="finish_wrap"></div>
                <div class="finish_content">
                    <h3>Почти готово! <br> Информация по вашей перевозке отправлена менеджеру, и он уже взялся за
                        расчет стоимости перевозки. </h3>
                    <p>Введите Ваш номер телефона, и мы сообщим вам стоимость грузоперевозки прямо сейчас!
                    </p>
                    <form class="finish_form" id="quiz_form" method="post" action="../thanks_window_second.php">
                        <input class="finish_form_input" name="from" type="text"
                               placeholder="Введите свой номер телефона"
                               required>
                        <input class="finish_form__btn btn" type="submit" name="quiz_btn" value="Узнать стоимость">
                    </form>
                </div>
            </div>
        </div>
        <div class="price_decoration_line">
        </div>

    </div>
</section>
<section class="additional_info">
    <h2>ПОДРОБНЕЕ О ГРУЗОПЕРЕВОЗКАХ <br> ПО РОССИИ ОТДЕЛЬНЫМ ТРАНСПОРТОМ</h2>
    <div class="additional_info_content">
        <div class="adadditional_info_content_image"></div>
        <div class="additional_info_content_text">
            <div class="text_wrap">
                <h3>Профессиональные транспортные услуги</h3>
                <p>Транспортные услуги, оказываемые профессиональной компанией, — залог надежности и точности
                    выполнения заказов разной сложности. Грузы будут перевезены в нужную точку по маршруту, который
                    обсуждается заранее с заказчиком.</p>
                <p>Грузоперевозки +по России приобретают все большую и большую актуальность. Потребность в них
                    растет, так как грузы могут быть самыми разными. Услугу заказывают люди, переезжающие на другое
                    место или же желающие отвезти часть мебели на дачу. Также те, которые планируют строительство и
                    закупили тонны песка, кирпича и других стройматериалов. При наличии собственного бизнеса,
                    особенно, если речь идет о магазине или торговом центре, нужно периодически покупать и
                    перевозить большое количество продуктов.</p>
                <p>Грузоперевозки были востребованы еще задолго до появления современного транспорта. Ведь
                    купля-продажа никогда не прекращалась. В наше время эта услуга стала на более высокий уровень,
                    так как обычная фура за один раз и за малый промежуток времени сможет перевезти много всего,
                    что раньше перевозилось на небольших кораблях.</p>
                <p>Без грузоперевозок сложно себе представить современную жизнь. Города не имели бы столько
                    удобств, возможностей, такого огромного завоза импортной одежды и продуктов. Пока человеческие
                    потребности будут умножаться, нужда в перевозках будет оставаться все такой же острой. При
                    заказе перевозочных услуг важно понимать, что не всем можно доверить ценные товары. Во
                    избежание потерь и краж лучше всего обращаться в профессиональные компании, которые
                    предоставляют гарантию на свои услуги.</p>
                <h3>Цена грузоперевозок по России</h3>
                <p>Грузоперевозки могут иметь различную стоимость, и на это влияет целый спектр причин. Все зависит
                    от того, насколько стабильное положение на рынке услуги перевоза грузов. Если там все в
                    порядке, то компании будут максимально стараться, чтобы угодить клиенту и переманить его на
                    свою сторону. Также играет роль стоимость топлива для двигателей транспортных средств — от
                    этого будет рассчитываться общая цена.</p>
                <p>Немаловажным фактором является то, насколько дорогие услуги ремонта и покупки запчастей в том
                    или ином регионе. Ведь транспорт нуждается в регулярном техосмотре, ремонте и должном уходе.
                    Если детали износились, пришли в негодность — на таком транспорте опасно не то, что отвозить
                    груз, а и вообще ездить по дорогам. Учитываются затраты и на все расходные материалы как
                    фильтры и прочее.</p>
                <p> Грузоперевозки +по России цена зависит от сложности и количества перевозимого товара. Если груз
                    опасен для жизни, требует особого подхода хранения в кузове или же является слишком хрупким,
                    ломким и нуждается во внимании и аккуратном подходе, то цена за такую перевозку будет
                    достаточно высока. При обычных перевозках сыпучих стройматериалов, мягкой мебели, где не нужно
                    слишком тщательно упаковывать товар и следить за его целостностью, стоимость окажется
                    невысокой.</p>
                <h3>Грузоперевозки от компании</h3>
                <p> Грузоперевозки +по России транспортные компании — это возможность отдать свой товар в надежные
                    руки и быть уверенным, что он дойдет до точки прибытия в своем полном количестве и
                    своевременно. Наша компания делает все возможное, чтобы избежать казусных ситуаций, утери или
                    порчи груза, а также неоправданных задержек во время доставки. Мы ценим каждого клиента и
                    печемся о его благополучии.</p>
                <p>Все наши грузоперевозки отлажены и систематизированы. Наш автопарк
                    содержит транспорт с разной мощностью и грузоподъемностью, чтобы можно было подобрать
                    подходящий для того или иного количества товара. Всевозможные характеристики машин, их габариты
                    вы сможете посмотреть на сайте и выбрать то, что вам подходит.</p>
                <h3>Наши преимущества:</h3>
                <ul>
                    <li>Своевременный привоз грузовой машины на место погрузки товара.</li>
                    <li>Быстрая и качественная доставка грузов в любой регион России.</li>
                    <li>Возможность бесплатных консультаций по поводу стоимости перевозки, расчета длительности
                        поездки, уточнения особенностей груза и прочих важных нюансов.
                    </li>
                    <li>Наличие нестандартной услуги: заказчик может находиться в кабине водителя на протяжении
                        всей поездки и быть в курсе того, в каком состоянии находится его товар.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <h2>НАШИ УСЛУГИ <br>
        грузоперевозок по россии <br>
        отдельным транспортом</h2>
    <div class="blog_decoration_line_first">
        <!--?xml version="1.0" encoding="utf-8"?-->
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5333 265" style="enable-background:new 0 0 5333 265;" xml:space="preserve">
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
            <polygon class="st0" points="5351,133 4323,33 -5,241 -0.8,-6.5 5350,-16 "></polygon>
            <path class="st1"
                  d="M-2.3,229.7c0,0,4039.3-105.9,4091.3-109.3c10-0.7,1244,127.3,1244,127.3v17.9H-0.8L-2.3,229.7z"></path>
            <polygon class="st2" points="-5,231 4299,7 5333,99.1 5333,249.1 4103,123 "></polygon>
            </svg>
    </div>
    <div class="blog_decoration_line_second">
        <!--?xml version="1.0" encoding="utf-8"?-->
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5333 560" style="enable-background:new 0 0 5333 560;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                        stroke: #000000;
                        stroke-miterlimit: 10;
                    }

                    .st1 {
                        fill: #F6F6F6;
                    }

                    .st2 {
                        fill: #E0E0E0;
                    }

                    .st3 {
                        fill: #D4D4D4;
                    }
                </style>
            <rect x="-12.6" y="-1.6" class="st0" width="5350.5" height="565"></rect>
            <polygon class="st1" points="3607,208 -1,316 3,0 5619,-4 "></polygon>
            <polygon class="st2" points="-5.4,545.9 3811,286 5327,26 3463,210 -9,410 "></polygon>
            <polygon class="st3" points="-13,304 3463,210 -9,410 "></polygon>
            </svg>
    </div>
    <div class="blog_content">
        <div class="blog_content__images">
            <?
            for ($i = 5; $i >= 0; $i--) {
                echo Block::generate_tagged_block($page[$i]["offer"], $page[$i]["img_first"]);
            }
            ?>
        </div>
        <div class="blog_content__text">
            <span>А также:</span>
            <div class="my-blog-slider">
                <?=Block::generate_slider_blocks($page)?>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<section id="clients_review" class="clients_review">
    <h2>ЧТО О НАС ГОВОРЯТ</h2>
    <div class="clients_review_content my-slider">
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>6 ноя в 11:15</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Доставили мебель из Петелино (Московская область) в Березники!</p>
                    <a href="https://vk.com/club134747802"><span>#грузоперевозки#отзыв <br>
                                #тайгерлогистик#логистика</span></a>
                    <div class="vk_review__content_img first_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_30%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_30%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_30%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>5 ноя в 19:51</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Отзыв Анастасии
                        Услуга: Переезд из Екатеринбурга в Белгородскую область - село Покровка</p>
                    <div class="vk_review__content_img second_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_28%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_28%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_28%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>10 мая в 11:10</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>С радостью принимаем Ваши звонки, отвечаем на вопросы и консультируем по переезду в другой
                        город📦📦📦</p>
                    <p>Звоните нам: 8800-700-09-35 <br> Звонок по России бесплатный</p>
                    <a href="https://vk.com/club134747802"><span>#перееезд</span></a>
                    <div class="vk_review__content_img third_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239050%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239050%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239050%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>3 мая в 16:06</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Давайте знакомиться! <br> Это наша команда отдыхает на день логиста🚚🚚</p>
                    <a href="https://vk.com/club134747802"><span>#переезд</span></a>
                    <div class="vk_review__content_img fourth_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239049%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239049%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?z=photo-134747802_456239049%2Falbum-134747802_00%2Frev">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>6 ноя в 20:55</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Ещё один отзыв нашего клиента! Приятно читать😃 Спасибо вам!</p>
                    <div class="vk_review__content_img fifth_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_31%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_31%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_31%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>16 ноя в 17:07</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Отзыв по перевозке Крым👨‍💻️👨‍💻️</p>
                    <div class="vk_review__content_img sixth_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_32%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_32%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_32%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="vk_review">
                <div class="vk_review__header">
                    <div class="vk_review__header_img"></div>
                    <a href="https://vk.com/club134747802">
                        <h3>Грузоперевозки по России | ТАЙГЕР-ЛОГИСТИК</h3>
                        <span>16 ноя в 17:16</span>
                    </a>
                </div>
                <div class="vk_review__content">
                    <p>Отзыв 🙌</p>
                    <div class="vk_review__content_img seventh_review_img"></div>
                </div>
                <div class="vk_review__footer">
                    <div class="vk_review__footer_wrap">
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_33%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M17,2.9A6.43,6.43,0,0,1,23.4,9.33c0,3.57-1.43,5.36-7.45,10l-2.78,2.16a1.9,1.9,0,0,1-2.33,0L8.05,19.37C2,14.69.6,12.9.6,9.33A6.43,6.43,0,0,1,7,2.9a6.46,6.46,0,0,1,5,2.54A6.46,6.46,0,0,1,17,2.9ZM7,4.7A4.63,4.63,0,0,0,2.4,9.33c0,2.82,1.15,4.26,6.76,8.63l2.78,2.16a.1.1,0,0,0,.12,0L14.84,18c5.61-4.36,6.76-5.8,6.76-8.63A4.63,4.63,0,0,0,17,4.7c-1.56,0-3,.88-4.23,2.73L12,8.5l-.74-1.07C10,5.58,8.58,4.7,7,4.7Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_33%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M7.84,22.53A2,2,0,0,1,7.1,21V18.9H5.5a3.26,3.26,0,0,1-3.4-3.4v-9A3.26,3.26,0,0,1,5.5,3.1h13a3.26,3.26,0,0,1,3.4,3.4v9a3.26,3.26,0,0,1-3.4,3.4H13.84l-3.72,3.26A1.69,1.69,0,0,1,7.84,22.53Zm4.93-5.09a1.4,1.4,0,0,1,.92-.35H18.5a1.47,1.47,0,0,0,1.6-1.6v-9a1.47,1.47,0,0,0-1.6-1.6H5.5A1.47,1.47,0,0,0,3.9,6.5v9a1.47,1.47,0,0,0,1.6,1.6H8c.7.2.7.2.9.9v2.83Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                        <div class="vk_review__footer_item">
                            <a href="https://vk.com/club134747802?w=wall-134747802_33%2Fall">
                                <svg class="vk_review__footer_item_image">
                                    <path xmlns="http://www.w3.org/2000/svg"
                                          d="M12.1,7.87V4.4a1.32,1.32,0,0,1,2.17-1L23.21,11a1.32,1.32,0,0,1,.15,1.86l-.15.15-8.94,7.6a1.32,1.32,0,0,1-2.17-1V16.16c-4.68.11-8,1.09-9.89,2.87a1.15,1.15,0,0,1-1.9-1.11C1.84,11.56,5.82,8.16,12.1,7.87Zm1.8-2.42v4.2H13c-5.3,0-8.72,2.25-10.39,6.86C5.06,15.06,8.53,14.35,13,14.35h.9v4.2L21.61,12Z"
                                          fill="#828a99"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="about">
    <div class="about_wrap"></div>
    <div class="about_content">
        <h2>О компании в цифрах</h2>
        <p class="about_header_text">Предоставляем услуги погрузки и упаковки груза в каждом городе России.</p>
        <div id="about_numbers_container" class="about_numbers_container">
            <div class="about_numbers_container_row">
                <div class="about_numbers_item">
                    <span id="first_item_to_count" class="about_number animated">6</span>
                    <span class="about_number_description">лет работы с 2013 года</span>
                </div>
                <div class="about_numbers_item">
                    <span id="second_item_to_count" class="about_number">20</span>
                    <span class="about_number_description">сотрудников</span>
                </div>
            </div>
            <div class="about_numbers_container_row">
                <div class="about_numbers_item about_number_selected_first">
                    <span id="third_item_to_count" class="about_number">11243</span>
                    <span class="about_number_description styled_number_description">перевозок осуществлено</span>
                </div>
                <div class="about_numbers_item about_number_selected_second">
                    <span id="fourth_item_to_count" class="about_number">272</span>
                    <span class="about_number_description">постоянных клиентов</span>
                </div>
            </div>
        </div>
    </div>
    <div class="about_decoration_line">
        <svg enable-background="new 0 0 5333 249.1" version="1.1" viewBox="0 0 5333 249.1" xml:space="preserve"
             xmlns="http://www.w3.org/2000/svg">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                    }

                    .st1 {
                        fill: #D4D4D4;
                    }

                    .st2 {
                        fill: #FFDB4D;
                    }
                </style>
            <polygon class="st0" points="5373 175 1403.6 61.4 -5.3 247.3 -5.3 -6 5343.7 -6"/>
            <polygon class="st1" points="-13 246 1235 2 5335 174 1431 98"/>
            <polygon class="st2" points="-6.8 246.6 1234.8 2 -6.8 137.1"/>
            </svg>
    </div>
    <div class="about_decoration_line_second">
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5332.9 452.5" style="enable-background:new 0 0 5332.9 452.5;"
             xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FFFFFF;
                        stroke: #000000;
                        stroke-miterlimit: 10;
                    }

                    .st1 {
                        fill: #E0E0E0;
                    }

                    .st2 {
                        fill: #D4D4D4;
                    }
                </style>
            <polygon class="st0" points="5342,390 3786,86 -62,294 2.5,465.8 5329.4,465.8 "/>
            <polygon class="st1" points="-12,290.5 3815.2,8.6 5344.9,92.6 5340,340 3698.1,122.2 "/>
            <polygon class="st2" points="5345,429.2 5344.9,312.5 3836.1,138.2 "/>
            </svg>

    </div>
</section>
<section id="advantages" class="advantages">
    <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
    <p class="advantages_header_text">Предоставляем услуги погрузки и упаковки груза в каждом городе России</p>
    <div class="advantages_content">
        <div class="advantages_content__item wow fadeInLeft">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg viewBox="-106 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffdb4d"
                                  d="m150 323c5.5195 0 10-4.4805 10-10s-4.4805-10-10-10-10 4.4805-10 10 4.4805 10 10 10z"/>
                            <path fill="#ffdb4d"
                                  d="m204.68 247.24c23.203-14.098 42.41-33.941 55.551-57.391 12.93-23.074 19.766-49.184 19.766-75.508v-56.059c11.641-4.1289 20-15.246 20-28.281v-20c0-5.5234-4.4766-10-10-10h-280c-5.5234 0-10 4.4766-10 10v20c0 13.035 8.3594 24.152 20 28.281v56.059c0 26.324 6.8359 52.434 19.766 75.508 13.141 23.449 32.352 43.297 55.555 57.391 2.9648 1.8008 4.7383 5.0781 4.7383 8.7617 0 3.6875-1.7734 6.9609-4.7383 8.7656-23.203 14.094-42.414 33.938-55.555 57.387-12.93 23.074-19.766 49.184-19.766 75.508v56.059c-11.641 4.1289-20 15.246-20 28.281v20c0 5.5234 4.4766 10 10 10h280c5.5234 0 10-4.4766 10-10v-20c0-13.035-8.3594-24.152-20-28.281v-56.059c0-26.324-6.8359-52.434-19.766-75.508-13.141-23.449-32.352-43.297-55.555-57.391-2.9648-1.8008-4.7383-5.0781-4.7383-8.7617 0-3.6875 1.7734-6.9609 4.7422-8.7617zm-184.68-227.24h260v10c0 5.5156-4.4844 10-10 10h-240c-5.5156 0-10-4.4844-10-10zm260 472h-260v-10c0-5.5156 4.4844-10 10-10h240c5.5156 0 10 4.4844 10 10zm-85.699-210.14c41.137 24.992 65.699 68.285 65.699 115.8v54.34h-220v-54.34c0-47.52 24.562-90.812 65.699-115.8 8.9922-5.457 14.359-15.125 14.359-25.855s-5.3672-20.398-14.359-25.855c-41.137-24.992-65.699-68.285-65.699-115.8v-54.34h220v54.34c0 47.52-24.562 90.812-65.699 115.8-8.9922 5.457-14.359 15.125-14.359 25.855s5.3672 20.398 14.359 25.855z"/>
                            <path fill="#ffdb4d"
                                  d="m157.97 346.46c-1.8867-2.5156-4.8477-4-7.9922-4h-0.007812c-3.1406 0-6.1016 1.4766-7.9883 3.9844-3.7695 5.0156-8.4648 9.2773-13.953 12.68-11.453 6.8984-21.684 11.211-30.715 15.02-20.023 8.4453-37.312 15.738-37.312 43.457v4.3984c0 5.5234 4.4766 10 10 10h160c5.5234 0 10-4.4766 10-10v-4.3984c0-27.703-17.332-35.027-37.398-43.512-9.1055-3.8516-19.426-8.2109-31.023-15.191-5.3164-3.3008-9.8945-7.4883-13.609-12.438zm61.637 65.539h-139.21c1.5234-9.2422 7.8242-12.312 24.695-19.426 9.1836-3.875 20.609-8.6914 33.316-16.348 0.03125-0.023437 0.066406-0.042968 0.097656-0.0625 4.1484-2.5664 7.9805-5.5 11.461-8.7695 3.3945 3.1914 7.1133 6.043 11.133 8.5352 0.035156 0.019531 0.070312 0.042968 0.10547 0.0625 12.844 7.7344 24.359 12.605 33.613 16.52 16.941 7.1602 23.266 10.246 24.793 19.488z"/>
                            <path fill="#ffdb4d"
                                  d="m240 114.4v-18.398c0-3.6367-1.9727-6.9844-5.1523-8.7461-3.1797-1.7656-7.0625-1.6602-10.148 0.26562-22.422 14.016-48.25 21.422-74.699 21.422-26.445 0-52.277-7.4062-74.699-21.422-3.0859-1.9258-6.9688-2.0273-10.148-0.26562-3.1797 1.7617-5.1523 5.1094-5.1523 8.7461v18.398c0 17.297 6.6797 35.914 19.312 53.836 12.242 17.367 29.223 32.879 49.109 44.867 4.0391 2.5117 7.9961 6.0742 11.578 10.379v49.52c0 5.5234 4.4766 10 10 10 5.5195 0 10-4.4766 10-10v-49.5c3.6484-4.3555 7.7383-8 11.973-10.625 40.691-24.543 68.027-64.109 68.027-98.477zm-78.402 81.375c-0.03125 0.023437-0.066406 0.039062-0.097656 0.0625-3.9883 2.4648-7.8516 5.5156-11.465 9.0234-3.5039-3.4297-7.2266-6.3711-11.129-8.7891-0.035156-0.023437-0.070312-0.042968-0.10547-0.066406-35.172-21.184-58.801-53.977-58.801-81.605v-1.4727c21.762 10.516 45.652 16.016 70 16.016s48.238-5.5 70-16.016v1.4727c0 27.195-24.016 60.656-58.402 81.375z"/>
                        </svg>
                    </div>
                </div>
                <h3>6 лет реального опыта</h3>
            </div>
            <p class="advantages_item_text">Перевозим ваши грузы с 2013 года. За это время мы совершили более 11000
                грузоперевозок.
            </p>
        </div>
        <div class="advantages_content__item wow fadeInRight">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg viewBox="-28 1 511 511.999" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffdb4d"
                                  d="m403.16 85.199c-15.848-2.0039-31.336-5.5195-46.027-10.445-3.9297-1.3164-8.1797 0.80078-9.4961 4.7266-1.3164 3.9297 0.80078 8.1797 4.7266 9.4961 15.629 5.2422 32.086 8.9766 48.918 11.105 25.242 3.1953 43.258 26.492 40.156 51.93-4.0664 33.359-11.512 83.152-23.887 130.92-13.48 52.027-29.301 88.227-47.023 107.59-36.395 39.77-82.023 75.02-113.89 97.586-16.746 11.859-39.246 11.859-55.988 0-31.867-22.566-77.496-57.816-113.89-97.586-17.723-19.367-33.547-55.566-47.023-107.59-12.375-47.766-19.82-97.559-23.891-130.92-3.0977-25.438 14.914-48.734 40.16-51.93 72.77-9.2031 121-45.766 148.65-74.816 6.3008-6.6172 14.82-10.266 23.988-10.266s17.688 3.6484 23.992 10.266c19.918 20.93 42.941 37.996 68.43 50.727 3.7031 1.8516 8.2109 0.34766 10.062-3.3594 1.8477-3.707 0.34375-8.2109-3.3594-10.059-23.93-11.953-45.551-27.984-64.27-47.648-9.1602-9.625-21.539-14.926-34.855-14.926-13.316 0-25.695 5.3008-34.855 14.926-25.969 27.285-71.277 61.625-139.66 70.273-33.414 4.2266-57.266 35.016-53.168 68.629 6.9844 57.289 28.25 196.02 74.738 246.82 37.289 40.746 83.82 76.707 116.29 99.699 10.965 7.7656 23.812 11.648 36.664 11.648 12.848-0.003906 25.699-3.8828 36.664-11.648 32.465-22.992 78.996-58.953 116.29-99.699 46.492-50.801 67.754-189.54 74.738-246.82 4.0977-33.613-19.754-64.402-53.168-68.629z"/>
                            <path fill="#ffdb4d"
                                  d="m211.72 70.453c-37.941 32.832-82.234 54.32-131.64 63.867-15.055 2.9102-25.219 17.145-23.141 32.41 3.4961 25.668 10.645 73.672 19.219 106.77 15.629 60.336 30.742 83.309 38.359 91.629 25.039 27.359 71.5 63.918 96.965 83.273 5.0547 3.8398 11.109 5.7578 17.164 5.7578 6.0547 0 12.109-1.918 17.164-5.7578 25.465-19.355 71.926-55.914 96.965-83.273 7.6172-8.3203 22.73-31.293 38.359-91.629 8.5781-33.102 15.723-81.102 19.223-106.77 2.0781-15.266-8.0898-29.5-23.145-32.41-49.41-9.5469-93.703-31.035-131.64-63.867-9.6484-8.3477-24.195-8.3477-33.844 0zm173.77 94.25c-3.4531 25.34-10.496 72.676-18.879 105.03-15.801 60.992-30.711 80.68-34.902 85.266-25.152 27.48-74.801 66.117-94.98 81.453-4.7617 3.6211-11.41 3.6211-16.172 0-20.18-15.336-69.828-53.977-94.977-81.453-4.1953-4.5859-19.105-24.273-34.906-85.266-8.3789-32.348-15.422-79.688-18.875-105.03-1.0078-7.3789 3.8789-14.254 11.121-15.656 52.027-10.051 98.664-32.676 138.62-67.25 2.0234-1.7539 4.5664-2.6328 7.1055-2.6328 2.5391 0 5.082 0.87891 7.1055 2.6328 39.953 34.574 86.59 57.199 138.62 67.25 7.2422 1.4023 12.129 8.2773 11.125 15.656z"/>
                            <path fill="#ffdb4d"
                                  d="m187.05 234.07c-5.6406-4.5938-24.68-14.078-38.312 3.9336-13.629 18.008-1.707 33.719 3.9336 38.312l21.75 17.695c3.2109 2.6133 7.9375 2.1328 10.551-1.082 2.6133-3.2148 2.1289-7.9375-1.082-10.555l-21.75-17.695c-2.5312-2.0625-8.0625-8.7773-1.7656-17.211 6.2969-8.4297 14.676-3.8281 17.207-1.7656l45.035 36.645c2.9727 2.418 7.2891 2.207 10.012-0.49219l65.902-65.285c4.793-4.75 12.551-4.7109 17.301 0.082032 4.7461 4.7891 4.707 12.551-0.082031 17.297l-78.496 77.766c-6.2148 5.9922-13.059 3.4961-16.328 0.79687l-12.461-10.137c-3.2148-2.6133-7.9375-2.1289-10.555 1.082-2.6133 3.2109-2.1289 7.9375 1.0859 10.551l12.461 10.141c4.8398 3.9375 10.941 6.1094 17.184 6.1094 7.2305 0 14.039-2.8008 19.172-7.8867l78.492-77.762c10.668-10.57 10.75-27.848 0.17969-38.516-10.566-10.664-27.844-10.746-38.512-0.17969l-61.117 60.547z"/>
                        </svg>
                    </div>
                </div>
                <h3>Страхование груза</h3>
            </div>
            <p class="advantages_item_text">
                Делаем страховку Вашего груза по ставке 0.1% от описанной стоимости груза.
            </p>
        </div>
        <div class="advantages_content__item wow fadeInLeft">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                             xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffdb4d"
                                      d="m491.73 112.97l-232.47-112.23c-2.061-0.994-4.461-0.994-6.521 0l-232.47 112.23c-2.592 1.251-4.239 3.876-4.239 6.754v272.55c0 2.878 1.647 5.503 4.239 6.754l232.47 112.23c1.03 0.497 2.146 0.746 3.261 0.746s2.23-0.249 3.261-0.746l232.47-112.23c2.592-1.251 4.239-3.876 4.239-6.754v-272.55c0-2.88-1.648-5.503-4.239-6.755zm-235.73-97.143l215.22 103.9-62.387 30.118c-0.395-0.301-0.812-0.579-1.27-0.8l-213.76-103.19 62.195-30.025zm-79.133 38.505l214.9 103.75-44.015 21.249-214.82-103.7 43.926-21.291zm219.93 117.97v78.546l-41.113 19.848v-78.546l41.113-19.848zm84.169 215.26l-217.47 104.98v-255.89l51.873-25.042c3.73-1.801 5.294-6.284 3.493-10.015-1.801-3.729-6.284-5.295-10.015-3.493l-52.851 25.515-20.796-10.04c-3.731-1.803-8.214-0.237-10.015 3.493s-0.237 8.214 3.493 10.015l19.818 9.567v255.89l-217.47-104.98v-255.89l165.6 79.945c1.051 0.508 2.162 0.748 3.255 0.748 2.788 0 5.466-1.562 6.759-4.241 1.801-3.73 0.237-8.214-3.493-10.015l-162.37-78.386 74.505-35.968 225.29 108.76c0.033 0.046 0.07 0.087 0.104 0.132v89.999c0 2.581 1.327 4.98 3.513 6.353 1.214 0.762 2.599 1.147 3.988 1.147 1.112 0 2.227-0.247 3.26-0.746l56.113-27.089c2.592-1.251 4.239-3.875 4.239-6.754v-90.495l69.169-33.392v255.89z"/>
                            <path fill="#ffdb4d"
                                  d="m92.926 358.48l-34.115-16.469c-3.732-1.803-8.214-0.237-10.015 3.493s-0.237 8.214 3.493 10.015l34.115 16.469c1.051 0.508 2.162 0.748 3.255 0.748 2.788 0 5.466-1.562 6.759-4.241 1.802-3.731 0.238-8.213-3.492-10.015z"/>
                            <path fill="#ffdb4d"
                                  d="m124.32 338.04l-65.465-31.604c-3.731-1.801-8.214-0.237-10.015 3.494-1.8 3.73-0.236 8.214 3.494 10.015l65.465 31.604c1.051 0.507 2.162 0.748 3.255 0.748 2.788 0 5.466-1.562 6.759-4.241 1.801-3.732 0.237-8.216-3.493-10.016z"/>
                            </svg>
                    </div>
                </div>
                <h3>Отслеживание груза 24/7</h3>
            </div>
            <p class="advantages_item_text">Вы можете отслеживать местоположение транспорта с вашим грузом, набрав
                бесплатный номер горячей линии 8800-700-09-35 и сообщив диспетчеру номер вашего договора-заявки</p>
        </div>
        <div class="advantages_content__item wow fadeInRight">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 511.998 511.998"
                             style="enable-background:new 0 0 511.998 511.998;"
                             xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#ffdb4d" d="M414.498,188.525h-32.234l9.712-111.509c0.018-0.202,0.021-0.401,0.022-0.6c0-0.017,0.002-0.033,0.002-0.05
                                                        c0-0.003,0-0.005,0-0.008c0-3.035-1.831-5.71-4.522-6.873c-0.023-0.01-0.045-0.022-0.068-0.032c-0.167-0.07-0.34-0.13-0.514-0.188
                                                        c-0.065-0.021-0.127-0.047-0.192-0.067c-0.142-0.043-0.288-0.077-0.433-0.112c-0.102-0.024-0.2-0.053-0.303-0.073
                                                        c-0.127-0.025-0.259-0.041-0.389-0.06c-0.122-0.018-0.242-0.039-0.365-0.05c-0.021-0.002-0.04-0.006-0.061-0.008
                                                        c-0.132-0.012-0.262-0.01-0.393-0.015c-0.088-0.003-0.174-0.013-0.262-0.013h-0.094c-0.008,0-0.016,0-0.023,0H231.01
                                                        c-4.14,0-7.5,3.36-7.5,7.5c0,4.13,3.36,7.5,7.5,7.5h145.313l-14.926,171.375c-0.002,0.013-0.002,0.026-0.004,0.039l-3.766,43.241
                                                        H97.018l4.359-44.998h49.621c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-48.167l9.204-94.995h78.975
                                                        c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-77.521l4.328-44.662h83.193c4.13,0,7.5-3.37,7.5-7.5
                                                        c0-4.14-3.37-7.5-7.5-7.5h-90c-0.004,0-0.007,0.001-0.011,0.001c-3.523-0.001-6.579,2.479-7.318,5.917
                                                        c-0.005,0.025-0.014,0.049-0.019,0.074c-0.038,0.187-0.063,0.378-0.088,0.57c-0.007,0.061-0.02,0.119-0.026,0.18
                                                        c-0.001,0.012-0.004,0.023-0.005,0.035l-5.124,52.885H7.5c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h89.465
                                                        l-9.204,94.995H61.002c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.306l-5.012,51.721
                                                        c-0.001,0.008-0.001,0.016-0.002,0.023l-7.749,79.979c-0.001,0.009-0.002,0.019-0.003,0.027l-0.003,0.029
                                                        c-0.01,0.104-0.009,0.206-0.015,0.31c-0.007,0.138-0.021,0.273-0.021,0.413c0,0.006,0.001,0.012,0.001,0.019
                                                        c0,0.193,0.014,0.383,0.028,0.573c0.006,0.061,0.004,0.123,0.011,0.183c0.02,0.194,0.053,0.385,0.088,0.575
                                                        c0.01,0.056,0.015,0.113,0.026,0.168c0.029,0.144,0.07,0.283,0.108,0.424c0.026,0.099,0.047,0.2,0.077,0.297
                                                        c0.009,0.027,0.021,0.053,0.029,0.081c0.363,1.116,0.979,2.118,1.783,2.936c0.015,0.015,0.027,0.032,0.042,0.046
                                                        c0.08,0.08,0.167,0.152,0.251,0.228c0.517,0.474,1.101,0.876,1.74,1.191c0.133,0.066,0.264,0.135,0.4,0.192
                                                        c0.041,0.018,0.085,0.03,0.127,0.046c0.188,0.075,0.377,0.147,0.572,0.208c0.018,0.005,0.035,0.008,0.053,0.014
                                                        c0.222,0.066,0.446,0.124,0.675,0.171c0.03,0.006,0.061,0.008,0.09,0.014c0.218,0.041,0.437,0.076,0.66,0.098
                                                        c0.005,0,0.009,0.001,0.014,0.002c0.246,0.024,0.49,0.036,0.732,0.036c0.003,0,0.007-0.001,0.011-0.001h33.388
                                                        c3.687,27.953,27.652,49.603,56.597,49.603c28.943,0,52.908-21.65,56.595-49.603H347.9c3.688,27.953,27.652,49.603,56.596,49.603
                                                        c28.943,0,52.91-21.65,56.598-49.603h33.396c0.005,0,0.011,0.001,0.016,0.001c0.25,0,0.496-0.015,0.74-0.039
                                                        c0.044-0.004,0.086-0.013,0.13-0.018c0.195-0.023,0.389-0.05,0.579-0.088c0.082-0.016,0.161-0.038,0.242-0.057
                                                        c0.147-0.034,0.295-0.07,0.439-0.113c0.098-0.029,0.193-0.063,0.289-0.096c0.123-0.042,0.246-0.086,0.367-0.135
                                                        c0.104-0.041,0.203-0.086,0.304-0.131c0.11-0.051,0.22-0.103,0.327-0.158c0.102-0.052,0.2-0.106,0.298-0.162
                                                        c0.103-0.06,0.205-0.122,0.306-0.186c0.094-0.06,0.188-0.121,0.278-0.185c0.102-0.071,0.199-0.146,0.298-0.222
                                                        c0.082-0.065,0.165-0.129,0.245-0.197c0.103-0.087,0.2-0.178,0.298-0.271c0.068-0.065,0.139-0.129,0.205-0.197
                                                        c0.104-0.106,0.203-0.218,0.302-0.331c0.053-0.061,0.108-0.12,0.159-0.182c0.11-0.136,0.21-0.276,0.31-0.417
                                                        c0.034-0.049,0.072-0.095,0.105-0.145c0.122-0.183,0.237-0.371,0.343-0.565c0.008-0.012,0.016-0.023,0.021-0.036
                                                        c0.113-0.208,0.217-0.421,0.31-0.641c0.026-0.063,0.046-0.128,0.071-0.191c0.061-0.155,0.121-0.31,0.172-0.471
                                                        c0.033-0.104,0.057-0.211,0.086-0.316c0.033-0.125,0.068-0.249,0.096-0.376c0.025-0.113,0.041-0.229,0.06-0.344
                                                        c0.017-0.101,0.039-0.2,0.052-0.303c0.318-2.548,6.191-49.667,8.814-80.135c0.003-0.029,0.004-0.059,0.007-0.088
                                                        c0.755-8.783,1.239-16.179,1.239-20.707C511.998,232.264,468.26,188.525,414.498,188.525z M380.957,203.527h30.683l-3.919,44.996
                                                        h-30.683L380.957,203.527z M171.008,428.129c-23.217,0-42.105-18.888-42.105-42.104s18.889-42.104,42.105-42.104
                                                        s42.104,18.888,42.104,42.104S194.224,428.129,171.008,428.129z M404.496,428.129c-23.216,0-42.103-18.888-42.103-42.104
                                                        s18.888-42.104,42.103-42.104c23.217,0,42.105,18.888,42.105,42.104S427.713,428.129,404.496,428.129z M487.863,378.522h-26.767
                                                        c-3.686-27.955-27.652-49.606-56.598-49.606c-28.944,0-52.91,21.652-56.596,49.606H227.604
                                                        c-3.686-27.955-27.651-49.606-56.596-49.606s-52.912,21.652-56.598,49.606H89.266l6.299-65.004H364.5v0.004
                                                        c0.004,0,0.007,0,0.011,0c0.251,0,0.5-0.014,0.746-0.039c0.046-0.004,0.091-0.014,0.137-0.02c0.196-0.023,0.391-0.051,0.583-0.089
                                                        c0.083-0.017,0.164-0.04,0.246-0.06c0.15-0.036,0.3-0.071,0.446-0.115c0.1-0.03,0.195-0.066,0.292-0.1
                                                        c0.126-0.044,0.252-0.087,0.374-0.137c0.105-0.043,0.206-0.091,0.308-0.139c0.111-0.051,0.222-0.102,0.329-0.158
                                                        c0.102-0.054,0.202-0.112,0.303-0.17c0.103-0.06,0.205-0.121,0.305-0.185c0.097-0.063,0.189-0.129,0.282-0.195
                                                        c0.099-0.07,0.195-0.142,0.291-0.217c0.086-0.069,0.171-0.14,0.255-0.213c0.095-0.082,0.188-0.166,0.278-0.253
                                                        c0.076-0.073,0.152-0.148,0.226-0.225c0.09-0.094,0.177-0.191,0.263-0.29c0.067-0.078,0.133-0.156,0.197-0.236
                                                        c0.083-0.105,0.162-0.213,0.24-0.322c0.059-0.082,0.116-0.164,0.172-0.248c0.073-0.113,0.143-0.229,0.21-0.347
                                                        c0.051-0.088,0.103-0.176,0.149-0.266c0.063-0.118,0.117-0.238,0.174-0.359c0.044-0.097,0.089-0.192,0.129-0.292
                                                        c0.049-0.118,0.09-0.239,0.133-0.36c0.037-0.107,0.076-0.214,0.109-0.324c0.033-0.116,0.06-0.235,0.09-0.353
                                                        c0.029-0.119,0.061-0.237,0.084-0.358c0.023-0.118,0.037-0.238,0.055-0.358c0.018-0.124,0.039-0.246,0.051-0.372
                                                        c0.002-0.018,0.006-0.035,0.007-0.053l3.759-43.15h38.762c22.979,0,33.343,11.906,44.314,24.512
                                                        c9.053,10.401,19.16,22.006,36.34,24.837C492.968,335.938,489.441,365.554,487.863,378.522z M496.432,297.838
                                                        c-11.145-2.272-18.002-10.107-26.309-19.651c-10.389-11.935-23.072-26.5-47.385-29.214l3.88-44.548
                                                        c39.764,5.881,70.38,40.229,70.38,81.602C496.998,288.838,496.788,292.922,496.432,297.838z"/>
                                    </g>
                                </g>
                            <g>
                                <g>
                                    <path fill="#ffdb4d" d="M171.008,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5
                                                        C198.508,370.861,186.171,358.524,171.008,358.524z M171.008,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5
                                                        s12.5,5.607,12.5,12.5S177.9,398.524,171.008,398.524z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#ffdb4d" d="M404.496,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5
                                                        C431.996,370.861,419.659,358.524,404.496,358.524z M404.496,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5
                                                        s12.5,5.607,12.5,12.5S411.389,398.524,404.496,398.524z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path fill="#ffdb4d" d="M71,188.527H34.334c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5H71c4.143,0,7.5-3.358,7.5-7.5
                                                        C78.5,191.885,75.143,188.527,71,188.527z"/>
                                </g>
                            </g>
                            </svg>

                    </div>
                </div>
                <h3>Скорость работы</h3>
            </div>
            <p class="advantages_item_text">Среднее время подбора транспорта под запрос клиента – <b>55 минут</b>.
                Среднее
                время согласования и подписания договора <b>16 минут</b>.
                Среднее расстояние, проходимое автотранспортом за сутки – <b>800 км</b>.</p>
        </div>
        <div class="advantages_content__item wow fadeInLeft">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg enable-background="new 0 0 60 60" version="1.1" viewBox="0 0 60 60" xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffdb4d"
                                      d="m45 25h-25c-0.552 0-1 0.447-1 1s0.448 1 1 1h25c0.552 0 1-0.447 1-1s-0.448-1-1-1z"/>
                            <path fill="#ffdb4d"
                                  d="m20 19h10c0.552 0 1-0.447 1-1s-0.448-1-1-1h-10c-0.552 0-1 0.447-1 1s0.448 1 1 1z"/>
                            <path fill="#ffdb4d"
                                  d="m45 33h-25c-0.552 0-1 0.447-1 1s0.448 1 1 1h25c0.552 0 1-0.447 1-1s-0.448-1-1-1z"/>
                            <path fill="#ffdb4d"
                                  d="m45 41h-25c-0.552 0-1 0.447-1 1s0.448 1 1 1h25c0.552 0 1-0.447 1-1s-0.448-1-1-1z"/>
                            <path fill="#ffdb4d"
                                  d="m45 49h-25c-0.552 0-1 0.447-1 1s0.448 1 1 1h25c0.552 0 1-0.447 1-1s-0.448-1-1-1z"/>
                            <path fill="#ffdb4d"
                                  d="M49,14.586V0H6v55h5v5h43V19.586L49,14.586z M40,8.414l9,9L50.586,19H40V8.414z M8,53V2h39v10.586L39.414,5H11v48H8z    M13,58v-3V7h25v14h14v37H13z"/>
                            </svg>

                    </div>
                </div>
                <h3>Предоставление оригиналов <br> отчетных документов</h3>
            </div>
            <p class="advantages_item_text">Предоставляем полные пакет оригиналов отчетных документов. Отправляем
                почтой в течении 5 дней с момента выгрузки транспорта.</p>
        </div>
        <div class="advantages_content__item wow fadeInRight">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                             xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg">
                                <g transform="translate(1 1)">
                                    <path fill="#ffdb4d"
                                          d="m101.4 383c-9.387 0-17.067 7.68-17.067 17.067s7.68 17.067 17.067 17.067 17.067-7.68 17.067-17.067-7.68-17.067-17.067-17.067z"/>
                                    <path fill="#ffdb4d"
                                          d="m323.27 383c-9.387 0-17.067 7.68-17.067 17.067s7.68 17.067 17.067 17.067 17.067-7.68 17.067-17.067-7.681-17.067-17.067-17.067z"/>
                                    <path fill="#ffdb4d"
                                          d="m502.47 289.13h-25.6v-25.6c0-5.12-3.413-8.533-8.533-8.533s-8.533 3.413-8.533 8.533v25.6h-34.133v-205.65c0-18.773-14.507-33.28-32.427-33.28h-360.96c-18.773 0-33.28 14.507-33.28 33.28v295.25c0 16.213 13.653 29.867 29.867 29.867h13.403c4.075 29.155 28.753 51.2 59.131 51.2s55.056-22.045 59.131-51.2h103.6c4.075 29.155 28.753 51.2 59.131 51.2s55.056-22.045 59.131-51.2h43.269v-102.4h76.8c5.12 0 8.533-3.413 8.533-8.533-1e-3 -5.12-3.414-8.534-8.534-8.534zm-486.4-68.266h119.47c5.12 0 8.533-3.413 8.533-8.533s-3.413-8.533-8.533-8.533h-119.47v-25.6h85.333c5.12 0 8.533-3.413 8.533-8.533s-3.413-8.533-8.533-8.533h-85.333v-77.655c0-9.387 6.827-16.213 16.213-16.213h360.11c9.387 0 16.213 7.68 16.213 16.213v205.65h-392.53v-68.266zm85.333 221.87c-23.893 0-42.667-18.773-42.667-42.667 0-23.893 18.773-42.667 42.667-42.667 23.893 0 42.667 18.773 42.667 42.667s-18.774 42.667-42.667 42.667zm221.87 0c-23.893 0-42.667-18.773-42.667-42.667 0-23.893 18.773-42.667 42.667-42.667 23.893 0 42.667 18.773 42.667 42.667-1e-3 23.894-18.774 42.667-42.667 42.667zm85.333-51.2h-26.203c-4.075-29.155-28.753-51.2-59.131-51.2-0.138 0-0.274 9e-3 -0.412 0.01-0.148-1e-3 -0.294-0.01-0.441-0.01-29.867 0-54.613 22.187-58.88 51.2h-103c-3.821-27.339-25.761-48.416-53.528-50.936-0.203-0.019-0.409-0.029-0.613-0.046-0.699-0.056-1.397-0.114-2.103-0.147-0.957-0.046-1.919-0.072-2.887-0.072s-1.93 0.026-2.887 0.072c-0.706 0.033-1.404 0.09-2.103 0.147-0.204 0.017-0.41 0.027-0.613 0.046-27.767 2.52-49.707 23.597-53.528 50.936h-13.402c-6.827 0-12.8-5.973-12.8-12.8v-72.533h392.53v85.333z"/>
                                </g>
                            </svg>
                    </div>
                </div>
                <h3>Не платите за перевозку <br> – закажите догруз!</h3>
            </div>
            <p class="advantages_item_text">Догруз - груз от 50 до 800 кг. Он может быть помещен в автомобиль,
                идущий попутным маршрутом, при наличии свободного места в кузове. Стоимость при такой перевозке
                существенно ниже, чем стоимость перевозки отдельной машиной, что дает Вам возможность сэкономить, а
                нам не ехать с полупустым кузовом.
            </p>
        </div>
        <div class="advantages_content__item wow fadeInLeft">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg viewBox="0 -96 480 480" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffdb4d"
                                  d="m470.398438 127.199219-76.558594-76.558594c-7.085938-6.488281-16.238282-10.257813-25.839844-10.640625h-48v-32c0-4.417969-3.582031-8-8-8h-304c-4.417969 0-8 3.582031-8 8v216c0 4.417969 3.582031 8 8 8h56.71875c-3.300781 18.859375 4.917969 37.878906 20.917969 48.394531 16.003906 10.515625 36.722656 10.515625 52.726562 0 16-10.515625 24.21875-29.535156 20.917969-48.394531h177.4375c-3.300781 18.859375 4.917969 37.878906 20.917969 48.394531 16.003906 10.515625 36.722656 10.515625 52.726562 0 16-10.515625 24.21875-29.535156 20.917969-48.394531h16.71875c17.671875 0 32-14.328125 32-32v-49.519531c.003906-8.722657-3.449219-17.09375-9.601562-23.28125zm-102.398438-71.199219c5.347656.398438 10.429688 2.492188 14.503906 5.976562l66.023438 66.023438h-96.527344v-72zm-64-40v144h-288v-144zm-192 256c-17.671875 0-32-14.328125-32-32s14.328125-32 32-32 32 14.328125 32 32-14.328125 32-32 32zm0-80c-17.125.023438-32.941406 9.167969-41.503906 24h-54.496094v-40h288v40h-150.496094c-8.5625-14.832031-24.378906-23.976562-41.503906-24zm272 80c-17.671875 0-32-14.328125-32-32s14.328125-32 32-32 32 14.328125 32 32-14.328125 32-32 32zm80-72c0 8.835938-7.164062 16-16 16h-22.496094c-8.546875-14.847656-24.371094-24-41.503906-24s-32.957031 9.152344-41.503906 24h-22.496094v-160h16v80c0 4.417969 3.582031 8 8 8h118.671875c.867187 2.050781 1.320313 4.253906 1.328125 6.480469zm0 0"/>
                        </svg>
                    </div>
                </div>
                <h3>Перевозки попутным транспортом <br> до 30% ниже стоимости <br> обычной перевозки!</h3>
            </div>
            <p class="advantages_item_text">Половина наших перевозок отдельным транспортом осуществляется в
                попутном направлении. Стоимость такой перевозки до 30% ниже рыночной стоимости, однако подбор
                транспорта по низкой ставке осуществляется за 3-5 дней. Предупредите нас заранее, и мы предоставим
                Вам попутный транспорт!</p>
        </div>
        <div class="advantages_content__item wow fadeInRight">
            <div class="advantages_content__item_header">
                <div class="advantages_content__item_img_container">
                    <div class="advantages_content__item_img">
                        <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512"
                             xml:space="preserve"
                             xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ffdb4d"
                                      d="m85.072 454.93c-1.859-1.861-4.439-2.93-7.069-2.93s-5.21 1.069-7.07 2.93-2.93 4.44-2.93 7.07 1.069 5.21 2.93 7.069c1.86 1.86 4.44 2.931 7.07 2.931s5.21-1.07 7.069-2.931c1.86-1.859 2.931-4.439 2.931-7.069s-1.07-5.21-2.931-7.07z"/>
                            <path fill="#ffdb4d"
                                  d="m469.52 182.94c-1.86-1.861-4.43-2.93-7.07-2.93-2.63 0-5.21 1.069-7.07 2.93-1.859 1.86-2.93 4.44-2.93 7.07s1.07 5.21 2.93 7.069c1.86 1.86 4.44 2.931 7.07 2.931 2.64 0 5.21-1.07 7.07-2.931 1.869-1.859 2.939-4.439 2.939-7.069s-1.07-5.21-2.939-7.07z"/>
                            <path fill="#ffdb4d"
                                  d="m509.06 2.929c-1.876-1.875-4.42-2.929-7.073-2.929l-245.99 0.013c-5.522 0-9.999 4.478-9.999 10v28.597l-94.789 25.399c-5.335 1.43-8.501 6.913-7.071 12.247l49.127 183.34-42.499 42.499c-5.409-7.898-14.491-13.092-24.764-13.092h-95.997c-16.542 0-29.999 13.458-29.999 29.999v163c0 16.542 13.457 30 29.999 30h95.998c14.053 0 25.875-9.716 29.115-22.78l11.89 10.369c9.179 8.004 20.939 12.412 33.118 12.412h301.87c5.522 0 10-4.478 10-10v-492c-2e-3 -2.652-1.054-5.196-2.929-7.071zm-373.06 479.07c0 5.513-4.486 10-10 10h-95.997c-5.514 0-10-4.486-10-10v-163c0-5.514 4.486-10 10-10h37.999v115.2c0 5.522 4.478 10 10 10s10-4.478 10-10v-115.2h37.999c5.514 0 10 4.486 10 10v163zm30.043-401.26l79.954-21.424v37.055l-6.702 1.796c-2.563 0.687-4.746 2.362-6.072 4.659s-1.686 5.026-0.999 7.588c3.843 14.341-4.698 29.134-19.039 32.977-2.565 0.688-4.752 2.366-6.077 4.668-1.325 2.301-1.682 5.035-0.989 7.599l38.979 144.34h-20.07l-10.343-40.464c-0.329-1.288-0.905-2.475-1.676-3.507l-46.966-175.28zm79.954 61.49v84.381l-18.239-67.535c7.619-3.934 13.854-9.82 18.239-16.846zm143.66 349.77h-189.54c-7.345 0-14.438-2.658-19.974-7.485l-24.149-21.061v-138.31l43.658-43.658 7.918 30.98c1.132 4.427 5.119 7.523 9.688 7.523l196.6 0.012c7.72 0 14 6.28 14 14s-6.28 14-14 14h-100.74c-5.522 0-10 4.478-10 10s4.478 10 10 10h132.04c7.72 0 14 6.28 14 14s-6.28 14-14 14h-132.04c-5.522 0-10 4.478-10 10s4.478 10 10 10h110.64c7.72 0 14 6.28 14 14s-6.28 14-14 14h-110.64c-5.522 0-10 4.478-10 10s4.478 10 10 10h76.533c7.72 0 14 6.28 14 14-1e-3 7.716-6.281 13.996-14 13.996zm102.33 0h-71.36c1.939-4.273 3.028-9.01 3.028-14s-1.089-9.727-3.028-14h3.139c18.747 0 33.999-15.252 33.999-33.999 0-5.468-1.305-10.635-3.609-15.217 14.396-3.954 25.005-17.149 25.005-32.782 0-7.584-2.498-14.595-6.711-20.255v-126.74c0-5.522-4.478-10-10-10s-10 4.478-10 10v113.79c-2.35-0.515-4.787-0.795-7.289-0.795h-0.328c1.939-4.273 3.028-9.01 3.028-14 0-18.748-15.252-33.999-33.999-33.999h-16.075c17.069-7.32 29.057-24.286 29.057-44.005 0-26.389-21.468-47.858-47.857-47.858-26.388 0-47.857 21.469-47.857 47.858 0 19.719 11.989 36.685 29.057 44.005h-54.663v-190.14c17.864-3.893 31.96-17.988 35.852-35.853h75.221c3.892 17.865 17.988 31.96 35.852 35.853v31.09c0 5.522 4.478 10 10 10s10-4.478 10-10v-40.018c0-5.522-4.478-10-10-10-14.847 0-26.924-12.079-26.924-26.925 0-5.522-4.478-10-10-10h-93.076c-5.522 0-10 4.478-10 10 0 14.847-12.078 26.925-26.924 26.925-5.522 0-10 4.478-10 10v199.07h-19.532v-279.99l225.99-0.011v472zm-113-208.14c-15.361 0-27.857-12.497-27.857-27.857s12.497-27.858 27.857-27.858 27.857 12.497 27.857 27.857-12.496 27.858-27.857 27.858z"/>
                            </svg>
                    </div>
                </div>
                <h3>Отсрочки платежа до 5 дней</h3>
            </div>
            <p class="advantages_item_text">Возможность отсрочки платежа до 5 банковских дней для клиентов,
                совершивших с нами более 10 перевозок</p>
        </div>
    </div>
</section>
<section id="payment_info" class="payment_info">
    <h2>Информация об оплате</h2>
    <div class="payment_info_content">
        <h3>Подробнее о способах оплаты:</h3>
        <div class="payment_info_column">
            <div class="payment_info___type_item">
                <div class="payment_info_type" id='payment_info_type_first'>
                    <div class="payment_info__number">1</div>
                    <span class="payment_type_info_text">Безналичный расчет с НДС 18%</span>
                </div>
                <div id='payment_info_text_first' class="payment_info__type_text">
                    <p>Оплата производится c НДС 18% на основании счета до выгрузки транспортного средства. При
                        некоторых условиях возможна постоплата. Условия уточняйте у менеджера.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type" id='payment_info_type_second'>
                    <div class="payment_info__number">2</div>
                    <span class="payment_type_info_text">Безналичный расчет без НДС</span>
                </div>
                <div id='payment_info_text_second' class="payment_info__type_text">
                    <p>Оплата производится без НДС на основании счета до выгрузки транспортного средства. При
                        некоторых условиях возможна постоплата. Условия уточняйте у менеджера.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type" id='payment_info_type_third'>
                    <div class="payment_info__number">3</div>
                    <span class="payment_type_info_text">Оплата наличными</span>
                </div>
                <div id='payment_info_text_third' class="payment_info__type_text">
                    <p>Оплата производится наличными средствами на основании счета перед выгрузкой транспортного
                        средства.</p>
                </div>
            </div>
            <div class="payment_info___type_item">
                <div class="payment_info_type" id='payment_info_type_fourth'>
                    <div class="payment_info__number">4</div>
                    <span class="payment_type_info_text">Online оплата</span>
                </div>
                <div id='payment_info_text_fourth' class="payment_info__type_text">
                    <p>Оплата online переводом на карту Сбербанка и других банков до выгрузки транспортного
                        средства.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="payment_decoration_line_first">
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5332.9 380.1" style="enable-background:new 0 0 5332.9 380.1;"
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
            <rect x="-18.2" y="-23.6" class="st0" width="5356" height="400.3"/>
            <polygon class="st1" points="5372,266 3226.2,102.4 -118,384 5373.8,384.3 "/>
            <polygon class="st2" points="-8.9,373.1 3439.1,9.1 5335.1,85.1 5339.1,277.1 3279.1,145.1 "/>
            </svg>
    </div>
    <div class="payment_decoration_line_second">
        <!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px" viewBox="0 0 5348.7 450.9" style="enable-background:new 0 0 5348.7 450.9;"
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
            <rect x="-71.1" y="-102.6" class="st0" width="5488.9" height="587.9"/>
            <polygon class="st1" points="5399.8,293.3 822.7,71.4 -48,179 -41.1,-18.6 5381.8,-6.6 "/>
            <polygon class="st2" points="-19.3,175.9 736.7,7.9 5344.7,227.9 5356.7,439.9 832.7,95.9 "/>
            </svg>
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
    </div>
</section>
<footer>
    <div class="logo_section">
        <div class="footer_logo"></div>
    </div>
    <div class="footer_item">
        <p class="footer_item_text">Наша миссия заключается в сохранении эмоционального, материального благополучия
            клиентов и развитии инфраструктуры за счёт быстрых и систематизированных грузоперевозок во всех
            регионах России. Работая с 2013 года, мы успели провести более 11500 тысяч успешных грузоперевозок. Наш
            автотранспорт позволяет перевозить груз с любыми характеристиками и габаритами.</p>
        <a class="confidential_politics" href="">Политика конфиденциальности</a>
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
            <a class="solcial_link" href="https://vk.com/club134747802"><span class="icon-vk"></span></a>
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
            <rect x="-2.8" y="-15.8" class="st0" width="5366" height="310"/>
            <polygon class="st1" points="5362,257 3096.3,69.4 -10,182 -16,282 5363.2,294.3 "/>
            <polygon class="st2" points="-43.3,182.9 3136.7,10.9 5388.7,138.9 5388.7,266.9 3048.7,98.9 "/>
            </svg>

    </div>
</footer>
<section class="modal_window_first">
    <div class="modal_img_container">
        <div class="modal_img"></div>
    </div>
    <span class="modal_title">Заявка принята</span>
    <p class="modal_text">Почти готово! Информация по вашей перевозке отправлена менеджеру и он уже взялся за
        расчет стоимости перевозки. </p>
    <div id="close_btn" class="close_btn" onclick="close_modal()">
    </div>
</section>
<section class="modal_window_second">
    <h2>Оставить заявку на доставку груза</h2>
    <p class="modal_text">Заполните контактную форму и мы с вами свяжемся</p>
    <div id="close_btn" class="close_btn" onclick="close_modal()">
    </div>
    <form id="prompt-form" method='post' action="../thanks_window.php">
        <input class="modal_window_input" name="name" type="text" placeholder="Введите Ваше имя">
        <input class="modal_window_input" id="phone-number" name="phone-number" type="text" maxlength="14"
               placeholder="Контактный телефон" required/>
        <button class="modal_window_submit_btn" name="modal_btn" type="submit">Оставить заявку</button>
    </form>
    <p class="modal_agreement">Отправляя заявку, вы подтверждаете свое согласие с <a href="">политикой
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
</script>
</body>

</html>