<?php

namespace App\Filament\Resources\PageResource\Pages;

use Filament\Actions;
use App\Filament\Resources\PageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Notification;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;
    protected function getRedirectUrl(): string
       {
        return $this->getResource()::getUrl('index');
     }
     protected function getSavedNotification(): ?Notification
     {
        return Notification::make()
        ->success()
        ->title('Page Created')
        ->body('Page created successfully.');
     }
}
