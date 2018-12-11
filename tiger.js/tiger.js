var menu__icon = document.getElementsByClassName('menu__icon')[0];
var menu = document.getElementsByClassName('header_menu_open')[0];
var burger_title = document.getElementsByClassName('burger_menu_title')[0];
var burger_menu_title = document.getElementsByClassName('burger_menu_title')[0];

menu__icon.addEventListener('click', menu_open);

function menu_open() {
    menu.classList.toggle('menu_visible');
}

var header_burger_menu = document.getElementsByClassName("header_burger_menu")[0];

menu__icon.addEventListener('click', function () {
    header_burger_menu.classList.toggle('menu_state_open');
    burger_title.classList.remove('menu_state_open');
})

var modal_window_first = document.getElementsByClassName('modal_window_first')[0];
var modal_window_second = document.getElementsByClassName('modal_window_second')[0];
var modal_overlay = document.getElementById('modal_overlay');
var close_modal_btn = document.getElementById('close_btn');
var header_modal_btn = document.getElementsByClassName('promo_img_section__btn')[0];
var service_types = document.getElementsByClassName('service_types')[0];


function modal_on_first() {
    modal_window_first.classList.add('modal_visible');
    modal_overlay.classList.add('modal_overlay');
}

function modal_on_second() {
    modal_window_second.classList.add('modal_visible');
    modal_overlay.classList.add('modal_overlay');
}

function close_modal() {
    modal_overlay.classList.remove('modal_overlay');
    modal_window_second.classList.remove('modal_visible');
    modal_window_first.classList.remove('modal_visible');
}

function overflow() {
    document.documentElement.classList.add('no_scroll');
}

var slider = tns({
    container: '.my-slider',
    items: 1,
    rewind: true,
    swipeAngle: false,
    gutter: 30,
    speed: 400,
    mouseDrag: true,
    controlsText: [" ", " "],
    controlsPosition: 'bottom',
    navPosition: 'bottom',
    navAsThumbnails: true,
    arrowKeys: true,
    responsive: {
        425: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1001: {
            items: 4,
        }
    },
})

var slider = tns({
    container: '.my-blog-slider',
    items: 1,
    rewind: true,
    swipeAngle: false,
    gutter: 30,
    speed: 400,
    mouseDrag: true,
    controlsText: [" ", " "],
    controlsPosition: 'bottom',
    navPosition: 'bottom',
    navAsThumbnails: true,
    arrowKeys: true,
})

var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 400
});

var payment_info_column = document.getElementsByClassName('payment_info_column')[0];
var payment_info__type_text = document.getElementsByClassName('payment_info__type_text');

window.onload = function () {
    payment_info__type_text[0].classList.add('visible_item');

    if (mobile_width <= 800) {
        var item_animation_to_change = document.getElementsByClassName('advantages_content__item');
        for (var i = 0; i < item_animation_to_change.length; i++) {
            item_animation_to_change[i].dataset.aos = "fade-up";
        }
    }
}
payment_info_column.addEventListener('mouseover', hoverText, false);

function hoverText(e) {
    if (e.target.id === 'payment_info_type_fourth') {
        for (var i = 0; i < payment_info__type_text.length; i++) {
            payment_info__type_text[i].classList.remove('visible_item');
        }
        payment_info__type_text[3].classList.add('visible_item');
    } else if (e.target.id === 'payment_info_type_third') {
        for (var i = 0; i < payment_info__type_text.length; i++) {
            payment_info__type_text[i].classList.remove('visible_item');
        }
        payment_info__type_text[2].classList.add('visible_item');
    } else if (e.target.id === 'payment_info_type_second') {
        for (var i = 0; i < payment_info__type_text.length; i++) {
            payment_info__type_text[i].classList.remove('visible_item');
        }
        payment_info__type_text[1].classList.add('visible_item');
    } else if (e.target.id === 'payment_info_type_first') {
        for (var i = 0; i < payment_info__type_text.length; i++) {
            payment_info__type_text[i].classList.remove('visible_item');
        }
        payment_info__type_text[0].classList.add('visible_item');
    }
};


var mobile_width = window.innerWidth;

payment_info_column.addEventListener('click', hey, false);

