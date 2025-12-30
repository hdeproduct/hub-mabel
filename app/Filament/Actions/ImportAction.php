<?php


namespace App\Filament\Actions;

use Filament\Actions\ImportAction;

ImportAction::make()
    ->processWith(\App\Imports\ProductImport::class)
    ->color('primary');
