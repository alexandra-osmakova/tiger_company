var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween:50,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var aboutItem = document.getElementsByClassName('about_content_text')[0];
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
    services_counter();
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


function services_counter() {
    var options = {
      useEasing: true,
      useGrouping: true,
      separator: ',',
      decimal: '.',
    };
    var demo = new CountUp('first_item_to_count__tiger_services', 0, 6, 0, 2, options);
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
    var demo = new CountUp('second_item_to_count__tiger_services', 0, 20, 0, 2, options);
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
    var demo = new CountUp('third_item_to_count__tiger_services', 0, 11243, 0, 2, options);
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
    var demo = new CountUp('fourth_item_to_count__tiger_services', 0, 272, 0, 2, options);
    if (!demo.error) {
      demo.start();
    } else {
      console.error(demo.error);
    }
  }