function hey(e) {
    if (mobile_width <= 425) {
        if (e.target.id === 'payment_info_type_fourth') {
            for (var i = 0; i < payment_info__type_text.length; i++) {
                payment_info__type_text[i].classList.remove('visible_item');
            }
            payment_info__type_text[3].classList.add('visible_item');
        } else if (e.target.id === 'payment_info_type_third') {
            for (var i = 0; i < payment_info__type_text.length; i++) {
                payment_info__type_text[i].classList.remove('visible_item');
            }
            payment_info__type_text[2].classList.add('visible_item');
        } else if (e.target.id === 'payment_info_type_second') {
            for (var i = 0; i < payment_info__type_text.length; i++) {
                payment_info__type_text[i].classList.remove('visible_item');
            }
            payment_info__type_text[1].classList.add('visible_item');
        } else if (e.target.id === 'payment_info_type_first') {
            for (var i = 0; i < payment_info__type_text.length; i++) {
                payment_info__type_text[i].classList.remove('visible_item');
            }
            payment_info__type_text[0].classList.add('visible_item');
        }
    }
}

var question_item_checkbox = document.getElementsByClassName('question_item_checkbox_input');
var quiz_btn = document.getElementsByClassName('apply_questions_start__btn');
var quiz_step_mark = document.getElementsByClassName('current_question_item');
var quiz_progress = document.getElementsByClassName('progrss_line_item');
var quiz_current_number = document.getElementsByClassName('apply_questions_span')[0];
var question_item = document.getElementsByClassName('question_item');
var quiz_textarea = document.getElementsByClassName('quiz_textarea');
var apply_questions_text = document.getElementsByClassName('apply_questions_text');
var progress_line = document.getElementsByClassName('progress_line')[0];
var current_question = document.getElementsByClassName('current_question')[0];
var question_info_item = document.getElementsByClassName('question_info_item');
var checkbox_mark_type = document.querySelectorAll('.question_item_checkbox_mark_type input');
var apply_questions_actual_quantity = document.getElementsByClassName('apply_questions_actual_quantity')[0];
var quiz_input_with_img = document.getElementsByClassName('checkbox_question_info_trigger');
var new_input = document.getElementsByClassName('new_input_quiz')[0];
var n = 0;

if (quiz_btn.length !== 0) {
    quiz_btn[1].addEventListener('click', function () {
        question_info_item[7].classList.remove('invisible_item');
    });

    for (var i = 0; i < question_item_checkbox.length; i++) {
        question_item_checkbox[i].addEventListener('click', quizStart)
    }

    for (var j = 0; j < quiz_btn.length; j++) {
        quiz_btn[j].addEventListener('click', quizNextStep)
    }

    for (var k = 0; k < quiz_textarea.length; k++) {
        quiz_textarea[k].addEventListener('input', quizStart_texarea)
    }


    function quizStart_texarea() {
        quiz_btn[n].disabled = false;
        quiz_btn[n].classList.remove('apply_questions_start__btn_disabled');
    }


    function quizStart() {
        for (var i = 0; i < question_item_checkbox.length; i++) {
            if (question_item_checkbox[i].checked) {
                quiz_btn[n].disabled = false;
                quiz_btn[n].classList.remove('apply_questions_start__btn_disabled');
                if (question_item_checkbox[i].classList.contains('checkbox_question_info_trigger')) {
                    quizTextToSee()
                } else if (question_item_checkbox[i].id == 'other') {
                    new_input.classList.remove('invisible_item')
                }
            }
        }
    }

    function quizTextToSee(i) {
        for (var j = 0; j < question_info_item.length; j++) {
            question_info_item[j].classList.add('invisible_item');
        }
        for (var i = 0; i < quiz_input_with_img.length; i++) {
            if (quiz_input_with_img[i].checked) {
                question_info_item[i].classList.remove('invisible_item');
            }
        }
    }

    function quizNextStep() {
        if (n <= 8) {
            question_item[n].classList.add('invisible_item');
            question_item[n + 1].classList.remove('invisible_item');
            quiz_step_mark[n].classList.remove('current_question_item__active');
            quiz_step_mark[n + 1].classList.add('current_question_item__active');
            quiz_progress[n + 1].classList.add('progrss_line_item__active');
            quiz_current_number.innerHTML = Number(quiz_current_number.innerHTML) - 1;
            n++;
            if (n >= 5) {
                apply_questions_actual_quantity.innerHTML = "вопроса";
            }
            if (n == 8) {
                apply_questions_actual_quantity.innerHTML = "вопрос";
            }
        }
    }

    var apply_questions = document.getElementsByClassName('apply_questions')[0];

    apply_questions.addEventListener('click', quiz_back);

    function quiz_back(e) {
        if (e.target.classList.contains('quiz_back_button_image')) {
            if ((Number(e.target.id) > 0)) {
                var newIndex = Number(e.target.id);
                for (var i = 0; i < question_item.length; i++) {
                    question_item[i].classList.add('invisible_item');
                }
                question_item[newIndex - 1].classList.remove('invisible_item');
                cleanUpQuiz(newIndex)
            }
        }
    }

    function cleanUpQuiz(index) {
        n--;
        new_input.classList.add('invisible_item');
        quiz_current_number.innerHTML = Number(quiz_current_number.innerHTML) + 1;
        quiz_progress[index].classList.remove('progrss_line_item__active');
        quiz_step_mark[index].classList.remove('current_question_item__active');
        quiz_step_mark[index - 1].classList.add('current_question_item__active');

        if (index == 1) {
            quiz_step_mark[index].classList.remove('current_question_item__active');
            quiz_step_mark[index - 1].classList.add('current_question_item__active');
        } else if (n == 4) {
            apply_questions_actual_quantity.innerHTML = "вопросов";
        }
        for (var i = 0; i < question_item_checkbox.length; i++) {
            question_item_checkbox[i].checked = false;
        }

        for (var j = 0; j < quiz_textarea.length; j++) {
            quiz_textarea[j].value = '';
        }

        for (var k = 0; k < quiz_btn.length; k++) {
            if (quiz_btn[k].classList.contains('apply_questions_start__btn_disabled') != true) {
                quiz_btn[k].classList.add('apply_questions_start__btn_disabled');
            }
        }

        for (var h = 0; h < checkbox_mark_type.length; h++) {
            if (checkbox_mark_type[h].checked) {
                checkbox_mark_type[h].checked = false;
            }
        }

        for (var l = 0; l < question_info_item.length; l++) {
            question_info_item[l].classList.add('invisible_item');
        }

        question_info_item[0].classList.remove('invisible_item');
        question_info_item[7].classList.remove('invisible_item');
    }
}
var invisible_header_btn = document.getElementsByClassName('invisible_header_btn')[0];
var invisible_header_input = document.getElementsByClassName('invisible_header_input');
var header_input_count = 0;
var invisible_header_counter_item = document.getElementsByClassName('invisible_header_counter_item')[0];

