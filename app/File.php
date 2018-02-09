<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'file_download';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','link_file', 'deskripsi_file',
    ];
}
