<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peluang extends Model
{
    protected $table = 'peluang_kerja';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
    	'id', 'nama_pekerjaan', 'nama_perusahaan', 'tanggal_dipost', 'deskripsi_pekerjaan',
    ];
}
