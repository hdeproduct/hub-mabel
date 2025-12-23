<?php

namespace App\Filament\Resources\DataVisits\Pages;

use App\Filament\Resources\DataVisits\DataVisitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDataVisits extends ListRecords
{
    protected static string $resource = DataVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
