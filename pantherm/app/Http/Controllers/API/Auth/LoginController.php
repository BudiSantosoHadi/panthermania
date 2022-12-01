<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        if ($validasi->fails()) {
            $valIndex = $validasi->errors()->all();
            return response()->json([
                'status'  => false,
                'message' => $valIndex[0]
            ]);
        }

        $user = Member::where('email', $request->email)->first();

        if ($user) {

            if (password_verify($request->password, $user->password)) {

                return response()->json([

                    'status'  => true,
                    'message' => 'berhasil Login',
                    'data'    =>  $user,

                ]);
            }
        }

        return response()->json([
            'status'  => false,
            'message' => 'user tidak ditemukan'
        ]);
    }
}