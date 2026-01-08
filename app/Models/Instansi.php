<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instansi extends Model
{
    use SoftDeletes;        
    protected $table = 'instansi2';
    protected $fillable = [
        'city',
        'kpld',
        'institusi_kerja',
        'satuan_kerja',
        'code_dinas',
        'pic_name',
        'pic_phone',
        'pic_position',
        'pic_role',
        'status_market',
        'status_ring',
    ];
    
    public function daftar_daerah()
    {
        return $this->belongsTo(DaftarDaerah::class, 'city', 'kabupaten_kota');
    }
}
