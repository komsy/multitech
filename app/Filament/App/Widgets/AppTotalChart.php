<?php

namespace App\Filament\App\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Filament\facades\Filament;
use Carbon\Carbon;

class AppTotalChart extends ChartWidget
{
    protected static ?string $heading =  'Total Mpesa Transactions';

    protected static ?int $sort = 4;
 
    protected function getData(): array
    {
        $branches = [env('BRANCH1'),env('BRANCH2'),env('BRANCH3')];;
        // $tables = ['appNyamasariaC', 'appnyalendac', 'appkondelec'];
        $tables = explode(',', env('TABLES'));
        $branchColors = ['#33FF57', '#00FFFF', '#FFFF00']; // Deep
        $branchData = [];
        $result = [];
        $lastWord = '';
        
        //check which team the user is in and return data accordingly
        // Extract the last word using regular expression
        if (preg_match('/\b([^\s]+)$/', Filament::getTenant()->name, $matches)) {
            $lastWord = strtolower($matches[1]);
        }
        
        foreach ($branches as $key => $branch) {
            if (strtolower($lastWord) == strtolower($branch)) {
                switch ($branch) {
                    case env('BRANCH1'):
                        $branchCode = env('MPESA_SHORTCODE');
                        $table = $tables[0]; // 'appNyamasariaC'
                        break;
                    case env('BRANCH2'):
                        $branchCode = env('BRANCH2_SHORTCODE');
                        $table = $tables[1]; // 'appNyalendaC'
                        break;
                    case env('BRANCH3'):
                        $branchCode = env('BRANCH3_SHORTCODE');
                        $table = $tables[2]; // 'appKondeleC'
                        break;
                }
                $summary = DB::table($table)//DB::table('appNyamasariaC')
                    ->select(DB::raw('SUM(transAmount) as total_amount'))
                    ->where('BusinessShortCode', '=', $branchCode)
                    ->whereNull($table . '.deleted_at')
                    //->whereNull('appNyamasariaC.deleted_at')
                    ->first();
     
                $branchData[] = [
                    'branch' => $branch,
                    'total_amount' => $summary->total_amount, // Add total amount directly
                    'color' => $branchColors[$key % count($branchColors)], // Assign color dynamically
                ];
            }
        }
        
        // Prepare data for pie chart
        $labels = [];
        $datasets = [
            'label' => 'Branch Distribution',
            'backgroundColor' => [],
            'data' => [],
        ];
        
        foreach ($branchData as $branchDatum) {
            $labels[] = $branchDatum['branch'];
            $datasets['backgroundColor'][] = $branchDatum['color'];
            $datasets['data'][] = $branchDatum['total_amount'];
        }
        
        return [
            'labels' => $labels,
            'datasets' => [$datasets],
        ];
        
    }


    protected function getType(): string
    {
        return 'doughnut';
    }
}
