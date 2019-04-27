let mix = require('laravel-mix');

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


/* GENERAL APP  */
mix.js('resources/assets/app/js/app.js', 'public/app/js')
   .sass('resources/assets/app/sass/app.scss', 'public/app/css');


/*  SHOP FRONTEND  */
mix.js('resources/assets/site/js/app.js', 'public/site/js')
    .sass('resources/assets/shop/sass/app.scss', 'public/shop/css');

/*  SHOP ADMIN  */
mix.js('resources/assets/site/admin/js/app.js', 'public/site/admin/js')
    .sass('resources/assets/shop/admin/sass/app.scss', 'public/site/admin/css');

/*  APPLICATION ADMIN  */
mix.js('resources/assets/admin/js/app.js', 'public/app_admin/js')
    .sass('resources/assets/admin/sass/app.scss', 'public/app_admin/css');
