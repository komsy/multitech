<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Opcodes\LogViewer\Facades\LogViewer;

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
        //Limiting access to logviewer
        LogViewer::auth(function ($request) {
            return $request->user()
                && in_array($request->user()->email, [
                    'john@example.com',
                ]);
        });
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
