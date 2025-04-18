<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Pages\App\Tenancy\EditTeamProfile;
use App\Filament\Pages\App\Tenancy\RegisterTeam;
use App\Models\Team;
use Filament\Navigation\MenuItem;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->default()
            ->id('app')
            ->path('app')
            // ->login()
            // ->login(\Filament\Pages\Auth\Login::class)
            // ->registration()
            ->colors([
                'danger' => Color::Red,
                'gray' => Color::Slate,
                'info' => Color::Blue,
                'primary' => Color::Amber,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->userMenuItems([
                MenuItem::make()
                ->label('Admin')
                // ->icon('heroin-o-cog-6-tooth')
                ->url('/admin')
               // ->url('/mpesaDashboard/public/admin')
                ->visible(fn(): bool => auth()->user()->is_admin)
                // ->visible(fn(): bool => auth()->user()->isAdmin())
            ])
            ->favicon(asset('images/favicon.ico'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                //Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->tenant(Team::class, ownershipRelationship: 'team', slugAttribute: 'slug')
            ->tenantRegistration(RegisterTeam::class)
            ->tenantProfile(EditTeamProfile::class);
            // ->plugins([
            //     FilamentShieldPlugin::make()
            //         ->gridColumns([
            //             'default' => 1,
            //             'sm' => 2,
            //             'lg' => 3
            //         ])
            //         ->sectionColumnSpan(1)
            //         ->checkboxListColumns([
            //             'default' => 1,
            //             'sm' => 2,
            //             'lg' => 4,
            //         ])
            //         ->resourceCheckboxListColumns([
            //             'default' => 1,
            //             'sm' => 2,
            //         ]),
            // ]);
    }
}
