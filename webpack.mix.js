const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bs.js', 'public/js')
    .js('resources/js/jquery.js', 'public/js')
    .js('resources/js/map.js', 'public/js')
    .sass('resources/css/bs.scss', 'public/css')
    .css('resources/css/stylesheet.css', 'public/css')
    .copy('resources/css/leaflet.css', 'public/css')
    .copy('resources/css/style.css', 'public/css')
    .copy('resources/css/jtoast.css', 'public/css')
    .copy('resources/js/jtoast.js', 'public/js')
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/css/images', 'public/css/images')
    