<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\User;

use Illuminate\Http\Request;

class dimensidetailController extends Controller
{
    public function index(){
        return view('content/dimensidetail');
    }
    
    public function show(string $id): View
    {
        return view('content/dimensidetail',[
            'content' => User::findOrFail($id)
        ]);
            
    }
}
