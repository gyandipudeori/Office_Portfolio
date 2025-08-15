<?php

namespace App\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use App\Filament\Resources\PageResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
     protected function getRedirectUrl(): string
       {
        return $this->getResource()::getUrl('index');
     }
     protected function getSavedNotification(): ?Notification
     {
        return Notification::make()
        ->success()
        ->title('Page updated')
        ->body('Page updated successfully.');
     }
}
