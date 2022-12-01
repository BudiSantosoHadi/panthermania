<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

$provinces = Province::all();
$regencies = Regency::all();
$districts = District::all();
$villages = Village::all();

// data provinsi

use App\Models\Bpo;
use App\Models\Korwil;
use App\Models\Agendak;
use App\Models\Chapter;
use App\Models\Dataorder;
use App\Models\Member;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function grafik_perkembangan()
    {
        return view('pages.admin.grafik.grafikperkembangan', []);
    }


    // bpo
    public function index_bpo_admin()
    {
        $data = Bpo::latest()->paginate(1);;
        return view('pages.admin.bpo.index', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('data'));
    }

    public function create_bpo_admin()
    {

        $member = Member::all();
        return view('pages.admin.bpo.create', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('member'));
    }

    public function store_bpo_admin(Request $request)
    {
        $data = Bpo::create($request->all());
        $data->save();
        // redirect to index
        return redirect()->route('Admin.index.bpo')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function update_bpo_admin(Request $request, $id)
    {
        $data = Bpo::find($id);
        $data->update($request->all());
        $data->save();

        // redirect to index
        return redirect()->route('Admin.index.bpo')->with(['success' => 'Data Berhasil diUpdate!']);
    }

    public function edit_bpo_admin($id)
    {
        $member = Member::all();
        $data = Bpo::find($id);
        return view('pages.admin.bpo.update', [
            'title' => "Bpo",
            'active' => "bpo.active"
        ], compact('data', 'member'));
    }

    public function remove_bpo_admin($id)
    {
        $member = Bpo::find($id);
        $member->delete();

        return redirect()->route('Admin.index.bpo')->with(['success' => 'Data Berhasil dihapus!']);
    }


    // chapter

    public function index_chapter_admin()
    {

        $data = Chapter::latest()->paginate(6);
        return view(
            'pages.admin.chapter.index',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ],
            compact('data')
        );
    }

    public function create_chapter_admin()
    {
        $provinsi = Province::all();
        $data  = Chapter::all();
        return view(

            'pages.admin.chapter.create',
            [
                'title' => "chapter",
                'active' => "chapter.active",
                'provinsi' => $provinsi,
            ],
            compact('data')
        );
    }
    public function store_chapter_admin(Request $request)
    {
        $data = new Chapter;
        $data->nama_chapter = $request->input('nama_chapter');
        $data->nama_provinsi = $request->input('nama_provinsi');
        if ($request->hasFile('logo_image')) {
            $file = $request->file('logo_image');
            $extention = $file->getClientOriginalName();
            $filename = time() . '.' . $extention;
            $file->move('data/uploads/photoChapter/', $filename);
            $data->logo_image = $filename;
        }
        // redirect to index
        $data->save();
        return redirect()->route('Admin.index.chapter')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show_chapter_admin($id)
    {
        $data = Chapter::find($id);
        return view(
            'pages.admin.chapter.show',
            [
                'title' => "chapter",
                'active' => "chapter.active"
            ],
            compact('data')
        );
    }

    public function edit_chapter_admin($id)
    {
        $provinsi = Province::all();
        $data = Chapter::find($id);
        return view(
            'pages.admin.chapter.edit',
            [
                'title' => "chapter",
                'active' => "chapter.active",
                'provinsi' => $provinsi
            ],
            compact('data')
        );
    }

    public function update_chapter_admin(Request $request, $id)
    {
        $data = Chapter::find($id);
        $data->update($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoChapter/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('Admin.index.chapter')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy_chapter_admin($id)
    {
        $data = Chapter::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('Admin.index.chapter')->with(['success' => 'Data Berhasil dihapus!']);
    }

    // korwil

    public function index_korwil_admin()
    {
        $data = Korwil::latest()->paginate(6);

        return view('pages.admin.korwil.index', [
            'title' => "korwil",
            'active' => "korwil.active"
        ], compact('data'));
    }

    public function create_korwil_admin()
    {
        $provinsi = Province::all();
        $kabupaten = Regency::all();
        $chapter = Chapter::all();

        return view(
            'pages.admin.korwil.create',
            [
                'title' => "korwil",
                'active' => "korwil.active",
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi,
            ],
            compact('chapter')
        );
    }

    public function store_korwil_admin(Request $request)
    {
        $data = new Korwil;
        $data->nama_chapter = $request->input('nama_chapter');
        $data->nama_korwil = $request->input('nama_korwil');
        $data->nama_provinsi = $request->input('nama_provinsi');
        $data->nama_kabupaten = $request->input('nama_kabupaten');
        if ($request->hasFile('logo_image')) {
            $file = $request->file('logo_image');
            $extention = $file->getClientOriginalName();
            $filename = time() . '.' . $extention;
            $file->move('data/uploads/photoKorwil/', $filename);
            $data->logo_image = $filename;
        }
        // redirect to index
        $data->save();
        return redirect()->route('Admin.index.korwil')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show_korwil_admin($id)
    {
        $data = Korwil::find($id);
        return view(
            'pages.admin.korwil.show',
            [
                'title' => "korwil",
                'active' => "korwil.active"
            ],
            compact('data')
        );
    }

    public function edit_korwil_admin($id)
    {
        $provinsi = Province::all();
        $kabupaten = Regency::all();
        $data = Korwil::find($id);
        $chapter = Chapter::all();
        return view(
            'pages.admin.korwil.edit',
            [
                'title' => "korwil",
                'active' => "korwil.active",
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi,
            ],
            compact('data', 'chapter')
        );
    }

    public function update_korwil_admin(Request $request, $id)
    {
        $data = Korwil::find($id);
        $data->update($request->all());
        if ($request->hasFile('logo_image')) {
            $request->file('logo_image')->move('data/uploads/photoKorwil/', $request->file('logo_image')->getClientOriginalName());
            $data->logo_image = $request->file('logo_image')->getClientOriginalName();
            $data->save();
        }

        // redirect to index
        return redirect()->route('Admin.index.korwil')->with(['success' => 'Data Berhasil diUpdate!']);
    }


    public function destroy_korwil_admin($id)
    {
        $data = Korwil::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('Admin.index.korwil')->with(['success' => 'Data Berhasil diHapus!']);
    }


    public function index_member_admin()
    {
        $data = Member::latest()->paginate(8);
        return view(
            'pages.admin.member.index',
            [
                'title' => "member",
                'active' => "member.active"
            ],
            compact('data')
        );
    }

    // public function create_member_admin()
    // {
    //     return view(
    //         'pages.admin.member.create',
    //         [
    //             'title' => "member",
    //             'active' => "member.active"
    //         ],
    //     );
    // }


    public function edit_member_admin($id)
    {
        $data = Member::find($id);
        $korwil = Korwil::all();
        $provinsi = Province::all();
        $kabupaten = Regency::all();
        return view(
            'pages.admin.member.edit',
            [
                'title' => "member",
                'active' => "member.active",
                'kabupaten' => $kabupaten,
                'provinsi' => $provinsi
            ],
            compact('data', 'korwil')
        );
    }

    public function update_member_admin(Request $request, $id)
    {
        $data = Member::find($id);
        $data->update($request->all());
        if ($request->hasFile('photos_members')) {
            $request->file('photos_members')->move('data/uploads/datamember/photoMember/', $request->file('photos_members')->getClientOriginalName());
            $data->photos_members = $request->file('photos_members')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('photos_ktp')) {
            $request->file('photos_ktp')->move('data/uploads/datamember/photoKTP/', $request->file('photos_ktp')->getClientOriginalName());
            $data->photos_ktp = $request->file('photos_ktp')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('photos_bukti_tranfer')) {
            $request->file('photos_bukti_tranfer')->move('data/uploads/datamember/photoBuktiTrasnfer/', $request->file('photos_bukti_tranfer')->getClientOriginalName());
            $data->photos_bukti_tranfer = $request->file('photos_bukti_tranfer')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('photos_sim')) {
            $request->file('photos_sim')->move('data/uploads/datamember/photoSIM/', $request->file('photos_sim')->getClientOriginalName());
            $data->photos_sim = $request->file('photos_sim')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('photos_stnk')) {
            $request->file('photos_stnk')->move('data/uploads/datamember/photoSTNK/', $request->file('photos_stnk')->getClientOriginalName());
            $data->photos_stnk = $request->file('photos_stnk')->getClientOriginalName();
            $data->save();
        }

        // redirect to index
        return redirect()->route('Admin.index.member')->with(['success' => 'Data Berhasil diUpdate!']);
    }

    public function show_member_admin($id)
    {
        $data = Member::find($id);
        return view('pages.admin.member.show', [
            'title' => "member",
            'active' => "member.active"
        ], compact('data'));
    }

    public function destroy_member_admin($id)
    {
        $data = Member::find($id);
        $data->delete();

        return redirect()->route('Admin.index.member')->with(['success' => 'Data Berhasil diHapus!']);
    }

    // user

    public function index_user_admin()
    {
        $data = Member::latest()->paginate(9);
        return view(
            'pages.admin.user.index',
            [
                'title' => "user",
                'active' => "user.active"
            ],
            compact('data')
        );
    }
    public function edit_user_admin($id)
    {
        $data = Member::find($id);
        return view(
            'pages.admin.user.edit',
            [
                'title' => "user",
                'active' => "user.active",

            ],
            compact('data')
        );
    }
    public function update_user_admin(Request $request, $id)
    {
        $data = Member::find($id);
        $data->update($request->all());
        // redirect to index
        return redirect()->route('Admin.index.users')->with(['success' => 'Data Berhasil diUpdate!']);
    }
    public function search_member_admin(Request $request)
    {
        $datas = Member::latest()->paginate(8);
        if ($request->has('search')) {
            $data = Member::where('nama_lengkap', 'LIKE', '%' . $request->search . '%')->paginate(8);
        } else {
            $data = Member::all();
        }
        return view(
            'pages.admin.member.index',
            [
                'title' => "member",
                'data' => $data,
                'active' => "member.active"
            ],
            compact('datas')


        );
    }

    public function search_user_admin(Request $request)
    {
        $data = Member::latest()->paginate(8);
        if ($request->has('search')) {
            $data = Member::where('nama_lengkap', 'LIKE', '%' . $request->search . '%')->paginate(8);
        } else {
            $data = Member::all();
        }
        return view(
            'pages.admin.user.index',
            [
                'title' => "user",
                'data' => $data,
                'active' => "user.active"
            ],
            compact('data')


        );
    }

    // Products

    public function index_products_admin()
    {
        $dataOrder = Dataorder::count();
        $data = products::latest()->paginate(7);
        return view('pages.admin.products.index', [
            'title' => "products",
            'active' => "products.active",
            'dataOrder' => $dataOrder,
        ], compact(['data']));
    }

    public function create_products_admin()
    {
        return view('pages.admin.products.create', [
            'title' => "products",
            'active' => "products.active"
        ]);
    }

    public function show_products_admin($id)
    {
        $data = products::find($id);
        return view('pages.admin.products.show', [
            'title' => "products",
            'active' => "products.active"
        ], compact('data'));
    }

    public function edit_products_admin($id)
    {
        $data = products::find($id);
        return view('pages.admin.products.edit', [
            'title' => "products",
            'active' => "products.active"
        ], compact('data'));
    }

    public function update_products_admin(Request $request, $id)
    {
        $data = products::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar_products')) {
            $request->file('gambar_products')->move('data/uploads/photoProducts/', $request->file('gambar_products')->getClientOriginalName());
            $data->gambar_products = $request->file('gambar_products')->getClientOriginalName();
            $data->save();
        }

        // redirect to index
        return redirect()->route('Admin.index.products')->with(['success' => 'Data Berhasil diUpdate!']);
    }


    public function store_products_admin(Request $request)
    {
        $data = products::create($request->all());
        if ($request->hasFile('gambar_products')) {
            $request->file('gambar_products')->move('data/uploads/photoProducts/', $request->file('gambar_products')->getClientOriginalName());
            $data->gambar_products = $request->file('gambar_products')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('Admin.index.products')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function destroy_products_admin($id)
    {
        $data = products::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('Admin.index.products')->with(['success' => 'Data Berhasil diHapus!']);
    }

    public function search_products_admin(Request $request)
    {
        $dataOrder = Dataorder::all();
        $datas = products::latest()->paginate(8);
        if ($request->has('search')) {
            $data = products::where('nama_products', 'LIKE', '%' . $request->search . '%')->paginate(8);
        } else {
            $data = products::all();
        }
        return view(
            'pages.admin.products.index',
            [
                'title' => "products",
                'data' => $data,
                'active' => "products.active"
            ],
            compact('datas', 'dataOrder')


        );
    }

    // Agenda Kegiatan


    public function index_agendak_admin()
    {

        $data = Agendak::latest()->paginate(7);
        return view('pages.admin.agendak.index', [
            'title' => "agendak",
            'active' => "agendak.active",
        ], compact(['data']));
    }

    public function create_agendak_admin()
    {
        $chapter = Chapter::all();
        $korwil = Korwil::all();
        return view(
            'pages.admin.agendak.create',
            [
                'title' => "agendak",
                'active' => "agendak.active"
            ],
            compact('chapter', 'korwil')
        );
    }

    public function show_agendak_admin($id)
    {
        $data = Agendak::find($id);
        return view('pages.admin.agendak.show', [
            'title' => "agendak",
            'active' => "agendak.active"
        ], compact('data'));
    }

    public function edit_agendak_admin($id)
    {
        $chapter = Chapter::all();
        $korwil = Korwil::all();
        $data = Agendak::find($id);
        return view('pages.admin.agendak.edit', [
            'title' => "agendak",
            'active' => "agendak.active"
        ], compact('data', 'korwil', 'chapter'));
    }

    public function update_agendak_admin(Request $request, $id)
    {
        $data = Agendak::find($id);
        $data->update($request->all());
        if ($request->hasFile('images')) {
            $request->file('images')->move('data/uploads/photoAgendaKegiatan/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
            $data->save();
        }

        // redirect to index
        return redirect()->route('Admin.index.agendak')->with(['success' => 'Data Berhasil diUpdate!']);
    }


    public function store_agendak_admin(Request $request)
    {
        $data = Agendak::create($request->all());
        if ($request->hasFile('images')) {
            $request->file('images')->move('data/uploads/photoAgendaKegiatan/', $request->file('images')->getClientOriginalName());
            $data->images = $request->file('images')->getClientOriginalName();
            $data->save();
        }
        // redirect to index
        return redirect()->route('Admin.index.agendak')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function destroy_agendak_admin($id)
    {
        $data = Agendak::find($id);
        $data->delete();
        // redirect to index
        return redirect()->route('Admin.index.agendak')->with(['success' => 'Data Berhasil diHapus!']);
    }

    public function search_agendak_admin(Request $request)
    {
        $chapter = Chapter::all();
        $korwil = Korwil::all();
        $datas = Agendak::latest()->paginate(8);
        if ($request->has('search')) {
            $data = Agendak::where('nama_agendak', 'LIKE', '%' . $request->search . '%')->paginate(8);
        } else {
            $data = Agendak::all();
        }
        return view(
            'pages.admin.agendak.index',
            [
                'title' => "agendak",
                'data' => $data,
                'active' => "agendak.active"
            ],
            compact('datas', 'chapter', 'korwil')


        );
    }
}
