<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rpl extends Model
{
    protected $table = 'tentang_rpl';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
    	'id', 'visi', 'misi', 'deskripsi', 'sejarah',
    ];
}
