// Register $ global var for jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;
import AOS from 'aos/dist/aos.js';
import 'owl.carousel';
import 'jquery.easing/jquery.easing.js';

const button = document.getElementById('navbarButton');
const menu = document.getElementById('navbarResponsive');

button.addEventListener('click', function() {
  menu.classList.toggle('toggle')
});

(function($) {
"use strict"; // Start of use strict

// Smooth scrolling using jQuery easing
$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: (target.offset().top - 56)
      }, 1000, "easeInOutExpo");
      return false;
    }
  }
});

/**
 * Custom scripts
 */
// Closes responsive menu when a scroll trigger link is clicked
$('.js-scroll-trigger').click(function() {
  $('.navbar-collapse').collapse('hide');
});

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

// Activate scrollspy to add active class to navbar items on scroll
// $('body').scrollspy({
//   target: '#mainNav',
//   offset: 56
// });

})(jQuery); // End of use strict

$(document).ready(function () {
  $(window).resize(function () {
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
  }
});

AOS.init({ duration: 2000 });

window.addEventListener("load", function () {
  const loader = document.querySelector(".loader");
  loader.className += " hidden"; // class "loader hidden"
});
