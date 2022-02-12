<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    /*
    public function index(){
        return view('admuserview');
    }*/

    public function index(Request $petition){
        $array = ['name'=>$petition->query('user','User1')];
        return view('admuserview')->with($array);

    }
}
