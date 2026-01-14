<?php

namespace App\Filament\Resources\PlanVisits;

use App\Filament\Resources\PlanVisits\Pages\CreatePlanVisit;
use App\Filament\Resources\PlanVisits\Pages\EditPlanVisit;
use App\Filament\Resources\PlanVisits\Pages\ListPlanVisits;
use App\Filament\Resources\PlanVisits\Schemas\PlanVisitForm;
use App\Filament\Resources\PlanVisits\Tables\PlanVisitsTable;
use App\Models\PlanVisit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanVisitResource extends Resource
{
    protected static ?string $model = PlanVisit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PlanVisitForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanVisitsTable::configure($table);
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
            'index' => ListPlanVisits::route('/'),
            'create' => CreatePlanVisit::route('/create'),
            'edit' => EditPlanVisit::route('/{record}/edit'),
        ];
    }
}
