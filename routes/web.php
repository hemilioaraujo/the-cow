<?php

use Illuminate\Support\Facades\Route;

Route::get('/moo', function () {
    return view('moo');
});