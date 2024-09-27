<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('/About');
});

Route::get('/Project', function () {
    return view('/Project');
});