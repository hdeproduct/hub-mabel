<?php

namespace App\Filament\Resources\Instansis;

use BackedEnum;
use App\Models\Instansi;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use GuzzleHttp\Promise\Create;
use App\Imports\InstansiImport;
use Filament\Resources\Resource;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Instansis\Pages\EditInstansi;
use App\Filament\Resources\Instansis\Pages\ListInstansis;
use App\Filament\Resources\Instansis\Pages\CreateInstansi;
use App\Filament\Resources\Instansis\Schemas\InstansiForm;
use App\Filament\Resources\Instansis\Tables\InstansisTable;

class InstansiResource extends Resource
{
    protected static ?string $model = Instansi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice2;

    public static function getNavigationLabel(): string
    {
        return 'Instansi';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
            ImportAction::make()
                ->processWith(InstansiImport::class)
                ->color('primary')
                ->options([
                    'heading_row' => 1,
                    'skip_empty_rows' => true,
                ])
                ->label('Import Instansi'),
        ];
    }

    public static function form(Schema $schema): Schema
    {
        return InstansiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstansisTable::configure($table);
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
            'index' => ListInstansis::route('/'),
            'create' => CreateInstansi::route('/create'),
            'edit' => EditInstansi::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
