<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KolomGuru extends Model
{
    protected $table = 'kolom_guru';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'id', 'id_guru', 'tipe_karya', 'judul_karya', 'karya', 'tanggal_dipost',
    ];

    public function guru() {
    	return $this->belongsTo('App\Guru', 'id_guru');
    }
}
