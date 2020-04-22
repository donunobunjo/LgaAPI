<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lga;

class LgaController extends Controller
{
    public function getAllLga(){
        $lgas = Lga::all();
        return response()->json($lgas);
    }
    public function getAllStates(){
       // $users = User::select('name')->groupBy('name')->get()->toArray() ;
       $states = Lga::select('state')->groupBy('state')->get()->toArray();
       return response()->json($states);
    }
}
