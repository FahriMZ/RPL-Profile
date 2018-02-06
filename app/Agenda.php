<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id', 'judul_agenda', 'tanggal_agenda', 'isi_agenda',
    ];
}
