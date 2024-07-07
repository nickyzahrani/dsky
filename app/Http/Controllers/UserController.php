<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//admin
    public function tabeladmin()
    {
        // Mengambil data admin
        $admin = Users::where('role', 'admin')->get();
    
        // Mengirim data ke view
        return view('pages.admin.tbl_admin', compact('admin'));
    }
    
    public function edit_admin($id)
    {
        $data = Users::find($id);
        return view('pages.admin.edit_admin', compact('data'));
    }
    
    public function hapusadmin($id)
    {
        $admin = Users::find($id);
        $admin->delete();
        return redirect('/tabeladmin')->with('succes', 'Data Admin berhasil dihapus');;
    }
    
    public function update_admin(Request $request, $id)
        {
            $data = Users::find($id);
            $data->update([
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'admin',
            ]);
            return redirect('/tabeladmin')->with('succes', 'Data Admin berhasil diperbarui');;
        }
    
    public function tambahadmin()
        {
            return view('pages.admin.form_admin');
        }
    
    public function insertadmin(Request $request)
        {
            $data = $request->all();
            $admin = new Users();
            $admin->nama_lengkap = $data['nama_lengkap'];
            $admin->no_hp = $data['no_hp'];
            $admin->email = $data['email'];
            $admin->password = Hash::make($data['password']);
            $admin->role = 'admin';
            $admin->save();
            return redirect()->route('tabeladmin')->with('succes', 'Data Admin berhasil ditambahkan');;
        }
    

//manager
public function tabelmanager()
    {
        // Mengambil data manager
        $manager = Users::where('role', 'manager')->get();
    
        // Mengirim data ke view
        return view('pages.manager.tbl_manager', compact('manager'));
    }
    
    public function edit_manager($id)
    {
        $data = Users::find($id);
        return view('pages.manager.edit_manager', compact('data'));
    }
    
    public function hapusmanager($id)
    {
        $manager = Users::find($id);
        $manager->delete();
        return redirect('/tabelmanager')->with('succes', 'Data Manager berhasil dihapus');;
    }
    
    public function update_manager(Request $request, $id)
        {
            $data = Users::find($id);
            $data->update([
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'manager',
            ]);
            return redirect('/tabelmanager')->with('succes', 'Data Manager berhasil diperbarui');;
        }
    
    public function tambahmanager()
        {
            return view('pages.manager.form_manager');
        }
    
    public function insertmanager(Request $request)
        {
            $data = $request->all();
            $manager = new Users();
            $manager->nama_lengkap = $data['nama_lengkap'];
            $manager->no_hp = $data['no_hp'];
            $manager->email = $data['email'];
            $manager->password = Hash::make($data['password']);
            $manager->role = 'manager';
            $manager->save();
            return redirect()->route('tabelmanager')->with('succes', 'Data Manager berhasil ditambahkan');;
        }



//pelanggan
    public function tabelpelanggan()
    {
        // Mengambil data pelanggan
        $pelanggan = Users::where('role', 'pelanggan')->get();
    
        // Mengirim data ke view
        return view('pages.pelanggan.tbl_pelanggan', compact('pelanggan'));
    }
    
    public function edit_pelanggan($id)
    {
        $data = Users::find($id);
        return view('pages.pelanggan.edit_pelanggan', compact('data'));
    }
    
    public function update_pelanggan(Request $request, $id)
        {
            $data = Users::find($id);
            $data->update([
                'nama_lengkap' => $request->nama_lengkap,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/tabelpelanggan')->with('succes', 'Data Pelanggan berhasil diperbarui');
        }
    
    public function hapuspelanggan($id)
    {
        $pelanggan = Users::find($id);
        $pelanggan->delete();
        return redirect('/tabelpelanggan')->with('succes', 'Data Pelanggan berhasil dihapus');;
    }
}
