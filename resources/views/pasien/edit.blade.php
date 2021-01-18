@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Form Edit Data Pasien</p>
                </blockquote>

                <blockquote class="blockquote">
                    <p class="mt-3"></p>
                </blockquote>

                <form method="post" action="/pasien/updated/{{ $pasien->id }}">
                    @csrf
                    @method('PUT')
                    @php
                        $penyakit = array();
                        $penyakit = explode(",", $pasien->penyakit);
                    @endphp
                    <input type="hidden" class="form-control" name="id" id="id" value="{{ $pasien->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Pasien</label>
                        <input type="number" name="no_pasien" class="form-control" id="no_pasien" value="{{ $pasien->no_pasien }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Lengkap Pasien</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $pasien->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki"
                            @php if(($pasien->jenis_kelamin)=='Laki-Laki') echo 'checked' @endphp >
                            <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"
                            @php if(($pasien->jenis_kelamin)=='Perempuan') echo 'checked' @endphp >
                            <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kota</label>
                        <select class="custom-select" name="kota" id="kota">
                            <option selected value="0">.:Pilih Asal Kota:.</option>
                            <option value="Yogyakarta" @php if(($pasien->kota)=='Yogyakarta') echo 'selected' @endphp >Yogyakarta</option>
                            <option value="Sleman" @php if(($pasien->kota)=='Sleman') echo 'selected' @endphp >Sleman</option>
                            <option value="Kulon Progo" @php if(($pasien->kota)=='Kulon Progo') echo 'selected' @endphp >Kulon Progo</option>
                            <option value="Gunung Kidul" @php if(($pasien->kota)=='Gunung Kidul') echo 'selected' @endphp >Gunung Kidul</option>
                            <option value="Bantul" @php if(($pasien->kota)=='Bantul') echo 'selected' @endphp >Bantul</option> </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Riwayat Penyakit</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Strok" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Strok', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Strok
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Diabetes" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Diabetes', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Diabetes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hipertensi" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Hipertensi', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Hipertensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hipotensi" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Hipotensi', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Hipotensi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="DBD" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('DBD', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                DBD
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tipes" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Tipes', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Tipes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tumor" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Tumor', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Tumor
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kanker" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Kanker', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Kanker
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Ginjal" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Ginjal', $penyakit) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Ginjal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Trauma" id="penyakit[]" name="penyakit[]" 
                            <?php in_array('Trauma', $penyakit) ? print 'checked' : ''; ?> >
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
