<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function formmeja(){
        return view("pages.meja.form_meja");
    }
    public function tabelmeja()
    {
        $MejaModel = Meja::all();
        return view('pages.meja.tbl_meja',compact(['MejaModel']));
    }

    public function tambahdata()
    {
        return view('pages.meja.form_meja');
    }

    public function insertdata(Request $request)
    {
        $data = $request->all();
        $MejaModel = new Meja();
        $MejaModel->no_meja = $data['no_meja'];
        $MejaModel->status = $data['status'];
        $MejaModel->save();
        return redirect()->route('tabelmeja')
                        ->with('succes', 'Data Meja berhasil ditambahkan');;

    }

    public function hapusmeja($id)
    {
        $MejaModel = Meja::find($id);
        $MejaModel->delete();
        return redirect('/tabelmeja')->with('succes', 'Data Meja berhasil dihapus');;
    }
    public function store(Request $request)
    {
        Meja::create($request->except(['_token','submit']));
        return redirect('/form');
    }
    public function edit_meja($id)
    {
        $data = Meja::find($id);
        return view('pages.meja.edit_meja', compact('data'));
    }

    public function update_meja(Request $request, $id)
    {
        $data = Meja::find($id);
        $data->update([
            'no_meja' => $request->no_meja,
            'status' => $request->status,
        ]);
        return redirect('/tabelmeja')->with('succes', 'Data Meja berhasil diperbarui');;
    }
}
