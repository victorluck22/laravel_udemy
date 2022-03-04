<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        //$suppliers = ['forn 1', 'forn 2'];
        $suppliers = [
            0 => ['nome' => 'forn1', 'status' => 'N', 'cnpj' => '0', 'ddd' => '11', 'telefone' => '00000-0000'],
            1 => ['nome' => 'forn2', 'status' => 'S', 'cnpj' => null , 'ddd' => '21', 'telefone' => '00000-0000'],
            2 => ['nome' => 'forn3', 'status' => 'S', 'cnpj' => null , 'ddd' => '24', 'telefone' => '00000-0000']
        ];



        return view('app.suppliers.index', compact('suppliers'));
    }
}
