<?php

namespace App\Filament\App\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Filament\facades\Filament;
use Carbon\Carbon;

class AppWeeklyChart extends ChartWidget
{
    protected static ?string $heading = 'Weekly Total Mpesa Transactions';
    protected static ?int $sort = 3;
    protected function getData(): array
    {
        //current month
        $now = Carbon::now();
        $startOfMonth = $now->firstOfMonth()->toDateString();
        $endOfMonth = $now->endOfMonth()->toDateString();
     
        //$branches = [env('MPESA_SHORTCODE'),  env('BRANCH2_SHORTCODE'),env('BRANCH3_SHORTCODE')];
        $branches = [env('BRANCH1'),env('BRANCH2'),env('BRANCH3')];;
        // $tables = ['appNyamasariaC', 'appnyalendac', 'appkondelec'];
        $tables = explode(',', env('TABLES'));
        $branchColors = [ '#FFA07A', '#FFD700', '#20B2AA']; // Gold, Light Salmon, Light Sea Green
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
        
                $summary = DB::table($table)
                    ->select(DB::raw('SUM(transAmount) as sum'), DB::raw('count(*) as count'), DB::raw("CONCAT(YEAR(created_at), '/', LPAD(WEEK(created_at, 1), 2, '0')) as date"))
                    ->where('BusinessShortCode', '=', $branchCode)
                    ->whereNull($table . '.deleted_at')
                    ->whereBetween($table . '.created_at', [$startOfMonth . " 00:00:00", $endOfMonth . " 23:59:59"])
                    ->groupBy('date')->orderBy('date', 'asc')->get();
        
                $result[] = [
                    'branch' => $branch,
                    'summary' => $summary,
                ];
            }
        }
        

        // Initialize arrays for labels and datasets
        $labels = [];
        $datasets = [];

        // Group data by branch
        foreach ($result as $branchKey => $branchDatum) {
            $branch = $branchDatum["branch"];
            $summary = $branchDatum["summary"];
            $color = $branchColors[$branchKey % count($branchColors)]; // Assign color dynamically

            foreach ($summary as $item) {
                
                $date = $item->date;

                // Add date to labels array if not already present
                if (!in_array($date, $labels)) {
                    $labels[] = $date;
                }

                // Add branch summary data to corresponding dataset
                $index = array_search($date, $labels);
                if (!isset($datasets[$branch])) {
                    $datasets[$branch] = [
                        "label" => "Appmatt " . $branch,
                        "data" => array_fill(0, count($labels), 0),
                        "backgroundColor" => [
                            '#4575b4', '#313695','#cab2d6', '#ffff99', '#fee08b', '#a6761d', '#fdae61', '#b15928','#b2df8a', '#fb9a99', '#fdbf6f', 
                            '#8dd3c7', '#d73027', 
                            '#1f78b4', '#33a02c', '#e31a1c', '#ff7f00', '#6a3d9a', '#a6cee3',
                            ],
                        "borderColor" =>'#3399FF' , 
                        "borderWidth" => 1 // Optional: border width
                    ];
                }
                $datasets[$branch]["data"][$index] = (float) $item->sum; // Assuming sum should be converted to float for chart data
            }
        }

        return [
            "labels" => $labels,
            "datasets" => array_values($datasets) // Convert associative array to indexed array
        ];

    }

    protected function getType(): string
    {
        return 'bar';
    }
}
