<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use App\Models\Torodir;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.dashboard');
    }
    public function tabungan(){
        $member = Torodir::all();
        return view('admin.tabungan',[
            'member' => $member
        ]);
    }
    public function laporan(){
        $member = Torodir::all();
        return view('admin.laporan', [
            'member' => $member
        ]);
    }
    public function nabung(Request $request){
        
        $tabungan = new Tabungan();
        $tabungan->nama = $request->input('nama');
        $tabungan->kategori = $request->input('kategori');
        $tabungan->jumlah_uang = $request->input('uang');
        $tabungan->tanggal_dan_waktu = $request->input('tanggal');
        $tabungan->nama_admin = $request->input('admin');
        $tabungan->save();

        return back();
    }
    public function laporantoro($id_torodir){
        $tabung = Tabungan::where('id_torodir', $id_torodir)->paginate(10);
        return view('admin.datalaporan', [
            'tabung' => $tabung
        ]);
    }
}
