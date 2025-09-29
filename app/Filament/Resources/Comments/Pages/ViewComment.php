<?php

namespace App\Filament\Resources\Comments\Pages;

use App\Filament\Resources\Comments\CommentResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewComment extends ViewRecord
{
    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Go Back')
                ->icon('heroicon-o-arrow-left')
                ->url(CommentResource::getUrl('index')),
        ];
    }
}
