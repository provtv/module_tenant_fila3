<?php

declare(strict_types=1);

namespace Modules\Tenant\Filament\Pages;

use Filament\Pages\Page;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
=======

class Dashboard extends Page
>>>>>>> c6db7044 (.)
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'tenant::filament.pages.dashboard';
}
