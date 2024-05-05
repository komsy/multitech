<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
           // SET GLOBAL TOGGLE FOR STATUS
           Filament::serving(function(){
            \Filament\Tables\Columns\BooleanColumn::macro('toggle', function() {
                $this->action(function($record, $column) {
                    $name = $column->getName();
                    $record->update([
                        $name => !$record->$name
                    ]);
                });
                return $this;
            });
        });
    }
}
