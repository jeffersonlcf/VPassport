let mix = require('laravel-mix');
let npmPath = '';
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

mix.js('resources/assets/js/dependencies.js', 'public/js').sourceMaps();
mix.js('resources/assets/js/main.js', 'public/js').sourceMaps();
mix.sass('resources/assets/sass/dependencies.scss', 'public/css')
    .sass('resources/assets/sass/main.scss', 'public/css')
