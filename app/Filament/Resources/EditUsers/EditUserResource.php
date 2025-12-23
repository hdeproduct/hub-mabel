<?php

namespace App\Filament\Resources\EditUsers;

use App\Filament\Resources\EditUsers\Pages\CreateEditUser;
use App\Filament\Resources\EditUsers\Pages\EditEditUser;
use App\Filament\Resources\EditUsers\Pages\ListEditUsers;
use App\Filament\Resources\EditUsers\Schemas\EditUserForm;
use App\Filament\Resources\EditUsers\Tables\EditUsersTable;
use App\Models\EditUser;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EditUserResource extends Resource
{
    protected static ?string $model = EditUser::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EditUserForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EditUsersTable::configure($table);
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
            'index' => ListEditUsers::route('/'),
            'create' => CreateEditUser::route('/create'),
            'edit' => EditEditUser::route('/{record}/edit'),
        ];
    }
}
