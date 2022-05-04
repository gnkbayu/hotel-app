<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_tamu = Tamu::all()->count();
        return view('home')->with('jumlah_tamu' , $jumlah_tamu);
    }
}

