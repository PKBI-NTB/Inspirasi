const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue()  // Untuk Vue
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
