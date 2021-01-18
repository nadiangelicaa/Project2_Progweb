<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use DB;

class DokterController extends Controller
{
    public function index(){
        $dokter = Dokter::paginate(10);
        return view('dokter.dokter', ['dokter' => $dokter]);
    }
    public function tambah(){
        return view('dokter.tambah');
    }
    public function simpan(Request $request){
        $spesialis = implode(",", $request->get('spesialis'));
        Dokter::create([
            'no_dokter' => $request->no_dokter,
            'nama' => $request->nama,
            'shift' => $request->shift,
            'spesialis' => $spesialis,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        return redirect("/dokter");
    }
    public function edit($id){
        $dokter = Dokter::find($id);
        return view('dokter.edit',['dokter' => $dokter]);
    }
    public function updated($id, Request $request){
        $spesialis = implode(",", $request->get('spesialis'));
        $dokter = Dokter::find($id);
        $dokter->no_dokter = $request->no_dokter;
        $dokter->nama = $request->nama;
        $dokter->shift = $request->shift;
        $dokter->spesialis = $spesialis;
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->save();
        return redirect("/dokter");
    }
    public function delete($id){
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect("/dokter");
    }
    public function search(Request $request){
        $cari = $request->q;
        $dokter = DB::table('dokter')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('no_dokter','like',"%".$cari."%")
        ->orWhere('shift','like',"%".$cari."%")
        ->orWhere('spesialis','like',"%".$cari."%")
        ->orWhere('jenis_kelamin','like',"%".$cari."%")
        ->paginate();
        return view('dokter.dokter', ['dokter' => $dokter]);
    }
}
