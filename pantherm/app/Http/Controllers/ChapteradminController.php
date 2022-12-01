<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChapteradminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_chapter()
    {

        $data = Chapter::latest()->paginate(7);
        return view(
            'pages.chapter.index',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ],
            compact('data')
        );
    }

    public function create_chapter()
    {
        return view(
            'pages.chapter.create',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ]
        );
    }
    public function store_chapter(Request $request)
    {
        $data = Chapter::create($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoChapter/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('chapterAdmin.index.chapter')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show_chapter($id)
    {
        $data = Chapter::find($id);
        return view(
            'pages.chapter.show',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ],
            compact('data')
        );
    }

    public function edit_chapter($id)
    {
        $data = Chapter::find($id);
        return view(
            'pages.chapter.edit',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ],
            compact('data')
        );
    }

    public function update_chapter(Request $request, $id)
    {
        $data = Chapter::find($id);
        $data->update($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoChapter/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('chapterAdmin.index.chapter')->with(['success' => 'Data Berhasil diUpdate!']);
    }

    public function destroy_chapter($id)
    {
        $data = Chapter::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('chapterAdmin.index.chapter')->with(['success' => 'Data Berhasil diHapus!']);
    }
}