<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeluangKerja extends Model
{
    protected $table = 'peluang_kerja';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
    	'id', 'nama', 'deskripsi',
    ];
}
