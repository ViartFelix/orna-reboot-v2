const mix = require('laravel-mix');

mix.webpackConfig({experiments: {topLevelAwait: true}});

mix.js('resources/js/home.js', 'public/js').vue();
mix.js('resources/js/header.js', 'public/js').vue();

mix.sass("resources/sass/common.scss", "public/css");
mix.sass("resources/sass/vars.scss", "public/css");

mix.sass("resources/sass/home/index.scss", "public/css/home");
mix.sass("resources/sass/equipements/index.scss", "public/css/equipements");
mix.sass("resources/sass/header/index.scss", "public/css/header");