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

    public function dailytotal()
    {
        return $this->hasOne(
            VisitDailyTotal::class,
            'visit_date',
            'visit_date'
        )->whereColumn('visit_daily_totals.user_id', 'plan_visits.user_id');
    }
}
