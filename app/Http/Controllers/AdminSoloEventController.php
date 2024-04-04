<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSoloEventController extends Controller
{
    public function index()
    {
        $data = DB::table('soloevent')->get();
        return view('admin.soloevent.index', ['data' => $data]);
    }

    public function add()
    {
        return view('admin.soloevent.add');
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $start_periode = $request->start_periode;
        $end_periode = $request->end_periode;
        $location = $request->location;
        $description = $request->description;
        $image_url = $request->file("image_url");
        $is_galerysoloevent = $request->is_galerysoloevent ? 1 : 0;

        $add = DB::table('soloevent')->insert([
            'title' => $title,
            'start_periode' => $start_periode,
            'end_periode' => $end_periode,
            'location' => $location,
            'description' => $description,
            'image_url' =>  $image_url->getClientOriginalName(),
            'is_galerysoloevent' => $is_galerysoloevent
        ]);

        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexSoloEvent')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('indexSoloEvent')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('soloevent')
            ->where('id', $id)
            ->first();
        return view('admin.soloevent.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $start_periode = $request->start_periode;
        $end_periode = $request->end_periode;
        $location = $request->location;
        $description = $request->description;
        $image_url = $request->file("image_url");
        $is_galerysoloevent = $request->is_galerysoloevent ? 1 : 0;

        if ($image_url == NULL) {
            $update = DB::table('soloevent')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'start_periode' => $start_periode,
                    'end_periode' => $end_periode,
                    'location' => $location,
                    'description' => $description,
                    'is_galerysoloevent' => $is_galerysoloevent
                ]);
            return redirect()->route('indexSoloEvent')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $update = DB::table('soloevent')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'start_periode' => $start_periode,
                    'end_periode' => $end_periode,
                    'location' => $location,
                    'description' => $description,
                    'image_url' => $image_url->getClientOriginalName(),
                    'is_galerysoloevent' => $is_galerysoloevent
                ]);
            return redirect()->route('indexSoloEvent')
                ->with('success', 'Data berhasil diupdate!');
        }
    }
    public function delete($id)
    {
        $data = DB::table('soloevent')->where('id', $id)->delete();
        return redirect()->route('indexSoloEvent')
            ->with('success', 'Data berhasil dihapus!');
    }
}
