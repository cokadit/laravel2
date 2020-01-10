<?php

// Route::view('url','nama file view.blade.php ');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers',function() {
    $customers = [
        'john doe',
        'jone doe',
        'bob the builder'
    ];
    return view('internals.customers', [
        //'customers' dikirim trus diterima sebagai foreach('$customers' as xx$customersxx) di halaman customers.blade
        'customers' => $customers,

    ]);
});
