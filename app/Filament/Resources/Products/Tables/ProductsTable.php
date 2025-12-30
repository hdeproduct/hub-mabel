<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_produk')
                    ->label("Nama Produk")
                    ->searchable()
                    ->sortable(),
                TextColumn::make('spesifikasi')
                    ->label("Spesifikasi")
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('link_ekatalog')
                    ->label("Link e-Katalog")
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('category')
                    ->label("Kategori")
                    ->searchable()
                    ->sortable(),
                TextColumn::make('merek')
                    ->label("Merek")
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
