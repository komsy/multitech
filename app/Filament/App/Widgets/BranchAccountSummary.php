<?php

namespace App\Filament\App\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\DB;
use Filament\facades\Filament;
use App\Models\MpesaCallback;
use Carbon\Carbon;

class BranchAccountSummary extends BaseWidget
{
    protected static ?int $sort = 5;

    public function table(Table $table): Table
    {
    
        return $table
            ->query(MpesaCallback::query()
                ->join('customer as c', 'c.customerId', '=', 'accounts.customerId')
                ->LEFTJOIN('customer_branch as cb', 'cb.branchId', '=', 'accounts.branchId')
                ->whereNull('accounts.deleted_at')
                ->whereNull('c.deleted_at')
                ->where('c.customerName','=',env('CUSTOMER_NAME'))
                ->select('accounts.*','c.customerName','cb.branchName'))
                ->striped()
            ->columns([
                TextColumn::make('customerName')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('branchName')->sortable()->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('productName')->sortable()->searchable()->toggleable(),
                TextColumn::make('startFrom')->sortable()->searchable(),
                TextColumn::make('validity')->sortable()->searchable(),
                TextColumn::make('endDate')->dateTime('d-M-Y'),
            ]);
    }
    
}