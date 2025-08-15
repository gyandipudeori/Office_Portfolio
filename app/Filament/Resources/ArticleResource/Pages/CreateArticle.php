<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ArticleResource;
use Illuminate\Support\Facades\Notification;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
      protected function getRedirectUrl(): string
       {
        return $this->getResource()::getUrl('index');
     }
     protected function getSavedNotification(): ?Notification
     {
        return Notification::make()
        ->success()
        ->title('Article Created')
        ->body('Article created successfully.');
     }
}
