<?php

namespace App\Filament\Resources\PlanVisits\Tables;

use App\Models\PlanVisit;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Database\Query\Builder;
use Filament\Tables\Columns\TextColumn;
use Pest\Mutate\Mutators\Sets\NumberSet;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\Summarizers\Count;
use Filament\Tables\Filters\QueryBuilder\Constraints\NumberConstraint;

class PlanVisitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visit_date')
                    ->label('Tanggal Kunjungan')
                    ->date(),

                TextColumn::make('total')
                    ->label('Total Kunjungan Hari Ini'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
