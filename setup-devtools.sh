# Rebuild laravel nova with devtools enabled
# https://nova.laravel.com/docs/4.0/customization/frontend.html#vue-devtools

cd ./vendor/laravel/nova
mv webpack.mix.js.dist webpack.mix.js
npm ci
npm run dev
rm -rf node_modules
cd -
php artisan nova:publish
