<?php

namespace App\Filament\Resources\EditUsers\Pages;

use App\Filament\Resources\EditUsers\EditUserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEditUser extends CreateRecord
{
    protected static string $resource = EditUserResource::class;
}
