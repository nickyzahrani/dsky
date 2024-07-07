<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Paket;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function formreservasi(){
        $reservasi = Reservasi::with(['users', 'meja', 'paket'])->get();
        return view('pages.reservasi.form_reservasi', compact('reservasi'));
    }
    public function tabelreservasi()
    {
        
        $meja = Meja::where('status', 'no_meja')->get();
        $ReservasiModel = Reservasi::all();
        return view('pages.reservasi.tbl_reservasi', compact('MejaModel','ReservasiModel'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_meja' => 'required|exists:meja,id',
            'id_paket' => 'required|exists:paket,id',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lama_main' => 'required',
            'harga_total' => 'required',
        ]);

        $data = $request->all();
        $meja = new Meja();
        $reservasi = new Reservasi();
        $reservasi->tanggal = $data['tanggal'];
        $reservasi->waktu = $data['waktu'];
        $reservasi->harga_total = $data['harga_total'];
        $meja->no_meja = $data['no_meja'];
        $meja->status = $data['status'];
        $meja->save();
        // Simpan data reservasi
        $reservasi = Reservasi::create($validatedData);
        $meja = Meja::find($validatedData['id_meja']);
        $meja->status = 'Booked';
        $meja->save();

        // Response atau redirect ke halaman tertentu
        return redirect()->route('reservasi.show', $reservasi->id);
    }
}