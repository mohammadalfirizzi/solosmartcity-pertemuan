<?php

namespace App\Http\Controllers;

use App\Models\Dimensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Storage;

class dimensiController extends Controller
{
    public function index()
    {
        $data = DB::table('dimensiarticle')
            ->join('dimensiauthor', 'dimensiarticle.author_id', '=', 'dimensiauthor.id_author')
            ->join('dimensicategory', 'dimensiarticle.category_id', '=', 'dimensicategory.id_category')
            ->orderBy('dimensiarticle.created_at', 'desc')
            ->paginate(10);
        return view('content/dimensi', ['data' => $data]);
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $output = "";
            $data = DB::table('dimensiarticle')
                ->join('dimensiauthor', 'dimensiarticle.author_id', '=', 'dimensiauthor.id_author')
                ->join('dimensicategory', 'dimensiarticle.category_id', '=', 'dimensicategory.id_category')
                ->select('dimensiarticle.*', 'dimensiauthor.author_name', 'dimensicategory.category_name', 'dimensicategory.category_alias')
                ->where('dimensiarticle.content', 'LIKE', '%' . $request->search . '%')
                ->orWhere('dimensiarticle.title', 'LIKE', '%' . $request->search . '%')
                ->get();
            if ($data) {
                foreach ($data as $key => $d) {
                    $output .= '<a href="/dimensidetail/' . $d->id . '"><li class="list-group-item d-flex justify-content-between align-items-start remove-border">' . $d->content . '</li></a>';
                }
                return response($output);
            }
        }
    }

    public function dashboard()
    {
        $data = Dimensi::get();

        return view('dashboard', compact('data'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'desc'          => 'required',
            'subdimensi'    => 'required',
            'photo'         => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['Judul']      = $request->judul;
        $data['Desc']       = $request->desc;
        $data['subdimensi'] = $request->subdimensi;

        $photo              = $request->file('photo');
        $filename           = date('Y-m-d') . $photo->getClientOriginalName();
        $path               = 'photo-dimensi/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($photo));
        $data['image']      = $filename;

        Dimensi::create($data);

        return redirect()->route('dashboard');
    }

    public function edit(Request $request, $id)
    {
        $data = Dimensi::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

        $data['Judul']      = $request->judul;
        $data['Desc']       = $request->desc;
        $data['subdimensi'] = $request->subdimensi;

        Dimensi::whereId($id)->update($data);

        return redirect()->route('dashboard');
    }

    public function delete(Request $request, $id)
    {
        $data = Dimensi::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('dashboard');
    }
}
