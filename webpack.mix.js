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

mix.js('resources/js/app.js', 'public/js').extract(['swiper'])
   .sass('resources/sass/app.scss', 'public/css');

mix.styles(['node_modules/swiper/dist/css/swiper.min.css',], 'public/css/mix.css');