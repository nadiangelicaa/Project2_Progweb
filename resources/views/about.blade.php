@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <blockquote class="blockquote">
                        <p class="mt-3">About</p>
                    </blockquote>

                    <hr class="my-4">

                    <blockquote class="blockquote">
                        <h2 class="mt-3">SI Rumah Sakit</h2>
                    </blockquote>

                    <img src="rs.png" class="img" alt="Responsive image" style="width:200px"><br/><br/>
                        <b> Deskripsi Sistem : </b> <br/><br/>
                        <p><b>SI Rumah Sakit ini bisa merupakan sistem informasi yang menyediakan informasi seputar:</b><br>
                        1. Data Pasien;<br>
                        2. Data Dokter; dan<br>
                        3. Data Ruangan.<br><br>
                        <b>Admin SI Rumah Sakit ini dapat melakukan beberapa hal seperti:</b><br>
                        1. Melihat data-data pasien, dokter dan ruangan;<br>
                        2. Menambahkan data-data pasien, dokter dan ruangan;<br>
                        3. Mengedit data-data pasien, dokter dan ruangan; dan<br>
                        4. Menghapus data-data pasien, dokter dan ruangan.<br><br>
                        SI Rumah Sakit juga menyediakan informasi mengenai kontak dan juga deskripsi 
                        dari sistem informasi tersebut.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
