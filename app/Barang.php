<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table='barang';
    protected $fillable = [
    'sku',
    'nama',
    'namasup',
    'tgl_datang',
    'alamat',   
    'foto',
    'nohp',    
    'created_at',
    'updated_at'
    ];
}
