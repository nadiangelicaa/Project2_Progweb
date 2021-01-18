<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien'; // harus sama kyk nama table nya
    protected $fillable = ['no_pasien','nama','kota','penyakit','jenis_kelamin'];
}
