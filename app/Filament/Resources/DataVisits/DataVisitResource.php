<?php

namespace App\Filament\Resources\DataVisits;

use App\Filament\Resources\DataVisits\Pages\CreateDataVisit;
use App\Filament\Resources\DataVisits\Pages\EditDataVisit;
use App\Filament\Resources\DataVisits\Pages\ListDataVisits;
use App\Filament\Resources\DataVisits\Schemas\DataVisitForm;
use App\Filament\Resources\DataVisits\Tables\DataVisitsTable;
use App\Models\DataVisit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DataVisitResource extends Resource
{
    protected static ?string $model = DataVisit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DataVisitForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataVisitsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataVisits::route('/'),
            'create' => CreateDataVisit::route('/create'),
            'edit' => EditDataVisit::route('/{record}/edit'),
        ];
    }
}
