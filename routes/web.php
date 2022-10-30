<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\EquipementsController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/equipements', [EquipementsController::class,"index"]);