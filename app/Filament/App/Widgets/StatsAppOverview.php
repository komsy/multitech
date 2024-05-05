<?php

namespace App\Filament\App\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Filament\facades\Filament;
use Carbon\Carbon;

class StatsAppOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $now = Carbon::now();
        $startOfDay = $now->startOfDay()->toDateTimeString();
        $endOfDay = $now->endOfDay()->toDateTimeString();
 
        return [
            Stat::make(env('BRANCH1'), DB::table('appNyamasariaC')
                ->where('BusinessShortCode','=',env('MPESA_SHORTCODE'))
                ->whereNull('deleted_at')
                ->whereNotNull('TransId')
                ->whereBetween('created_at', [$startOfDay. " 00:00:00", $endOfDay. " 23:59:59"])
                ->count())
                ->description('Daily Mpesa Customers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make(env('BRANCH2'), DB::table('appnyalendac')
                ->where('BusinessShortCode','=',env('BRANCH2_SHORTCODE'))
                ->whereNull('deleted_at')
                ->whereNotNull('TransId')
                ->whereBetween('created_at', [$startOfDay. " 00:00:00", $endOfDay. " 23:59:59"])
                ->count())
                ->description('Daily Mpesa Customers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make(env('BRANCH3'), DB::table('appkondelec')
                ->where('BusinessShortCode','=',env('BRANCH3_SHORTCODE'))
                ->whereNull('deleted_at')
                ->whereNotNull('TransId')
                ->whereBetween('created_at', [$startOfDay. " 00:00:00", $endOfDay. " 23:59:59"])
                ->count())
                ->description('Daily Mpesa Customers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
        
    }
}
