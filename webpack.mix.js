const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/app.js', 'js')
	.extract([
        'jquery',
	'alpinejs',
	'@popperjs/core',
        'bootstrap',
        'mmenu-js',
        'plyr',
	'minibarjs',
        'in-view',
        'vanilla-back-to-top',
	])
    .sass('source/_assets/css/app.scss', 'css')
    .options({
        processCssUrls: false,
    })
	.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'source/assets/build/webfonts')
	.purgeCss()
    .version();
