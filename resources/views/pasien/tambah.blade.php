@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Form Tambah Data Pasien</p>
                </blockquote>

                <blockquote class="blockquote">
                    <p class="mt-3"></p>
                </blockquote>

                <form method="post" action="/pasien/simpan">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Pasien</label>
                        <input type="number" name="no_pasien" class="form-control" id="no_pasien" placeholder="Masukkan Nomor Pasien">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Lengkap Pasien</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Pasien">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota</label>
                        <select class="custom-select" name="kota" id="kota">
                            <option selected value="0">.:Pilih Asal Kota:.</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Sleman">Sleman</option>
                            <option value="Kulon Progo">Kulon Progo</option>
                            <option value="Gunung Kidul">Gunung Kidul</option>
                            <option value="Bantul">Bantul</option> </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Riwayat Penyakit</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Strok" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Strok
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Diabetes" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Diabetes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hipertensi" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Hipertensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hipotensi" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Hipotensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="DBD" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                DBD
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tipes" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Tipes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tumor" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Tumor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kanker" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Kanker
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Ginjal" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Ginjal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Trauma" id="penyakit[]" name="penyakit[]">
                            <label class="form-check-label" for="defaultCheck1">
                                Trauma
                            </label>
                        </div>
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
