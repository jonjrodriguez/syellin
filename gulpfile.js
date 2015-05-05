var elixir = require('laravel-elixir');

elixir.config.assetsDir = './';
elixir.config.sourcemaps = false;
elixir.config.production = true;

elixir(function(mix) {
    mix.sass('style.scss', './', {includePaths: ['./bower_components/bootstrap-sass/assets/stylesheets']});
});