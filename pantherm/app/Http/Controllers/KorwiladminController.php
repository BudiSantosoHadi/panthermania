<?php

namespace App\Http\Controllers;

use App\Models\Korwil;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KorwiladminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    // korwil

    public function index_korwil_korwilAdmin()
    {
        $data = Korwil::latest()->paginate(1);

        return view(
            'pages.korwil.index',
            [
                'title' => "korwil",
                'active' => "korwil.active"
            ],
            compact('data')
        );
    }

    public function create_korwil_korwilAdmin()
    {
        $chapter = Chapter::all();
        return view(
            'pages.korwil.create',
            [
                'title' => "korwil",
                'active' => "korwil.active"
            ],
            compact('chapter')
        );
    }

    public function store_korwil_korwilAdmin(Request $request)
    {
        $data = korwil::create($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoKorwil/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('korwilAdmin.index.korwil')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show_korwil_korwilAdmin($id)
    {
        $data = Korwil::find($id);
        return view(
            'pages.korwil.show',
            [
                'title' => "korwil",
                'active' => "korwil.active"
            ],
            compact('data')
        );
    }

    public function edit_korwil_korwilAdmin($id)
    {
        $data = Korwil::find($id);
        $chapter = Chapter::all();
        return view(
            'pages.korwil.edit',
            [
                'title' => "korwil",
                'active' => "korwil.active"
            ],
            compact('data', 'chapter')
        );
    }

    public function update_korwil_korwilAdmin(Request $request, $id)
    {
        $data = Korwil::find($id);
        $data->update($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoKorwil/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }

        // redirect to index
        return redirect()->route('korwilAdmin.index.korwil')->with(['success' => 'Data Berhasil diUpdate!']);
    }


    public function destroy_korwil_korwilAdmin($id)
    {
        $data = Korwil::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('korwilAdmin.index.korwil')->with(['success' => 'Data Berhasil diHapus!']);
    }
}