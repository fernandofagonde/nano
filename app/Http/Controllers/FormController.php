<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function etapa1()
{
    return view('etapa1');
}

public function processarEtapa1(Request $request)
{
    // processar os dados da etapa 1
    return redirect()->route('etapa-2');
}

public function etapa2()
{
    return view('etapa2');
}

public function processarEtapa2(Request $request)
{
    // processar os dados da etapa 2
    return redirect()->route('etapa-3');
}

public function etapa3()
{
    return view('etapa3');
}

public function processarEtapa3(Request $request)
{
    // processar os dados da etapa 3
    return redirect()->route('etapa-4');
}

public function etapa4()
{
    return view('etapa4');
}

public function processarEtapa4(Request $request)
{
    // processar os dados da etapa 4
    return redirect()->route('conclusao');
}

}
