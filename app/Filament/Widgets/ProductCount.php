<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Front\App\Models\Product;

class ProductCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Product', Product::count())->description('Total of number Menu Product')->descriptionIcon('heroicon-o-archive-box')->color('success')->chart([5, 8, 1, 2, 5, 6])

        ];
    }
}
