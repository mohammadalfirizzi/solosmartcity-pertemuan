<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class berandaController extends Controller
{
    public function index(){
        return view('content/beranda');
    }

}
