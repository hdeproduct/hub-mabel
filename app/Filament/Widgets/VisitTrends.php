<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class VisitTrends extends ChartWidget
{
    protected ?string $heading = 'Visit Trends';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
    
}
