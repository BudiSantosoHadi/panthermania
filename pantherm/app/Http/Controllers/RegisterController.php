<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Dotenv\Exception\ValidationException;
use Flasher\Laravel\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $req = Validator::make($request->all(), [
            'nama_lengkap'     => 'required|string|between:2,100',
            'email'            => 'required|email|max:100|unique:users',
            'password'         => 'required|confirmed|min:6 ',
            'jenis_kelamin'    => 'required',
            'ukuran_baju'      => 'required',
            'tempat_lahir'     => 'required|string|min:6',
            'tanggal_lahir'    => 'required|date',
            'agama'            => 'required|string|min:4',
            'status_menikah'   => 'required|string|min:10',
            'alamat_lengkap'   => 'required|min:10',
            'kelurahan'        => 'required|string',
            'kecamatan'        => 'required|string',
            'provinsi'         => 'required|string',
            'kabupaten_kota'   => 'required|string',
            'no_telp'          => 'required|min:12',
            'no_whatsapp'      => 'required|min:12',
            'kontak_darurat'   => 'required|min:4',
            'no_telp_kantor'   => 'min:4',
            'pekerjaan'        => 'required|string',
            'nama_perusahaan'  => 'string|min:7',
            'alamat_perusahaan' => 'string|min:10',
            'sekolah_universitas' => 'string|min:6',
            'no_ktp'              => 'required|min:9',
            'no_sim'              => 'required|min:9',
            'type_kendaraan'     => 'required|min:6',
            'tahun_kendaraan'    => 'required|date',
            'no_polisi'          => 'required|min:3',
            'warna_kendaraan'    => 'required|min:4',
            'no_chasis'          => 'required|min:4',
            'no_engine'          => 'required|min:4',
            'tanggal_pajak'      => 'required|date',
        ]);

        if ($req->fails()) {
            return response()->json($req->errors()->toJson(), 400);
        }

        $member = Member::create(array_merge(
            $req->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'User signed up',
            'members' => $member
        ], 201);
    }
}