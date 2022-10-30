<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Equipement;

class EquipementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        if(!$request->query('p')) {
            $equip=Equipement::where("id",">",0)
            ->take(15)
            ->get();
            return response()->json($equip);
        } else {
            $equip=Equipement::where("id",">",($request->query('p')*15))
            ->take(15)
            ->get();
            return response()->json($equip);
        }
        
    }
}