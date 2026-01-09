<?php

namespace App\Filament\Resources\Instansis\Schemas;

use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class InstansiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ExcelImportAction::make()
                    ->label("Klik Disini untuk Download & Import ")
                    ->color("primary")
                    ->sampleExcel(
                        sampleData: [
                            ['city', 'klpd', 'institusi_kerja', 'satuan_kerja', 'pic_name', 'pic_phone', 'pic_position', 'pic_role', 'status_ring'],
                            ['Kota A', 'Kementerian', 'Institusi A', 'Satuan A', 'PIC A', '081234567890', 'Jabatan A', 'Kepala', 'Ring 1'],
                            ['Kabupaten B', 'Lembaga', 'Institusi B', 'Satuan B', 'PIC B', '089876543210', 'Jabatan B', 'Staff', 'Ring 2'],
                        ],
                        fileName: 'template_insert_data_instansi.xlsx',
                    ),
                // Define form components here
                Select::make('city')
                ->relationship('daftar_daerah', 'kabupaten_kota')
                ->label('Kota/Kabupaten')
                ->placeholder('Masukan Kota/Kabupaten')
                ->required(),
                Select::make('klpd')
                ->label('KLPD')
                ->placeholder('Masukan KLPD')
                ->options([
                    'Kementerian' => 'Kementerian',
                    'Lembaga' => 'Lembaga',
                    'Provinsi' => 'Provinsi',
                    'Kota' => 'Kota',
                    'Kabupaten' => 'Kabupaten',
                    'BUMN' => 'BUMN',
                    'BUMD' => 'BUMD',
                    'PTNBH' => 'PTNBH',
                    'Swasta' => 'Swasta',
                    'B2B' => 'B2B',
                    'Kesehatan' => 'Kesehatan',
                    'Lainnya' => 'Lainnya',
                ])
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
                ->label('Nama PIC'),
                TextInput::make('pic_phone')
                ->placeholder('Masukan No. Telepon PIC')
                ->numeric()
                ->stripCharacters(['-', ' ', '(', ')'])
                ->label('No. Telepon PIC:')
                ->required(),
                TextInput::make('pic_position')
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
                ->required()
            ]);
    }
}
