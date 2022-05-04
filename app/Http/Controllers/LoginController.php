<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CekLevel;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.login-app');
    }
    // public function indexlogin(){
    //     $role=Auth::user()->level;
    //     if($role=='admin'){
    //         return view('home');
    //     }
    //     if($role=='karyawan'){
    //         return view('megahotel');
    //     }else{
    //         return view('welcome');
    //     }
    // }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/');
       
    }

    public function logout(){
       Auth::logout();
       return redirect('/');
    }
    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        User::create([
            'name' => $request->name,
            'level' => 'karyawan',
            'email' => $request->email,
            'foto_profil' => $request->foto_profil,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return view('Login.login-app');
    }
}
