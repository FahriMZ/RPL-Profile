<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id', 'judul_berita', 'tanggal_berita', 'isi_berita',
    ];
}
