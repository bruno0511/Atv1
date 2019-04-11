<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Atv1Controller extends Controller
{
    public function p1()
    {
        $dado = "Pagina Inical";

        return view('p1')->with('Titulo',$dado);

    }
    public function p2()
    {
        $dado = "Pagina 2";

        return view('p2')->with('Titulo',$dado);

    }
    public function p3()
    {
        $dado = "Pagina 3";

        return view('p3')->with('Titulo',$dado);

    }

}
