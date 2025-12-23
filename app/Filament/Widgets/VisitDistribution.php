<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class VisitDistribution extends ChartWidget
{
    protected ?string $heading = 'Visit Distribution'; 

    protected int | string | array $columnSpan = [
        'md' => 1,
        'xl' => 2,
    ];

    protected function getData(): array
    {
        return [

        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected static ?int $sort = 3;
}
