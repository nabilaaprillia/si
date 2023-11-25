<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tes extends Controller
{
    public function index()
    { {
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
