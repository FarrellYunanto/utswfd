<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(Request $request){
        $a = $request->param1;
        $b = 2;
        if($b == 2) $hasil = $a+$b;

        if(isset($request->param3)){
            $hasil += $request->param3;
        }

        $hasil += $request->param3 ? $request->param3 : 0;
        // return $hasil;
        return view('profil')->with('hasil', $hasil);
    }
}
