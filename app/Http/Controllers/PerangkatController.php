<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    public function index()
    {
        return view('perangkat');
    }
}
