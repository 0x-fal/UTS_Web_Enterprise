<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('/dom', function () {
    return view('dom');
});
