<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Front\App\Models\Product;

class ProductCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Product', Product::count())->description('Total of number Menu Product')->descriptionIcon('heroicon-o-archive-box')->color('success')->chart([5, 8, 1, 2, 5, 6]),
            Stat::make('Total User', User::count())->description('Total of number Menu User')->descriptionIcon('heroicon-o-archive-box')->color('danger')->chart([8, 5, 3, 4, 8, 1]),
            Stat::make('Total View', Product::sum('view'))->description('Total of number Menu View')->descriptionIcon('heroicon-o-archive-box')->color('info')->chart([5, 8, 1, 2, 8, 9])

        ];
    }
}
