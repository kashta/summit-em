<?php



Route::get('contact-us', function () {
    return View::make('home.contactUs');
});
Route::get('gallery', function () {
    return View::make('home.gallery');
});
Route::controller('/', 'HomeController');