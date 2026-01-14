<?php

namespace App\Filament\Resources\Instansis\Schemas;

use App\Models\KLPD;
use App\Models\DaftarDaerah;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use EightyNine\ExcelImport\ExcelImportAction;

class InstansiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->columnSpan(3)
                    ->columns(3)
                    ->schema([
                        // Define form components here
                        Select::make('city')
                            ->options(\App\Models\DaftarDaerah::query()
                                ->pluck('kabupaten_kota', 'kabupaten_kota')->toArray())
                            ->searchable()
                            ->label('Kota/Kabupaten')
                            ->placeholder('Masukan Kota/Kabupaten')
                            ->required(),
                        Select::make('klpd')
                            ->options(\App\Models\KLPD::query()
                                ->pluck('name', 'name')->toArray())
                            ->label('KLPD')
                            ->placeholder('Masukan KLPD')
                            ->searchable()
                            ->required(),
                        TextInput::make('institusi_kerja')
                            ->label('Institusi Kerja')
                            ->placeholder('Masukan Institusi Kerja')
                            ->required(),
                        TextInput::make('satuan_kerja')
                            ->label('Satuan Kerja')
                            ->placeholder('Masukan Satuan Kerja')
                            ->required(),
                        TextInput::make('pic_name')
                            ->required()
                            ->placeholder('Masukan Nama PIC')
                            ->label('Nama PIC'),
                        TextInput::make('pic_phone')
                            ->placeholder('Masukan No. Telepon PIC')
                            ->numeric()
                            ->stripCharacters(['-', ' ', '(', ')'])
                            ->label('No. Telepon PIC:')
                            ->required(),
                        TextInput::make('pic_position')
                            ->required()
                            ->placeholder('Masukan Jabatan PIC')
                            ->label('Jabatan PIC'),
                        Select::make('pic_role')
                            ->label('Role PIC')
                            ->options([
                                'Kepala' => 'Kepala',
                                'Staff' => 'Staff',
                            ])
                            ->required(),
                        Select::make('status_ring')
                            ->label('Status Ring')
                            ->options([
                                'Ring 1' => 'RING 1',
                                'Ring 2' => 'RING 2',
                                'Ring 3' => 'RING 3',
                                'Ring 4' => 'RING 4',
                            ])
                            ->required(),
                        ExcelImportAction::make()
                            ->label("Klik Disini untuk Download & Import ")
                            ->color("primary")
                            ->sampleExcel(
                                sampleData: [
                                    ['city', 'klpd', 'institusi_kerja', 'satuan_kerja', 'code_dinas', 'pic_name', 'pic_phone', 'pic_position', 'pic_role', 'status_market', 'status_ring'],
                                    ['Kota A', 'Kementerian', 'Institusi A', 'Satuan A', '001', 'PIC A', '081234567890', 'Jabatan A', 'Kepala', 'Market A', 'Ring 1'],
                                    ['Kabupaten B', 'Lembaga', 'Institusi B', 'Satuan B', '002', 'PIC B', '089876543210', 'Jabatan B', 'Staff', 'Market B', 'Ring 2'],
                                ],
                                fileName: 'template_insert_data_instansi.xlsx',
                            ),
                    ])
            ]);
    }
}
