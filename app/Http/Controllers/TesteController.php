<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(int $p1, int $p2)
    {
        //echo "The sum of values is :".($p1+$p2);

        //return view('site.test', ['p1' => $p1,'p2' => $p2]); //array

        //return view('site.test', compact('p1', 'p2')); //compact

        return view('site.test')->with('p1', $p1)->with('p2', $p2); //with
    }
}
