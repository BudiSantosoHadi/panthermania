<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validasi = Validator::make(
            $request->all(),
            [
                'nama_lengkap'  => ['required', 'string', 'max:255'],
                'email'         => ['required', 'email', 'max:255', 'unique:users'],
                'password'      => ['required', 'string', 'min:6', 'confirmed'],
                'jenis_kelamin' => ['required', 'string', 'min:5'],
                'ukuran_baju'   => ['required', 'string', 'min:1'],
                'tanggal_lahir' => ['required', 'date'],
                'agama'         => ['required', 'string', 'min:3'],
                'status_menikah' => ['required', 'string', 'min:3'],
                'alamat_lengkap' => ['required', 'string', 'max:255'],
                'kelurahan'      => ['required', 'string', 'max:100'],
                'kecamatan'      => ['required', 'string', 'max:100'],
                'provinsi'       => ['required', 'string', 'max:100'],
                'kabupaten_kota' => ['required', 'string', 'max:100'],
                'no_telp'       => ['required', 'string', 'max:16'],
                'no_whattsap'   => ['required', 'string', 'min:5'],
                'kontak_darurat' => ['required', 'string', 'max:20'],
                'no_telp_kantor' => ['required', 'string', 'max:20'],
                'pekerjaan'     => ['required', 'string', 'max:100'],
                'nama_perusahaan' => ['required', 'string', 'max:225'],
                'no_ktp'        => ['required', 'string', 'max:16'],
                'no_sim'        => ['required', 'string', 'max:16'],
                'type_kendaraan' => ['required', 'string', 'max:100'],
                'tahun_kendaraan' => ['required', 'string', 'max:200'],
                'no_polisi'      => ['required', 'string', 'max:100'],
                'warna_kendaraan' => ['required', 'string', 'max:25'],
                'no_chasis'      => ['required', 'string', 'max:100'],
                'no_engine'      => ['required', 'string', 'max:100'],
                'tanggal_pajak'  => ['required', 'date'],
            ]

        );

        if ($validasi->fails()) {
            $valIndex = $validasi->erorrs()->all();
            return response()->json([
                'status'  => false,
                'message' => $valIndex[0]
            ]);
        }

        $user = Member::create([
            'nama_lengkap '   => $request->nama_lengkap,
            'email'           => $request->email,
            'password'        => Hash::make($request->password),
            'jenis_kelamin'   => $request->jenis_kelamin,
            'ukuran_baju'     => $request->ukuran_baju,
            'tempat_lahir'    => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir,
            'agama'      => $request->agama,
            'status_menikah'      => $request->status_menikah,
            'alamat_lengkap'      => $request->alamat_lengkap,
            'kelurahan'           => $request->kelurahan,
            'kecamatan'           => $request->kecamatan,
            'provinsi'            => $request->provinsi,
            'kabupaten_kota'      => $request->kabupaten_kota,
            'no_telp'             => $request->no_telp,
            'no_whatsapp'         => $request->no_whatsapp,
            'kontak_darurat'      => $request->kontak_darurat,
            'no_telp_kantor'      => $request->no_telp_kantor,
            'pekerjaan'           => $request->pekerjaan,
            'nama_perusahaan'     => $request->nama_perusahaan,
            'alamat_perusahaan'   => $request->alamat_perusahaan,
            'sekolah_universitas' => $request->sekolah_universitas,
            'no_ktp'              => $request->no_ktp,
            'no_sim'              => $request->no_sim,
            'type_kendaraan'      => $request->type_kendaraan,
            'tahun_kendaraan'     => $request->tahun_kendaraan,
            'no_polisi'           => $request->no_polisi,
            'warna_kendaraan'     => $request->warna_kendaraan,
            'no_chasis'           => $request->no_chasis,
            'no_engine'           => $request->no_engine,
            'tanggal_pajak'       => $request->tanggal_pajak,

        ]);

        return response()->json(["massage" => 'Register Succesfully!', 'data_register' => [$user]]);
    }
}