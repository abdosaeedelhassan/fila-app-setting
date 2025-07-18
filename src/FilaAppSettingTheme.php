<?php

namespace AsayHome\FilaAppSetting;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilaAppSettingTheme implements Plugin
{
    public function getId(): string
    {
        return 'fila-app-setting';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('fila-app-setting', __DIR__ . '/../resources/dist/fila-app-setting.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('fila-app-setting');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
