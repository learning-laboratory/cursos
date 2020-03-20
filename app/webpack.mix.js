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
    .sass('resources/sass/app.scss', 'public/css');
/*    .css('resources/assets/libs/blog-post.css','public/css')
    .css('resources/assets/libs/bootstrap.css','public/css')
    .css('resources/assets/libs/font-awesome.css','public/css')
    .css('resources/assets/libs/metisMenu.css','public/css')
    .css('resources/assets/libs/bs-admin.css','public/css')
    .css('resources/assets/libs/styles.css','public/css')
    .js('resources/assets/libs/jquery.js','public/js')
    .js('resources/assets/libs/popper.js','public/js')
    .js('resources/assets/libs/bootstrap.js','public/js');
*/
    /*mix.styles([
		'public/css/vendor/normalize.css',
		'public/css/vendor/videojs.css'
	], 'public/css/all.css');

	mix.scripts([
	'public/js/admin.js',
	'public/js/dashboard.js'
	], 'public/js/all.js');*/