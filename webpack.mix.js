const mix = require( 'laravel-mix' );

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

mix.js( 'resources/js/app.js', 'public/js' )
   .sass('resources/sass/app.scss', 'public/css')
   .vue()
   .babel( [
	           'resources/js/libs/Confirmation.js',
	           'resources/js/libs/Form.js',
	           'resources/js/libs/Search.js',
	           'resources/js/libs/Utility.js',
	           'resources/js/libs/LoadMore.js',
	           'resources/js/libs/PasswordToggle.js',
	           'resources/js/libs/SearchBox.js',
	           'resources/js/libs/Gallery.js',
	           'resources/js/libs/Filter.js',
	           'resources/js/libs/CardBooking.js',
	           'resources/js/bootstrap.js'
           ], 'public/js/all.js' )
   .version();
