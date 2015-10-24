var elixir = require('laravel-elixir');

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
    //mix.sass('app.scss');
    
    mix.styles([
    	'bootstrap.min.css',
    	'font-awesome/css/font-awesome.css',
    	'plugins/toastr/toastr.min.css',
    	'plugins/gritter/jquery.gritter.css',
        'plugins/sweetalert/sweetalert.css',
        'plugins/dropzone/dropzone.css',
    	'animate.css',
    	'style.css'
	]);

    mix.scripts([
    	'jquery-2.1.1.js',
    	'jquery.pjax.js',
    	'bootstrap.js',
    	'plugins/metisMenu/jquery.metisMenu.js',
    	'plugins/slimscroll/jquery.slimscroll.min.js',
    	'plugins/peity/jquery.peity.min.js',
        'plugins/pace/pace.min.js',
        'plugins/jquery-ui/jquery-ui.min.js',
        'plugins/gritter/jquery.gritter.min.js',
        'plugins/sparkline/jquery.sparkline.min.js',
        'plugins/toastr/toastr.min.js',
        'plugins/sweetalert/sweetalert.min.js',
        'plugins/dropzone/dropzone.js',
    	'inspinia.js'
	]);
});
