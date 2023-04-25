<?php
require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';
Route::run('/', function () {
    echo 'Hello World';
});


// Route::run('/uye/{url}', function ($name) {
//     echo 'hoşgeldin' . $name;
// });


Route::run('/uyeler', 'uyeler@index');
Route::run('/uyeler', 'uyeler@post','post');
Route::run('/uye/{url}', 'uye@index');
Route::run('/profil/sifre-degistir', 'profile/chpassword@index');
