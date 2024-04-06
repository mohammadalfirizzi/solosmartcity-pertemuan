<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminArticleController extends Controller
{
    public function index()
    {
        $data = DB::table('dimensiarticle')
            ->join('dimensiauthor', 'dimensiauthor.id_author', '=', 'dimensiarticle.author_id')
            ->join('dimensicategory', 'dimensicategory.id_category', '=', 'dimensiarticle.category_id')
            ->get();
        return view('admin.article.index', ['data' => $data]);
    }

    public function add()
    {
        $author = DB::table('dimensiauthor')->get();
        $category = DB::table('dimensicategory')->get();
        return view('admin.article.add', ['author' => $author, 'category' => $category]);
    }

    public function create(Request $request)
    {
        $title = $request->title;
        $author_id = $request->author_id;
        $content = $request->content;
        $category_id = $request->category_id;
        $image_url = $request->file("image_url");

        $add = DB::table('dimensiarticle')->insert([
            'title' => $title,
            'author_id' => $author_id,
            'content' => $content,
            'category_id' => $category_id,
            'image_url' =>  $image_url->getClientOriginalName()
        ]);

        if ($add) {
            $tujuan_upload = 'data_file';
            $image_url->move($tujuan_upload, $image_url->getClientOriginalName());
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('indexArticle')
                ->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function edit($id)
    {
        $data = DB::table('dimensiarticle')
            ->where('id', $id)
            ->first();
        $author = DB::table('dimensiauthor')->get();
        $category = DB::table('dimensicategory')->get();
        return view('admin.article.edit', ['data' => $data, 'author' => $author, 'category' => $category]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $author_id = $request->author_id;
        $content = $request->content;
        $category_id = $request->category_id;
        $image_url = $request->file("image_url");

        if ($image_url == NULL) {
            $update = DB::table('dimensiarticle')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'author_id' => $author_id,
                    'content' => $content,
                    'category_id' => $category_id
                ]);
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil diupdate!');
        } else {
            $update = DB::table('dimensiarticle')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'author_id' => $author_id,
                    'content' => $content,
                    'image_url' =>  $image_url->getClientOriginalName(),
                    'category_id' => $category_id
                ]);
            return redirect()->route('indexArticle')
                ->with('success', 'Data berhasil diupdate!');
        }
    }

    public function delete($id)
    {
        $delete = DB::table('dimensiarticle')
            ->where('id', $id)
            ->delete();

        return redirect()->route('indexArticle')
            ->with('success', 'Data berhasil dihapus!');
    }
}
