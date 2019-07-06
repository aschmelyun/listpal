const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .copy('resources/images/', 'public/assets/images')
    .options({
        processCssUrls: false
    })
    .version();
