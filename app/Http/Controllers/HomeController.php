<?php

namespace App\Http\Controllers;
use App\Models\Tamu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        // $jumlah_tamu = Tamu::all()->count();
        // return view('Home')->with('jumlah_tamu' , $jumlah_tamu);
        $jumlah_tamu = DB::table('tamus')->count();
        $jumlah_pesan = DB::table('pemesans')->count();
        $jumlah_message = DB::table('message')->count();
        $jumlah_users = DB::table('users')->count();
        return view('Home')->with(['jumlah_tamu' => $jumlah_tamu , 'jumlah_pesan' => $jumlah_pesan , 'jumlah_message' => $jumlah_message , 'jumlah_users' => $jumlah_users]);
        
    }
}
