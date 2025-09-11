<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use App\Services\SiteMapBuilder;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    protected static string $resource = BlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Generate Sitemap')
                ->label('Generate Sitemap')
                    ->icon('heroicon-o-arrow-path')
                    ->action(function () {
                        app(SiteMapBuilder::class)->siteMapBuilder();
                        Notification::make()->title('Sitemap Generated!')->success()->send();
                    }),
            CreateAction::make(),
        ];
    }
}
