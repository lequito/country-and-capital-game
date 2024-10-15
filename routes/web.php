<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Hello Word';
});

Route::get('/showData', [MainController::class, 'showData']);