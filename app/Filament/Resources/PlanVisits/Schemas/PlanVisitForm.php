<?php

namespace App\Filament\Resources\PlanVisits\Schemas;

use App\Models\Instansi;
use App\Models\DaftarDaerah;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PlanVisitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->columnSpan(3)
                    ->columns(3)
                    ->schema([
                        DatePicker::make('visit_date')
                            ->label('Tanggal Kunjungan')
                            ->placeholder('Pilih Tanggal Kunjungan')
                            ->required(),
                        Select::make('satuan_kerja')
                            ->label('Satuan Kerja')
                            ->options(
                                Instansi::query()
                                    ->distinct()
                                    ->pluck('satuan_kerja', 'id')
                                    ->toArray()
                            )
                            ->searchable()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                $instansi = \App\Models\Instansi::find($state);

                                if (! $instansi) {
                                    $set('city', null);
                                    $set('klpd', null);
                                    $set('institusi_kerja', null);
                                    return;
                                }

                                $set('city', $instansi?->city);
                                $set('klpd', $instansi?->klpd);
                                $set('institusi_kerja', $instansi?->institusi_kerja);
                            })
                            ->required(),
                        Hidden::make('user_id')
                            ->default(fn() => Auth::id())
                            ->dehydrated()
                            ->required(),
                        TextInput::make('city')
                            ->placeholder('Masukan Kota/Kabupaten')
                            ->required()
                            ->readOnly()
                            ->label('Kota/Kabupaten')
                            ->required(),
                        TextInput::make('klpd')
                            ->label('KLPD')
                            ->readOnly()
                            ->required(),
                        TextInput::make('institusi_kerja')
                            ->label('Institusi Kerja')
                            ->readOnly()
                            ->required(),
                        Select::make('status_ring')
                            ->options([
                                'Ring 1' => 'Ring 1',
                                'Ring 2' => 'Ring 2',
                                'Ring 3' => 'Ring 3',
                                'Ring 4' => 'Ring 4',
                            ])
                            ->label('Status Ring')
                            ->placeholder('Pilih Status Ring')
                            ->required(),
                    ]),
            ]);
    }
}
