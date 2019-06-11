let mix = require('./node_modules/laravel-mix/src');

mix
  .setPublicPath('dist')
  .js('resources/js/field.js', 'js')
  .sass('resources/sass/field.scss', 'css');
// .copy('resources/js/jtk.js', 'dist/js');
