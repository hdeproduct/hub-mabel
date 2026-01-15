<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitDailyTotal extends Model
{
    protected $fillable = [
        'user_id',
        'visit_date',
        'total',
    ];
}
