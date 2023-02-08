let mix = require('laravel-mix');

mix.js('src/app.js', 'dist')
    .sass('src/app.scss', 'app.css')
    .setPublicPath('dist')
    .options({
        processCssUrls: false
    });
