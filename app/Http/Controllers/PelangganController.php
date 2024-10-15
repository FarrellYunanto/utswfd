<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    
    public function create(){
        $pelanggans = Pelanggan::get();
        return view("pelanggan.create")->with('pelanggan', $pelanggans);
    }

    public function insert(Request $r){
        $pelanggan = new Pelanggan;
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk; 
        $pelanggan->tgl_lahir = $r->tgl_lahir; 
        $pelanggan->alamat = $r->alamat; 
        $pelanggan->notelp = 123456789;
        $pelanggan->save();

        return redirect()->route("pelanggan")->with("success","ok");
    }

    public function update(Request $r, $id){
        // Find the pelanggan by its ID and update the details
        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama = $r->nama;
        $pelanggan->tahun_masuk = $r->tahun_masuk;
        $pelanggan->tgl_lahir = $r->tgl_lahir;
        $pelanggan->alamat = $r->alamat;
        $pelanggan->notelp = $r->notelp;  // Assuming you want to update notelp as well
        $pelanggan->save();
    
        return redirect()->route('pelanggan')->with('success', 'Pelanggan updated successfully!');
    }
}


