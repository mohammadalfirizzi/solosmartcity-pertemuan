<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function index(){
        return view('content/about');
    }
}
