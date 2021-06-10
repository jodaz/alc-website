const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js/dist/umd/popper.js': ['Popper'],
    'owl.carousel/dist/owl.carousel.min.js': ['owlCarousel'],
    'jquery.easing/jquery.easing.min.js' : ['jquery.easing'],
    'aos/dist/aos.js': ['AOS']
  })
  .js('resources/js/app.js', 'public/website/js/app.js')
  .sass('resources/css/app.sass', 'public/website/css/app.css');
