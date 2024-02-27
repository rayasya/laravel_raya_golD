<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $req, $kata)
    {
        $kata2 = "Ini dari controller";
        return view('data', ['kata' => $kata, 'kata2' => $kata2]);
    }
}
