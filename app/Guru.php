<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id', 'nip', 'nama_guru', 'deskripsi_guru', 'jabatan_guru',
    ];
}
