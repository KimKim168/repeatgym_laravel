<?php

use Illuminate\Support\Facades\Route;

Route::get('/web', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('client.index');
});

Route::get('/service', function () {
    return view('client.service');
});

Route::get('/contact_us', function () {
    return view('client.contact_us');
});

Route::get('/sendnow', function () {
    return view('client.sendnow');
});

Route::get('/testimonial', function () {
    return view('client.testimonial');
});

Route::get('/whyrepeatgym', function () {
    return view('client.why_repeat_gym');
});