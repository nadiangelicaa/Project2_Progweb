@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Form Tambah Data Ruangan</p>
                </blockquote>

                <blockquote class="blockquote">
                    <p class="mt-3"></p>
                </blockquote>

                <form method="post" action="/ruangan/simpan">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Ruang</label>
                        <input type="number" name="no_ruang" class="form-control" id="no_ruang" placeholder="Masukkan Nomor Ruang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Ruang</label>
                        <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" placeholder="Masukkan Nama Ruang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lantai</label>
                        <select class="custom-select" name="lantai" id="lantai">
                            <option selected value="0">.:Pilih Lantai:.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option> </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
