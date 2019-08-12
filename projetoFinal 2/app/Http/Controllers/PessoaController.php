<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function edit($indec = 0){
        $pessoas = array('pablo','full');
    
        return  " editar pessoa ".$pessoas[$indec];
    }
    public function deletar($indec2 = 0){
        $pessoas = array('pablo','full','carla');
    
        return  " deletar pessoa ".$pessoas[$indec2];
    }
    public function  cadastrar(){
    
        return  " cadastrar pessoa";
    }
    public function  consultar(){
    
        return  " consultar pessoa";
    }
}
