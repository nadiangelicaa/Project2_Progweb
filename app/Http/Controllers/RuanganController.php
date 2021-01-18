<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use DB;


class RuanganController extends Controller
{
    public function index(){
        $ruangan = Ruangan::paginate(10);
        return view('ruangan.ruangan', ['ruangan' => $ruangan]);
    }
    public function tambah(){
        return view('ruangan.tambah');
    }
    public function simpan(Request $request){
        Ruangan::create([
            'no_ruang' => $request->no_ruang,
            'nama_ruang' => $request->nama_ruang,
            'lantai' => $request->lantai
        ]);
        return redirect("/ruangan");
    }
    public function edit($id){
        $ruangan = Ruangan::find($id);
        return view('ruangan.edit',['ruangan' => $ruangan]);
    }
    public function updated($id, Request $request){
        $ruangan = Ruangan::find($id);
        $ruangan->no_ruang = $request->no_ruang;
        $ruangan->nama_ruang = $request->nama_ruang;
        $ruangan->lantai = $request->lantai;
        $ruangan->save();
        return redirect("/ruangan");
    }
    public function delete($id){
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return redirect("/ruangan");
    }
    public function search(Request $request){
        $cari = $request->q;
        $ruangan = DB::table('ruangan')
        ->where('nama_ruang','like',"%".$cari."%")
        ->orWhere('no_ruang','like',"%".$cari."%")
        ->orWhere('lantai','like',"%".$cari."%")
        ->paginate();
        return view('ruangan.ruangan', ['ruangan' => $ruangan]);
    }
}
