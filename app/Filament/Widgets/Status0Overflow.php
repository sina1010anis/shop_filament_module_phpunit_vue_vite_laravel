<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Front\App\Models\Product;

class Status0Overflow extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Prodict Price',
                    'data' => [5, 9, 7, 2, 1, 5, 6, 8]
                ]
            ],
            'labels' => ['W1', 'W2', 'W3', 'WW1', 'WW2', 'WW3', 'RE1', 'RE2']
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
