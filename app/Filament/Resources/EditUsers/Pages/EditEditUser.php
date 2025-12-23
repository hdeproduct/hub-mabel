<?php

namespace App\Filament\Resources\EditUsers\Pages;

use App\Filament\Resources\EditUsers\EditUserResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEditUser extends EditRecord
{
    protected static string $resource = EditUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
