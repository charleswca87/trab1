<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaControle extends Controller
{
    public function Pagi1()
    {
        return view ('Pagi1');
    }
    public function Pagi2()
    {
        return view ('Pagi2');
    }
    public function Pagi3()
    {
        return view ('Pagi3');
    }
}
