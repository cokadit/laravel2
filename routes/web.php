<?php
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view('url','nama file view.blade.php ');
Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');

//waktu masuk ke localhost:8000/customers lgsung masuk ke file CustomerController ngejalanin fungsi list
Route::get('customers', 'CustomerController@list');
