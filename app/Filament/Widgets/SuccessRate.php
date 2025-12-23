<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class SuccessRate extends ChartWidget
{
    protected ?string $heading = 'Success Rate';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
    
}
