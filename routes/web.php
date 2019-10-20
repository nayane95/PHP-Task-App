<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    echo 'Nayanajith';
});

Route::get('/about', 'PagesController@indexaboutus');
Route::get('contact', function () {
    return view('contactus');
});