<?php

namespace App\Observers;

use App\Models\PlanVisit;
use App\Models\VisitDailyTotal;
use Illuminate\Support\Facades\DB;

class PlanVisitObserver
{
    /**
     * Handle the PlanVisit "created" event.
     */
    public function created(PlanVisit $planVisit): void
    {
        VisitDailyTotal::updateOrCreate(
            [
                'user_id' => $planVisit->user_id,
                'visit_date' => $planVisit->visit_date,
            ],
            [
                'total' => DB::raw('total + 1'),
            ]
        );
    }

    /**
     * Handle the PlanVisit "updated" event.
     */
    public function updated(PlanVisit $planVisit): void
    {
        //
    }

    /**
     * Handle the PlanVisit "deleted" event.
     */
    public function deleted(PlanVisit $planVisit): void
    {
        //
    }

    /**
     * Handle the PlanVisit "restored" event.
     */
    public function restored(PlanVisit $planVisit): void
    {
        //
    }

    /**
     * Handle the PlanVisit "force deleted" event.
     */
    public function forceDeleted(PlanVisit $planVisit): void
    {
        //
    }
}
