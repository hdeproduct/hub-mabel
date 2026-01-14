<?php

namespace App\Filament\Resources\PlanVisits\Pages;

use App\Filament\Resources\PlanVisits\PlanVisitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanVisits extends ListRecords
{
    protected static string $resource = PlanVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
