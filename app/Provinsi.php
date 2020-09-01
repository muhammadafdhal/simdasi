<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    protected $table = 'provinsi'; 
    protected $primaryKey = 'id_provinsi'; 

    protected $fillable = ['kode_provinsi', 'provinsi', 'provinsi']; 
    public $timestamps = false;

    
}
