@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Form Edit Data Dokter</p>
                </blockquote>

                <blockquote class="blockquote">
                    <p class="mt-3"></p>
                </blockquote>

                <form method="post" action="/dokter/updated/{{ $dokter->id }}">
                    @csrf
                    @method('PUT')
                    @php
                        $spesialis = array();
                        $spesialis = explode(",", $dokter->spesialis);
                    @endphp
                    <input type="hidden" class="form-control" name="id" id="id" value="{{ $dokter->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Dokter</label>
                        <input type="number" name="no_dokter" class="form-control" id="no_dokter" value="{{ $dokter->no_dokter }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Lengkap Dokter</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $dokter->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki"
                            @php if(($dokter->jenis_kelamin)=='Laki-Laki') echo 'checked' @endphp >
                            <label class="form-check-label" for="exampleRadios1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"
                            @php if(($dokter->jenis_kelamin)=='Perempuan') echo 'checked' @endphp >
                            <label class="form-check-label" for="exampleRadios2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Shift Kerja</label>
                        <select class="custom-select" name="shift" id="shift">
                            <option selected value="0">.:Pilih Shift Kerja:.</option>
                            <option value="Pagi(00-08)" @php if(($dokter->shift)=='Pagi(00-08)') echo 'selected' @endphp >Pagi(00-08)</option>
                            <option value="Siang(08-16)" @php if(($dokter->shift)=='Siang(08-16)') echo 'selected' @endphp >Siang(08-16)</option>
                            <option value="Malam(16-24)" @php if(($dokter->shift)=='Malam(16-24)') echo 'selected' @endphp >Malam(16-24)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Spesialis</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Umum" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Umum', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Umum
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Anak" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Anak', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Anak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kulit & Kelamin" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Kulit & Kelamin', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Kulit & Kelamin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Saraf" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Saraf', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Saraf
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Mata" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Mata', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Mata
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Tulang" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Tulang', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Tulang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Psikiater" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Psikiater', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Psikiater
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Gigi & Mulut" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Gigi & Mulut', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Gigi & Mulut
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="THT" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('THT', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                THT
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Ginjal" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Ginjal', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Ginjal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Jantung" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Jantung', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Jantung
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Paru" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Paru', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Paru
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Endokrinologi" id="spesialis[]" name="spesialis[]" 
                            <?php in_array('Endokrinologi', $spesialis) ? print 'checked' : ''; ?> >
                            <label class="form-check-label" for="defaultCheck1">
                                Endokrinologi
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
