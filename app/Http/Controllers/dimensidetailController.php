<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dimensidetailController extends Controller
{
    public function index($id)
    {
        $data = DB::table('dimensiarticle')
            ->join('dimensiauthor', 'dimensiarticle.author_id', '=', 'dimensiauthor.id_author')
            ->join('dimensicategory', 'dimensiarticle.category_id', '=', 'dimensicategory.id_category')
            ->where('id', $id)
            ->first();
        return view('content/dimensidetail', ['data' => $data]);
    }

    public function show(string $id): View
    {
        return view('content/dimensidetail', [
            'content' => User::findOrFail($id)
        ]);
    }
}
