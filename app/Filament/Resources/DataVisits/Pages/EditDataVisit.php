<?php

namespace App\Filament\Resources\DataVisits\Pages;

use App\Filament\Resources\DataVisits\DataVisitResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDataVisit extends EditRecord
{
    protected static string $resource = DataVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
