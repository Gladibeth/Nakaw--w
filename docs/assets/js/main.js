// Font
$(document).ready(function () {
  WebFontConfig = {
    google: {
      families: ['Poppins:400,500,600,700', 'Open+Sans:300,400,600,700']
    }
  };
  (function () {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
});

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active");
    $('.main-general__sidebar').addClass('active-sidebar')
    $('.hamburger-inner').addClass('js-hamburger');



  } else {
    $(this).removeClass("is-active")
    $('.main-general__sidebar').removeClass('active-sidebar')
    $('.hamburger-inner').removeClass('js-hamburger');

  }
});

$('.nav-link-p').click(function () {
  $('.main-general__sidebar').removeClass('active-sidebar')
})
/* -------------------------
   ----- Navbar link active  -----
   ------------------------- */
let activeOne = $('#navbarNav').find('a.nav-link.active');

$(window).on('activate.bs.scrollspy', function (e, obj) {
  activeOne = $('#navbarNav').find('a.nav-link.active');
});

$('a.nav-link').hover(function () {
  activeOne.removeClass('active')
  $(this).addClass('active')
}, function () {
  console.log('hover out')
  $(this).removeClass('active')
  activeOne.addClass('active')
})