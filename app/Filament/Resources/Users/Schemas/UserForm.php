<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                TextInput::make('password')
                    ->password()
                    ->dehydrated(fn($state) => filled($state))
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->required()
                    ->label('Password'),
                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->preload()
                    ->searchable(),
            ]);
    }
}
