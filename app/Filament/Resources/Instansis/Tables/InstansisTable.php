<?php

namespace App\Filament\Resources\Instansis\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;

class InstansisTable
{
    public function table(Table $table): Table
    {
        return $table
            ->paginated([25, 50, 100]);
    }
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('daftar_daerah.kabupaten_kota')
                    ->label('Kota/Kabupaten')->searchable(),
                TextColumn::make('klpd')
                    ->label('KLPD')->searchable(),
                TextColumn::make('institusi_kerja')
                    ->label('Institusi Kerja')->searchable(),
                TextColumn::make('satuan_kerja')
                    ->label('Satuan Kerja')->searchable(),
                TextColumn::make('code_dinas')
                    ->label('Kode Dinas')->searchable(),
                TextColumn::make('pic_name')
                    ->label('Nama PIC')->searchable(),
                TextColumn::make('pic_phone')
                    ->label('No HP PIC')->searchable(),
                TextColumn::make('pic_position')
                    ->label('Jabatan PIC')->searchable(),
                TextColumn::make('pic_role')
                    ->label('Role PIC')->searchable(),
                TextColumn::make('status_ring')
                    ->label('Status Ring')->searchable(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
