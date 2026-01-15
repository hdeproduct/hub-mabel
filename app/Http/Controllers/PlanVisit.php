<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanVisit extends Controller
{
    public function store(Request $request)
    {
        PlanVisit::create([
            'user_id' => Auth::id(),
            'visit_date' => $request->request('visit_date'),
            'satuan_kerja' => $request->request('satuan_kerja'),
            'city' => $request->request('city'),
            'klpd' => $request->request('klpd'),
            'institusi_kerja' => $request->request('institusi_kerja'),
            'klpd' => $request->request('klpd'),
            'status_ring' => $request->request('status_ring'),
        ]);

        PlanVisit::query()
            ->join('visit_daily_totals', function ($join) {
                $join->on('plan_visits.user_id', '=', 'visit_daily_totals.user_id')
                    ->on('plan_visits.visit_date', '=', 'visit_daily_totals.visit_date');
            })
            ->selectRaw('visit_daily_totals.total as visit_daily_total');
    }

    public function show(string $id): View
    {
        return view('visit_daily_totals', [
            'visit_date' => PlanVisit::findOrFail($id),
        ]);
    }
}
