<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        {
            $jumlahAntrianHariIni = Antrian::whereDate('tanggal_antrian', now()->toDateString())->count();
            $jumlahAntrianMingguIni = Antrian::whereBetween('tanggal_antrian', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $jumlahAntrianBulanIni = Antrian::whereMonth('tanggal_antrian', Carbon::now()->month)->count();
            $totalAntrian = Antrian::all()->count();
            $user = Auth::user();

            if ($user->usertype == 'admin') {
                return view('dashboard.index',[

                    'totalAntrian' => $totalAntrian
                ]);
            } else {
                return view('home');
                // Handle other user types or return a default view
            }
        }
    }
}