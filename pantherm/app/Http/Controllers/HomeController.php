<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Agendak;
use App\Models\products;
use App\Models\Dataorder;
use App\Models\Agendadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        return view('layouts.appmain', [
            "title" => "panhermania",
            "active" => 'home',

        ]);
    }

    public function dashboard()
    {
        $b = time();
        $hour = date("G", $b);

        if ($hour >= 5 && $hour <= 10) {
            $welcome = "Pagi";
        } elseif ($hour >= 11 && $hour <= 15) {
            $welcome = "Siang";
        } elseif ($hour >= 16 && $hour <= 17) {
            $welcome = "Sore";
        } elseif ($hour >= 18 && $hour <= 4) {
            $welcome = "Malam";
        } else {
            $welcome = "Malam";
        }

        $count_dta_products = products::count();
        $count_dta_agendak  = Agendak::count();
        $count_dta_members = Member::count();
        $count_dta_user  = Member::count();
        $count_dta_daftar_agenda = Agendadata::count();
        $count_dta_orderdata = Dataorder::count();

        return view('pages.dashboard.dashboard', [
            "title" => "dashboard",
            "active" => "dashboard",
            'welcome' => $welcome,
            "data_products" => $count_dta_products,
            "data_agendak"  => $count_dta_agendak,
            "data_member" => $count_dta_members,
            "data_user"  => $count_dta_user,
            "data_daftar_agenda" => $count_dta_daftar_agenda,
            "data_orders" => $count_dta_orderdata,
        ]);
    }

    public function grafik()
    {
        $b = time();
        $hour = date("G", $b);

        if ($hour >= 5 && $hour <= 10) {
            $welcome = "Pagi";
        } elseif ($hour >= 11 && $hour <= 15) {
            $welcome = "Siang";
        } elseif ($hour >= 16 && $hour <= 17) {
            $welcome = "Sore";
        } elseif ($hour >= 18 && $hour <= 4) {
            $welcome = "Malam";
        } else {
            $welcome = "Malam";
        }

        $count_dta_products = products::count();
        $count_dta_agendak  = Agendak::count();
        $count_dta_members = Member::count();
        $count_dta_user  = Member::count();
        $count_dta_daftar_agenda = Agendadata::count();
        $count_dta_orderdata = Dataorder::count();

        $total_order = Dataorder::select(DB::row("CAST(SUM(id) as int) as id"))
            ->GroupBy(DB::raw("Month(created_at)"))
            ->pluck('id');

        $bulan = Dataorder::select(DB::row("MONTHNAME(created_at) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(created_at)"))
            ->pluck('bulan');

        return view('pages.dashboard.dashboard', [
            "title" => "dashboard",
            "active" => "dashboard",
            'welcome' => $welcome,
            "data_products" => $count_dta_products,
            "data_agendak"  => $count_dta_agendak,
            "data_member" => $count_dta_members,
            "data_user"  => $count_dta_user,
            "data_daftar_agenda" => $count_dta_daftar_agenda,
            "data_orders" => $count_dta_orderdata,
        ], compact('total_order'));
    }


    public function profile()
    {
        return view('settings.profile', [
            "active" => "profiles"
        ]);
    }
}