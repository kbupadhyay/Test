<?php

// MyVendor\contactform\src\routes\web.php
Route::get('contact', function(){
    return 'Hello from the contact form package';
});

Route::get('welcome_package', function(){
    return view('test::welcome');
});