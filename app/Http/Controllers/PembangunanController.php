<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembangunanController extends Controller
{
    public function index()
    {
        return view('pembangunan');
    }
}
