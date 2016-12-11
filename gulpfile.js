/**
 * Created by Carlos Eduardo on 11/12/2016.
 */

var elixir = require('laravel-elixir'),
    bowerDir = "vendor/bower_components/";

elixir(function (mix) {
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts')
        .copy(bowerDir + 'font-awesome/fonts', 'public/fonts')

        .copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js')
        .copy(bowerDir + 'jquery/dist/jquery.js', 'resources/assets/js')

        //junta os dois arquivos em um soh
        .scripts([
            'jquery.js',
            'bootstrap.js'
        ], 'public/js/script.js')

        .less('app.less');
});