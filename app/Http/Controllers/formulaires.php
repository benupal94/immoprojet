<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulaires extends Controller
{
    public function index(){
        return view('formulaires');
    }
}
