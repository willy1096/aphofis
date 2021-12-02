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
 mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/formContacto.js', 'public/js').version();

// // mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();
mix.sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/pages/home.scss', 'public/css/pages')
   .sass('resources/sass/pages/contacto.scss', 'public/css/pages')
   .sass('resources/sass/pages/galeria.scss', 'public/css/pages')
   .sass('resources/sass/pages/servicios.scss', 'public/css/pages').version();