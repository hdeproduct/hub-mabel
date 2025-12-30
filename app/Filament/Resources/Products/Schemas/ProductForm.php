<?php

namespace App\Filament\Resources\Products\Schemas;

use Dom\Text;
use App\Models\Product;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Maatwebsite\Excel\Excel;
use App\Imports\ProductImport;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Actions;
use Filament\Tables\Columns\TextInputColumn;
use EightyNine\ExcelImport\ExcelImportAction;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_produk')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255)
                    ->label("Nama Produk"),
                TextInput::make('spesifikasi')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(1000)
                    ->label("Spesifikasi"),
                TextInput::make('link_ekatalog')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(500)
                    ->label("Link e-Katalog"),
                TextInput::make('category')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255)
                    ->label("Kategori"),
                TextInput::make('merek')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255)
                    ->label("Merek"),
                ExcelImportAction::make()
                    ->use(ProductImport::class)
                    ->label("Klik Disini untuk Download & Import ")
                    ->color("primary")
                    ->sampleExcel(
                        sampleData: [
                            ['nama_produk', 'spesifikasi', 'link_ekatalog', 'category', 'merek'],
                            ['Produk A', 'Spesifikasi A', 'http://link-ektatalog-a.com', 'Kategori A', 'Merek A'],
                            ['Produk B', 'Spesifikasi B', 'http://link-ektatalog-b.com', 'Kategori B', 'Merek B'],
                        ],
                        fileName: 'sample_products_import.xlsx',
                        sampleButtonLabel: 'Download Sample Excel',
                        customiseActionUsing: fn(Action $action) => $action->color('secondary')
                            ->icon('heroicon-m-clipboard')
                            ->requiresConfirmation(),
                    ),

            ]);
    }
}
