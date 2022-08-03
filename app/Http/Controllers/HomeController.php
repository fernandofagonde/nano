<?php

namespace App\Http\Controllers;

use App\Models\Clientes;

class HomeController extends Controller
{



    public function index()
    {

        $clientes = Clientes::get();
        
        return view('index',['clientes'=>$clientes]);
    }
}
