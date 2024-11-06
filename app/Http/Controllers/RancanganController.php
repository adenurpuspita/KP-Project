<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RancanganController extends Controller
{
    public function index()
    {
        return view('rancangan');
    }
}
