var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 10,
  slidesPerGroup: 3,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var menu__icon = document.getElementsByClassName('menu__icon')[0];
var menu = document.getElementsByClassName('header_menu_open')[0];
var burger_title = document.getElementsByClassName('burger_menu_title')[0];

menu__icon.addEventListener('click', menu_open);

function menu_open() {
  menu.classList.toggle('menu_visible');
}

var header_burger_menu = document.getElementsByClassName("header_burger_menu")[0];

menu__icon.addEventListener('click', function () {
  header_burger_menu.classList.toggle('menu_state_open');
  burger_title.classList.toggle('menu_state_open');
})

var question_item_checkbox = document.getElementsByClassName('question_item_checkbox_input');
var quiz_btn = document.getElementsByClassName('apply_questions_start__btn')[0];
var quiz_step_mark = document.getElementsByClassName('current_question_item');
var quiz_progress = document.getElementsByClassName('progrss_line_item');
var quiz_current_number = document.getElementsByClassName('apply_questions_span')[0];
var n = 0;



for (var i = 0; i < question_item_checkbox.length; i++) {
  question_item_checkbox[i].addEventListener('click', quizStart)
}

quiz_btn.addEventListener('click', quizNextStep)



function quizStart() {
  for (var i = 0; i < question_item_checkbox.length; i++) {
    if (question_item_checkbox[i].checked) {
      quiz_btn.disabled = false;
      quiz_btn.classList.remove('apply_questions_start__btn_disabled');
    }
  }
}

function quizNextStep() {
  if (n <= 5) {
    quiz_step_mark[n].classList.remove('current_question_item__active');
    quiz_step_mark[n + 1].classList.add('current_question_item__active');
    quiz_progress[n + 1].classList.add('progrss_line_item__active');
    quiz_current_number.innerHTML = Number(quiz_current_number.innerHTML) - 1;
    n++
  } else {

  }
}


var aboutItem = document.getElementsByClassName('about_content')[0];

var isScrolling = false;
 
window.addEventListener("scroll", throttleScroll, false);

function throttleScroll(e) {
  if (isScrolling == false) {
    window.requestAnimationFrame(function() {
      scrolling(e);
      isScrolling = false;
    });
  }
  isScrolling = true;
}

document.addEventListener("DOMContentLoaded", scrolling, false);

function scrolling(e) {

  if (isPartiallyVisible(aboutItem)) {
    counter() 
  } 

  if (isFullyVisible(aboutItem)) {
        counter() 
  }
}

function isPartiallyVisible(el) {
  var elementBoundary = el.getBoundingClientRect();

  var top = elementBoundary.top;
  var bottom = elementBoundary.bottom;
  var height = elementBoundary.height;

  return ((top + height >= 0) && (height + window.innerHeight >= bottom));
}

function isFullyVisible(el) {
  var elementBoundary = el.getBoundingClientRect();

  var top = elementBoundary.top;
  var bottom = elementBoundary.bottom;

  return ((top >= 0) && (bottom <= window.innerHeight));
}


function counter() {
  var options = {
    useEasing: true,
    useGrouping: true,
    separator: ',',
    decimal: '.',
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
  };
  var demo = new CountUp('second_item_to_count', 0, 10, 0, 2, options);
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
  var demo = new CountUp('third_item_to_count', 0, 11000, 0, 2, options);
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
  var demo = new CountUp('fourth_item_to_count', 0, 250, 0, 2, options);
  if (!demo.error) {
    demo.start();
  } else {
    console.error(demo.error);
  }
}

var payment_info_column = document.getElementsByClassName('payment_info_column')[0];
var payment_info__type_text = document.getElementsByClassName('payment_info__type_text');
var payment_info_type = document.getElementsByClassName('payment_info_type');

window.onload = function () {
  payment_info__type_text[0].classList.add('visible_item')
}
payment_info_column.addEventListener('mouseover', hoverText, false);

function hoverText(e) {
  if (e.target.classList.contains('payment_info_type')) {
      var target = e.target.dataset.number;
      for (var i = 0; i < payment_info__type_text.length; i++) {
          if (payment_info__type_text[i].dataset.number == target) {
            payment_info__type_text[i].classList.add('visible_item');
          } else {
            payment_info__type_text[i].classList.remove('visible_item');
          }
      }
  }
};