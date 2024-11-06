<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemografisDesaController extends Controller
{
    public function index()
    {
        return view('demografis');
    }
}
