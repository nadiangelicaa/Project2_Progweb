<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter'; // harus sama kyk nama table nya
    protected $fillable = ['no_dokter','nama','shift','spesialis','jenis_kelamin'];
}
