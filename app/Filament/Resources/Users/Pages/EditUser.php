<?php

namespace App\Filament\Resources\Users\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Users\UserResource;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('email')
                        ->label('Email')
                        ->required()
                        ->email(),
                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->dehydrated(fn($state) => filled($state))
                        ->dehydrateStateUsing(fn($state) => Hash::make($state))
                        ->nullable(),
                    Select::make('roles')
                        ->label('Roles')
                        ->relationship('roles', 'name')
                        ->preload()
                        ->searchable(),
                ]),
        ];
    }
}
