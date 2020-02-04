$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

$(function () {
  'use strict'

  $('.nav-link__mobile').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
  })
})


// // Menú fixed
// $(window).scroll(function () {
//   if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
//     $('.navbar-fixed-js').addClass('fixed');
//     $('.nav-link').addClass('fixed-color');
//     $('.nav-link--btn').addClass('fixed-color--btn');
//     $('.nav-top__header').addClass('nav-top__header--detele');
//     $('.hamburger-inner').addClass('js-hamburger');
//     $("#iso").addClass('img-size').attr('src', 'assets/img/Logo_CM.png').removeClass('scroll-up');

//   } else {
//     $('.navbar-fixed-js').removeClass('fixed');
//     $('.nav-link').removeClass('fixed-color');
//     $('.nav-link--btn').removeClass('fixed-color--btn');
//     $('.nav-top__header').removeClass('nav-top__header--detele');
//     $('.hamburger-inner').removeClass('js-hamburger');
//     $("#iso").removeClass('img-size').attr('src', 'assets/img/logo-color.png').removeClass('scroll-up');

//   }
// });

//menu drop
$(document).ready(function () {
  $('.navbar .dropdown').hover(function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
  }, function () {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
  });
});




// menu hambuger

( function( $ ) {
  const $document = $(document);
  
  const initTyped = (selector, options) => {
   let settings = options;
   if (!settings) {
    settings = {
     stringsElement: '#typed-content',
     typeSpeed: 60,
     backSpeed: 40,
     loop: true,
     showCursor: true
    };
   }
   
   let typed = new Typed(selector, settings);
  }
  
  $document.ready(() => {
   console.log('ready');
   
   initTyped('.js-typed');
  });
 })(jQuery);
