<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    //
    protected $table = 'kabkota'; 
    protected $primaryKey = 'id_kabkota'; 

    protected $fillable = ['kode_kabkota', 'kabkota', 'is_delete']; 
    public $timestamps = false;
}
