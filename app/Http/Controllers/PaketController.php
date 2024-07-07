<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function formpaket(){
        return view("pages.paket.form_paket");
    }
    public function tabelpaket()
    {
        $PaketModel = Paket::all();
        return view('pages.paket.tbl_paket',compact(['PaketModel']));
    }
    public function tambahpaket()
    {
        return view('pages.paket.form_paket');
    }

    public function insertpaket(Request $request)
    {
        $data = $request->all();
        $PaketModel = new Paket();
        $PaketModel->waktu = $data['waktu'];
        $PaketModel->kategori = $data['kategori'];
        $PaketModel->durasi = $data['durasi'];
        $PaketModel->harga = $data['harga'];
        $PaketModel->detail_paket = $data['detail_paket'];
        $PaketModel->save();
        return redirect()->route('tabelpaket')
                        ->with('succes', 'Data Paket berhasil ditambahkan');;;
    }
    public function hapuspaket($id)
    {
        $MejaModel = Paket::find($id);
        $MejaModel->delete();
        return redirect('/tabelpaket')->with('succes', 'Data Paket berhasil dihapus');;;
    }
    public function edit_paket($id)
    {
        $data = Paket::find($id);
        return view('pages.paket.edit_paket', compact('data'));
    }
    public function update_paket(Request $request, $id)
    {
        $data = Paket::find($id);
        $data->update([
            'waktu' => $request->waktu,
            'kategori' => $request->kategori,
            'durasi' => $request->durasi,
            'harga' => $request->harga,
            'detail_paket' => $request->detail_paket,
        ]);
        return redirect('/tabelpaket')->with('succes', 'Data Paket berhasil diperbarui');;;
    }
}
