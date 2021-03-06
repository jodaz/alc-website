// Register $ global var for jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;
import AOS from 'aos/dist/aos.js';
import 'owl.carousel';
import 'jquery.easing/jquery.easing.js';

const navbar = document.getElementById('navbar');

(function($) {
"use strict"; // Start of use strict

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      }
    }
  });
});

})(jQuery); // End of use strict

$(document).ready(function () {
    $(window).scroll(function(){
        if (document.documentElement.scrollTop >= window.innerHeight * 0.75  ||
            document.body.scrollTop >= window.innerHeight * 0.75 ) {
            navbar.classList.add('navbar--scroll');
        } else {
            navbar.classList.remove('navbar--scroll');
        }
    });

    /*$(window).resize(function () {
      cambio();
    });

    cambio();

    function cambio(){
      if ($(window).width() < 768) {
        $(window).scroll(function(){
          var scroll = $(window).scrollTop();
          if (scroll > 150) {
            $("#mainNav").css("background-color" , "#656464");
          }
          else{
            $("#mainNav").css("background" , "transparent");
          }
        })
      } else {
        $(window).scroll(function(){
          var scroll = $(window).scrollTop();
          if (scroll > 300) {
            $("#mainNav").css("background-color" , "#656464");
          }
          else{
            $("#mainNav").css("background" , "rgba(101, 100, 100, 1)");
          }
        })
      }
    }*/
});

AOS.init({ duration: 2000 });
