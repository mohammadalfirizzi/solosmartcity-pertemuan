<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class soloeventController extends Controller
{
    public function index()
    {
        $dataatas = DB::table('soloevent')->get();
        $datatengah = DB::table('soloevent')->where('start_periode', '<=', Carbon::today())->get();
        $databawah = DB::table('soloevent')->where('is_galerysoloevent', 1)->get();
        return view('content/soloevent', ['dataatas' => $dataatas, 'datatengah' => $datatengah, 'databawah' => $databawah]);
    }
}
