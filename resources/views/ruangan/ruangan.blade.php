@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <blockquote class="blockquote">
                    <p class="mt-3">Data Ruangan di Rumah Sakit</p>
                </blockquote>

                <blockquote class="blockquote">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <a class="btn btn-primary" href="/ruangan/tambah" role="button">Ruangan [+]</a>
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col-md-8">
                            <form class="form-inline float-right" method="get" action="/ruangan/search">
                                <input class="form-control" name="q" type="search" 
                                value="{{ old('cari') }}" placeholder="Cari Data Ruangan" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col">
                            <a class="btn btn-info" href="/ruangan" role="button">Refresh</a>
                        </div>
                    </div>
                </blockquote>
                 
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Ruang</th>
                            <th scope="col">Nama Ruang</th>
                            <th scope="col">Lantai</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach($ruangan as $no => $r)
                    <tbody>
                        <tr>
                            <th scope="row">{{++$no + ($ruangan->currentPage()-1)*$ruangan->perPage()}}</th>
                            <td>{{ $r->no_ruang }}</td>
                            <td>{{ $r->nama_ruang }}</td>
                            <td>{{ $r->lantai }}</td>
                            <td>
                                <a class="btn btn-secondary" href="/ruangan/edit/{{ $r->id }}" role="button"> Edit </a>
                                <a class="btn btn-danger" href="/ruangan/delete/{{ $r->id }}" role="button"> Delete </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <br/>
                <Halaman : {{$ruangan->currentPage()}} <br/><br/>
                {{$ruangan->links()}}
                <br/>
                
            </div>
        </div>
    </div>
</div>
@endsection
