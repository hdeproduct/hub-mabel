<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanVisit extends Model
{
    protected $fillable = [
        'user_id',
        'visit_date',
        'satuan_kerja',
        'city',
        'klpd',
        'institusi_kerja',
        'status_ring',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class);
    }
}
