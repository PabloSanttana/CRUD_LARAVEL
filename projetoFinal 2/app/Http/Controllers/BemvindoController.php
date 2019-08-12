<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BemvindoController extends Controller
{
    public function ola($indec = 0){
        $pessoas = array('pablo','full');
        return view('index');
       // return  "olaa mundo".$pessoas[$indec];
    }
}
