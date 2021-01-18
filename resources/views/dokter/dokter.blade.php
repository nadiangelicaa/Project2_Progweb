@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Data Dokter Rumah Sakit</p>
                </blockquote>

                <blockquote class="blockquote">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <a class="btn btn-primary" href="/dokter/tambah" role="button">Dokter [+]</a>
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col-md-8">
                            <form class="form-inline float-right" method="get" action="/dokter/search">
                                <input class="form-control" name="q" type="search" 
                                value="{{ old('cari') }}" placeholder="Cari Data Dokter" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col">
                            <a class="btn btn-info" href="/dokter" role="button">Refresh</a>
                        </div>
                    </div>
                </blockquote>
                 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Dokter</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Shift Kerja</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach($dokter as $no => $d)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$no + ($dokter->currentPage()-1)*$dokter->perPage()}}</th>
                            <td>{{ $d->no_dokter }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->shift }}</td>
                            <td>{{ $d->spesialis }}</td>
                            <td>{{ $d->jenis_kelamin }}</td>
                            <td>
                                <a class="btn btn-secondary" href="/dokter/edit/{{ $d->id }}" role="button"> Edit </a>
                                <a class="btn btn-danger" href="/dokter/delete/{{ $d->id }}" role="button"> Delete </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <br/>
                <Halaman : {{$dokter->currentPage()}} <br/><br/>
                {{$dokter->links()}}
                <br/>
                
            </div>
        </div>
    </div>
</div>
@endsection
