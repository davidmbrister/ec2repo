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

mix.react('resources/js/app.js', 'public/js/app.js');
mix.react('resources/js/pages/Home.js', 'public/js/home.js');
mix.react('resources/js/pages/Profile.js', 'public/js/profile.js');
mix.sass('resources/sass/app.scss', 'public/css');
   
