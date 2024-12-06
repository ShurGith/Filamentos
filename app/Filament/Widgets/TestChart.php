<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\AttendeeResource;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Widgets\Widget;
use Illuminate\Testing\Fluent\Concerns\Interaction;

class TestChart extends Widget implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    protected int | string | array $columnSpan = 'full';

    protected static string $view = 'filament.widgets.test-chart';

    public function callNotification()
    {
        return Action::make('callNotification')
        ->button()
        ->color('warning')
        ->icon('heroicon-s-bell')
       ->label('Send a notification')
       ->action(function(){
           Notification::make()->warning()->title('Your notification has been sent')
                ->body('This is a test notification')
                //->duration(3200)
                ->persistent()
               ->actions([
                   \Filament\Notifications\Actions\Action::make('goToAttendees')
                       ->button()
                       ->color('primary')
                       ->url(AttendeeResource::getUrl('index')),
                   \Filament\Notifications\Actions\Action::make('Editar-1')
                       ->button()
                       ->color('success')
                       ->url(AttendeeResource::getUrl('edit', ['record'=>1])),
                   \Filament\Notifications\Actions\Action::make('undo')
                       ->link()
                       ->color('gray')
                        ->close()
               ])
                ->send();
       });
    }
}
