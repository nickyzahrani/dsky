<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Foundation\Validation\ValidatesRequests; 
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
//use Session;

//login
class LoginController extends Controller
{
    public function login()
    {
        return view('pages.login.login');
    }

    public function actionlogin(Request $request)
    {
        //validasi data yang diinput
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 1) {
                return redirect('/katalog');
            }else {
                return redirect('/dashboard');
            }
        }else {
            Session::flash('error', 'Email Atau Password Salah');
        }
        return redirect('/login');
    }

    //logout
    public function actionlogout()
    {
        Auth::logout();
    return redirect('/landing');
    }

    //register
    public function register()
    {
        return view('pages.register.register');
    }
    
    //proses registrasi
    public function create(array $data)
    {
        return Users::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nama_lengkap' =>['nama_lengkap'],
            'no_hp' =>$data['no_hp'],
            'role' => 'pelanggan',
        ]);
    }

    //aksi registrasi
    public function actiondaftar(Request $request)
    {
        $request->validate([
            'email' => ['required','email','unique:users,email'],
            'password' => 'required|min:6',
            'nama_lengkap' => 'required',
            'no_hp' => 'required'
        ]);

        $data['email']          = $request->email;
        $data['password']       = Hash::make($request->password);
        $data['nama_lengkap']   = $request->nama_lengkap;
        $data['no_hp']          = $request->no_hp;
        $data['role']       = 'pelanggan';

        Users::create($data);

        $infodaftar = [
            'email' => $request->email,
            'password' => $request->password,
            'nama_lengkap' => $request->nama_lengkap,
            'no_hp' => $request->no_hp
        ];
        
        if(Auth::attempt($infodaftar)){
            return redirect('login');
        } else {
            return redirect('register')->with('loginError', 'Terjadi kesalahan saat registrasi.');
}
}

}