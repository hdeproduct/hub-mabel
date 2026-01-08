<?php

namespace App\Filament\Resources\Instansis\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class InstansiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
