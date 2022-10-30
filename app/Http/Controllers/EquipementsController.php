<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipement;

class EquipementsController extends Controller
{
    public function index() {
        return view("pages.equipements_pages.equipements");
    }
}
