<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ArticleResource;
use Filament\Notifications\Notification;

class EditArticle extends EditRecord
{
    protected static string $resource = ArticleResource::class;

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
        ->title('Article updated')
        ->body('Article updated successfully.');
     }
}
