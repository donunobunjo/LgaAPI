<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lga;
use Illuminate\Support\Facades\Response;

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

    public function getAllLgasInState($state){
       //return Response::json(['msg'=>'wazzz upppp']);
       ///return Response::json($state);
       $lgas = Lga::where('state',$state)->get();
       return response()->json($lgas);
    }
}
