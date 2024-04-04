<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class experienceController extends Controller
{
    public function index(){
        return view('content/experience');
    }
}
