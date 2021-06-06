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
    .vue()
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ]);
    .sass('resources/scss/style.scss', 'public/css', {
        sassOptions: {
            outputStyle: 'compressed',
        },
    })
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'last 2 version',
                    'ie 6-8',
                    'Firefox > 20'
                ]
            }
        }
    });
