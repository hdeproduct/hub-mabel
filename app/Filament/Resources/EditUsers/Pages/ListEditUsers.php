<?php

namespace App\Filament\Resources\EditUsers\Pages;

use App\Filament\Resources\EditUsers\EditUserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEditUsers extends ListRecords
{
    protected static string $resource = EditUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
