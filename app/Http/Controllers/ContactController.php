<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        /* echo "<pre>";
        print_r($_POST);
        echo "</pre>"; */
        echo view('site.contact', ['tittle' => 'Contact Page']);
    }
}
