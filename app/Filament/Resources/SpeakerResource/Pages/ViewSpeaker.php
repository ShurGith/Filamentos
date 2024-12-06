<?php

namespace App\Filament\Resources\SpeakerResource\Pages;

use Filament\Actions;
use App\Models\Speaker;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\SpeakerResource;

class ViewSpeaker extends ViewRecord
{
    protected static string $resource = SpeakerResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->slideOver()
                ->form(Speaker::getForm())
        ];
    }
}