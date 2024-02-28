<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $req, $kata)
    {
        $url = $req->url();
        $kata2 = "Ini dari controller";
        return view('pages.data', ['kata' => $kata, 'kata2' => $kata2, 'url' => $url]);
    }
}
