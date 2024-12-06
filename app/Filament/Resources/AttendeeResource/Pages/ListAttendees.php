<?php

namespace App\Filament\Resources\AttendeeResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AttendeeResource;
use App\Filament\Resources\AttendeeResource\Widgets\AttendeeChartWidget;
use App\Filament\Resources\AttendeeResource\Widgets\AttendeesStatsWidget;
use Filament\Pages\Concerns\ExposesTableToWidgets;
class ListAttendees extends ListRecords
{
    use ExposesTableToWidgets;

    protected static string $resource = AttendeeResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            AttendeesStatsWidget::class,
            AttendeeChartWidget::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}