invisible_header_btn.addEventListener('click', function () {
    if (header_input_count < 3) {
        if (invisible_header_input[header_input_count].value.length > 0) {
            headerCounter();
            invisible_header_input[header_input_count].classList.add('animated_elem');
            invisible_header_input[header_input_count].classList.add('animated_transform');
            header_input_count++;
            console.log(header_input_count);

            if (header_input_count === 3) {
                invisible_header_btn.value = "Рассчитать стоимость";
            }
        }
    }
});

function headerCounter() {
    if (Number(invisible_header_counter_item.innerHTML) !== 4) {
        invisible_header_counter_item.innerHTML = Number(invisible_header_counter_item.innerHTML) + 1;
    } else if (Number(invisible_header_counter_item.innerHTML) === 4) {
        invisible_header_counter_item.innerHTML = 1;
    }
}

function counter() {
    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.'
    };
    var demo = new CountUp('first_item_to_count', 0, 6, 0, 2, options);
    if (!demo.error) {
        demo.start();
    } else {
        console.error(demo.error);
    }

    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.',
        suffix: '+'
    };
    var demo = new CountUp('second_item_to_count', 0, 20, 0, 2, options);
    if (!demo.error) {
        demo.start();
    } else {
        console.error(demo.error);
    }

    var options = {
        useEasing: true,
        useGrouping: true,
        separator: '',
        decimal: '.',
    };
    var demo = new CountUp('third_item_to_count', 0, 11243, 0, 2, options);
    if (!demo.error) {
        demo.start();
    } else {
        console.error(demo.error);
    }

    var options = {
        useEasing: true,
        useGrouping: true,
        separator: '',
        decimal: '.',
    };
    var demo = new CountUp('fourth_item_to_count', 0, 272, 0, 2, options);
    if (!demo.error) {
        demo.start();
    } else {
        console.error(demo.error);
    }
}

var clientWidth = document.documentElement.clientWidth;

var aboutItem = document.getElementsByClassName('about_header_text')[0];
var k = 0;

var isScrolling = false;

if (aboutItem !== undefined) {
    window.addEventListener("scroll", throttleScroll, false);

    function throttleScroll(e) {
        if (isScrolling == false) {
            window.requestAnimationFrame(function () {
                scrolling(e);
                isScrolling = false;
            });
        }
        isScrolling = true;
    }

    document.addEventListener("DOMContentLoaded", scrolling, false);

    function scrolling(e) {

        if (isPartiallyVisible(aboutItem) & k == 0) {
            counter();
            k++;
        }
    }

    function isPartiallyVisible(el) {
        var elementBoundary = el.getBoundingClientRect();

        var top = elementBoundary.top;
        var bottom = elementBoundary.bottom;
        var height = elementBoundary.height;

        return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }
}
new WOW().init();

window.addEventListener("scroll", overflow);