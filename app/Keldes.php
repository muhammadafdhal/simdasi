<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keldes extends Model
{
    //
    protected $table = 'keldes'; 
    protected $primaryKey = 'id_keldes'; 

    protected $fillable = ['id_kecamatan_keldes', 'kode_keldes', 'keldes','is_delete']; 
    public $timestamps = false;
}
