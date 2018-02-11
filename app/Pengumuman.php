<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id', 'judul_pengumuman', 'tanggal_pengumuman', 'jam_pengumuman', 'isi_pengumuman', 
    ];
}
