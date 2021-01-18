@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Form Edit Data Ruangan</p>
                </blockquote>

                <blockquote class="blockquote">
                    <p class="mt-3"></p>
                </blockquote>

                <form method="post" action="/ruangan/updated/{{ $ruangan->id }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" class="form-control" name="id" id="id" value="{{ $ruangan->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nomor Ruang</label>
                        <input type="number" name="no_ruang" class="form-control" id="no_ruang" value="{{ $ruangan->no_ruang }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Ruang</label>
                        <input type="text" name="nama_ruang" class="form-control" id="nama_ruang" value="{{ $ruangan->nama_ruang }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lantai</label>
                        <select class="custom-select" name="lantai" id="lantai">
                            <option selected value="0">.:Pilih Lantai:.</option>
                            <option value="1" @php if(($ruangan->lantai)=='1') echo 'selected' @endphp >1</option>
                            <option value="2" @php if(($ruangan->lantai)=='2') echo 'selected' @endphp >2</option>
                            <option value="3" @php if(($ruangan->lantai)=='3') echo 'selected' @endphp >3</option>
                            <option value="4" @php if(($ruangan->lantai)=='4') echo 'selected' @endphp >4</option>
                            <option value="5" @php if(($ruangan->lantai)=='5') echo 'selected' @endphp >5</option> </select>
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
