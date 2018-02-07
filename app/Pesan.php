<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'buku_pesan';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id', 'nama', 'email', 'pesan', 'dibuat',
    ];
}
