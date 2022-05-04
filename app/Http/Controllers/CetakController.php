<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function cetakpdf(Request $request){
        return view('Download.cetakpdf');
    }
}
