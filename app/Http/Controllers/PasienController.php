<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use DB;

class PasienController extends Controller
{
    public function index(){
        $pasien = Pasien::paginate(10);
        return view('pasien.pasien', ['pasien' => $pasien]);
    }
    public function tambah(){
        return view('pasien.tambah');
    }
    public function simpan(Request $request){
        $penyakit = implode(",", $request->get('penyakit'));
        Pasien::create([
            'no_pasien' => $request->no_pasien,
            'nama' => $request->nama,
            'kota' => $request->kota,
            'penyakit' => $penyakit,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);
        return redirect("/pasien");
    }
    public function edit($id){
        $pasien = Pasien::find($id);
        return view('pasien.edit',['pasien' => $pasien]);
    }
    public function updated($id, Request $request){
        $penyakit = implode(",", $request->get('penyakit'));
        $pasien = Pasien::find($id);
        $pasien->no_pasien = $request->no_pasien;
        $pasien->nama = $request->nama;
        $pasien->kota = $request->kota;
        $pasien->penyakit = $penyakit;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->save();
        return redirect("/pasien");
    }
    public function delete($id){
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect("/pasien");
    }
    public function search(Request $request){
        $cari = $request->q;
        $pasien = DB::table('pasien')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('no_pasien','like',"%".$cari."%")
        ->orWhere('kota','like',"%".$cari."%")
        ->orWhere('penyakit','like',"%".$cari."%")
        ->orWhere('jenis_kelamin','like',"%".$cari."%")
        ->paginate();
        return view('pasien.pasien', ['pasien' => $pasien]);
    }
}
