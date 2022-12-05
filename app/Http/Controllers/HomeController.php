<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Analytics;
use Spatie\Analytics\Period;
use App\Models\Kamar;

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
        $data = Kamar::count();
        $count = Kamar::select('nama_kamar')->count();
        $nama = Kamar::all();
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        return view('Admin.dasbord', compact('data','count'), ['analyticsData' => $analyticsData])->with('nama', $nama);
    }
}
