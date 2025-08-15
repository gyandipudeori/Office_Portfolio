<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('icon_class'),
                TextInput::make('short_desc')->label('Short Description')->required(),
                Select::make('status')
                        ->label('Status')
                        ->options([
                             1 => 'Active',
                             0 => 'Blocked',
                         ])
                         ->required()
                        ->default(1),
                RichEditor::make('description')->columnSpan(2),
                
                    FileUpload::make('video_path')
                    ->columnSpan(2)
                     ->label('Upload Video')
                     ->directory('videos') // stored in storage/app/public/videos
                     ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov'])
                     ->maxSize(102400) // 100MB in KB
                     ->visibility('public')
                     ->preserveFilenames()
                     ->helperText('Only MP4, AVI, or MOV formats are allowed, upto 80MB'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                 TextColumn::make('short_desc')->label('Short Description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
