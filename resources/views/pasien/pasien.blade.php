@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Data Pasien Rumah Sakit</p>
                </blockquote>

                <blockquote class="blockquote">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <a class="btn btn-primary" href="/pasien/tambah" role="button">Pasien [+]</a>
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col-md-8">
                            <form class="form-inline float-right" method="get" action="/pasien/search">
                                <input class="form-control" name="q" type="search" 
                                value="{{ old('cari') }}" placeholder="Cari Data Pasien" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col">
                            <a class="btn btn-info" href="/pasien" role="button">Refresh</a>
                        </div>
                    </div>
                </blockquote>
                 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Asal Kota</th>
                            <th scope="col">Riwayat Penyakit</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach($pasien as $no => $p)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$no + ($pasien->currentPage()-1)*$pasien->perPage()}}</th>
                            <td>{{ $p->no_pasien }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->kota }}</td>
                            <td>{{ $p->penyakit }}</td>
                            <td>{{ $p->jenis_kelamin }}</td>
                            <td>
                                <a class="btn btn-secondary" href="/pasien/edit/{{ $p->id }}" role="button"> Edit </a>
                                <a class="btn btn-danger" href="/pasien/delete/{{ $p->id }}" role="button"> Delete </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <br/>
                <Halaman : {{$pasien->currentPage()}} <br/><br/>
                {{$pasien->links()}}
                <br/>
                
            </div>
        </div>
    </div>
</div>
@endsection
