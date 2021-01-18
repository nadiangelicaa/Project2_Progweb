<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan'; // harus sama kyk nama table nya
    protected $fillable = ['no_ruang','nama_ruang','lantai'];
}
