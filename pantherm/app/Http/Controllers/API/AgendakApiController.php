<?php

namespace App\Http\Controllers\API;

use App\Models\Agendak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendakApiController extends Controller
{
    public function index()
    {
        $agenda = Agendak::all();
        return response()->json(['message' => 'success', 'dataAgendakegiatan' => $agenda]);
    }

    public function show($id)
    {
        $agenda = Agendak::find($id);
        return response()->json(['message' => 'success', 'dataAgendakegiatan' => $agenda]);
    }
}
