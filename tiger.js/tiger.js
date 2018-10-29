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
var quiz_btn = document.getElementsByClassName('apply_questions_start__btn');
var quiz_step_mark = document.getElementsByClassName('current_question_item');
var quiz_progress = document.getElementsByClassName('progrss_line_item');
var quiz_current_number = document.getElementsByClassName('apply_questions_span')[0];
var question_item = document.getElementsByClassName('question_item');
var quiz_textarea = document.getElementsByClassName('quiz_textarea');
var n = 0;

for (var i = 0; i < question_item_checkbox.length; i++) {
  question_item_checkbox[i].addEventListener('click', quizStart)
}

for (var j = 0; j < quiz_btn.length; j++) {
  quiz_btn[j].addEventListener('click', quizNextStep)
}

for(var k = 0; k < quiz_textarea.length; k++) {
  quiz_textarea[k].addEventListener('input',quizStart_texarea )
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
    }
  }
}

function quizNextStep() {
  if (n <=6 ) {
    question_item[n].classList.add('invisible_item');
    question_item[n + 1].classList.remove('invisible_item');
    quiz_step_mark[n].classList.remove('current_question_item__active');
    quiz_step_mark[n + 1].classList.add('current_question_item__active');
    quiz_progress[n + 1].classList.add('progrss_line_item__active');
    quiz_current_number.innerHTML = Number(quiz_current_number.innerHTML) - 1;
    n++
  } else if (n == 7) {
    quiz_step_mark[7].classList.remove('current_question_item__active');
    quiz_step_mark[0].classList.add('current_question_item__active');
    question_item[7].classList.add('invisible_item');
    question_item[0].classList.remove('invisible_item');
    quiz_textarea[0].value = "";
    n = 0;
  }
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



var payment_info_column = document.getElementsByClassName('payment_info_column')[0];
var payment_info__type_text = document.getElementsByClassName('payment_info__type_text');

window.onload = function () {
  payment_info__type_text[0].classList.add('visible_item')
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

var clientWidth = document.documentElement.clientWidth;
var about_numbers_container = document.getElementsByClassName('about_numbers_container')[0];

// The checker
const gambitGalleryIsInView = el => {
	const scroll = window.scrollY || window.pageYOffset
	const boundsTop = el.getBoundingClientRect().top + scroll
	
	const viewport = {
		top: scroll,
		bottom: scroll + window.innerHeight,
	}
	
    const bounds = {
		top: boundsTop,
		bottom: boundsTop + el.clientHeight,
	}
	
	return ( bounds.bottom >= viewport.top && bounds.bottom <= viewport.bottom ) 
		|| ( bounds.top <= viewport.bottom && bounds.top >= viewport.top );
}


var aboutItem = document.getElementsByClassName('about_header_text')[0];
var k = 0;

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

