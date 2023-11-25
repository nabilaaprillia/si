<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $user = Auth::user();

            if ($user->usertype == 'admin') {
                return view('dashboard.index');
            } else {
                return view('AboutUs');
                // Handle other user types or return a default view
            }
        }
    }
}
