<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipement;

class HomeController extends Controller
{
    public function index() {
        $e=Equipement::all();
        return view("baguette",["equip"=>$e]);
    }
}
