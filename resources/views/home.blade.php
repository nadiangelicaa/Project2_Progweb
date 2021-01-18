@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="display-4">Welcome!</h1>
                        <p class="lead">Selamat datang Admin    di Sistem Informasi Rumah Sakit.</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="/pasien" role="button">
                            [+] Data Pasien
                        </a>
                        <a class="btn btn-primary btn-lg" href="/dokter" role="button">
                            [+] Data Dokter
                        </a>
                        <a class="btn btn-primary btn-lg" href="/ruangan" role="button">
                            [+] Data Ruangan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
