var elixir = require('laravel-elixir');
var bowersPath = '../../../bower_components/';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
    		bowersPath + 'bootstrap/dist/css/bootstrap.css',
            bowersPath + 'font-awesome/css/font-awesome.css',
    		'app.css'
    	], 'public/css/app.css')

        .scripts([
            bowersPath + 'jquery/dist/jquery.js',
            bowersPath + 'bootstrap/dist/js/bootstrap.js',
            'libs/modernizr.js',
            'libs/classie.js',
            'libs/overlay.js'
        ], 'public/js/app.js')

        .sass('components/Menu.scss', 'resources/assets/css/menu.css')
            .styles([
                'menu.css'
            ], 'public/css/menu.css')

            .scripts([
                'libs/menu.js',
            ], 'public/js/menu.js')

    	.copy('bower_components/bootstrap/fonts', 'public/build/fonts/')
        .copy('bower_components/font-awesome/fonts', 'public/build/fonts/')

    	.version([
    		'public/css/app.css',
    		'public/js/app.js',

            'public/css/menu.css',
            'public/js/menu.js',
    	]);
});
