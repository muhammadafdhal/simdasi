<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    protected $table = 'kecamatan'; 
    protected $primaryKey = 'id_kecamatan'; 

    protected $fillable = ['id_kabkota_kecamatan', 'kode_kecamatan', 'kecamatan','is_delete']; 
    public $timestamps = false;

}
