<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Active', DB::table('contact_us_forms')
                ->where('status','=',1)
                ->whereNull('deleted_at')
                ->count())
                ->description('Active Client Followup')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Passive', DB::table('contact_us_forms')
                ->where('status','=',2)
                ->whereNull('deleted_at')->count())
                ->description('Passive Client Followup')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Closed', DB::table('contact_us_forms')
                ->where('status','=',3)
                ->whereNull('deleted_at')
                ->count())
                ->description('Closed Client Followup')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('Terminated', DB::table('contact_us_forms')
                ->where('status','=',0)
                ->whereNull('deleted_at')
                ->count())
                ->description('Terminated Client Followup')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger'),
        ];
    }
}
