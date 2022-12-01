<?php

namespace App\Http\Controllers;

use App\Models\Bpo;
use App\Models\Member;
use Illuminate\Http\Request;

class BpoadminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    // bpo
    public function index_bpo()
    {
        $data = Bpo::latest()->paginate(1);;
        return view('pages.bpo.index', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('data'));
    }

    public function create_bpo()
    {

        $member = Member::all();
        return view('pages.bpo.create', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('member'));
    }

    public function store_bpo(Request $request)
    {
        $data = Bpo::create($request->all());
        $data->save();
        // redirect to index
        return redirect()->route('bpoAdmin.index.bpo')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update_bpo(Request $request, $id)
    {
        $data = Bpo::find($id);
        $data->update($request->all());
        $data->save();

        // redirect to index
        return redirect()->route('bpoAdmin.index.bpo')->with(['success' => 'Data Berhasil diUpdate!']);
    }

    public function edit_bpo($id)
    {
        $member = Member::all();
        $data = Bpo::find($id);
        return view('pages.bpo.update', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('data', 'member'));
    }
}