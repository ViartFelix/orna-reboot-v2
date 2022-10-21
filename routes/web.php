<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('default');
});


Route::get('/baguette',function(){
    return view("baguette");
});