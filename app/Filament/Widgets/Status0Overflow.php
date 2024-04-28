<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Modules\Front\App\Models\Product;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Status0Overflow extends ChartWidget
{
    protected static ?string $heading = 'Number Of User';

    protected int | string | array $columnSpan = 'full';

    private $number_of_user;
    private $number_mothe;

    protected function getData(): array
    {
        $data = $this->getNumberOfUser();

        $mothe = $this->getMothe();

        return [
            'datasets' => [
                [
                    'label' => 'number of user',
                    'data' => $this->number_of_user
                ]
            ],
            'labels' => $this->number_mothe
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getNumberOfUser(): void
    {
        $year = Carbon::now()->year;

        $new_orders_count = [];

        for($i = 1; $i <= 12; $i++){

            $new_orders_count[] = User::whereYear('updated_at', $year)->whereMonth('updated_at', $i)->count();

        }

        $this->number_of_user = $new_orders_count;

    }

    private function getMothe(): void
    {
        $month = [];


        for ($m=1; $m<=12; $m++) {

            $month[] = date('F', mktime(0,0,0,$m, 1, date('Y')));

        }

        $this->number_mothe = $month;


    }
}
