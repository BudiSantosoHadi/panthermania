<?php

namespace App\Http\Controllers\API;

use App\Models\DataProfiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataProfileApiController extends Controller
{
        public function index()
        {
            $dataProfiles = DataProfiles::find( 'nama_lengkap', 'email', 'alamat_lengkap', 'no_telp', 'no_polisi');

            return response()->json(['message' => 'success', 'dataProfile' => $dataProfiles]);
        }

        public function show($id)
        {
            $dataProfiles = DataProfiles::find($id, 'nama_lengkap', 'email', 'alamat_lengkap', 'no_telp', 'no_polisi');

            return response()->json(['message' => 'success', 'dataProfile' => $dataProfiles]);
        }
}