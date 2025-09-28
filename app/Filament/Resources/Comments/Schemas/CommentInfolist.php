<?php

namespace App\Filament\Resources\Comments\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CommentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Comment Details')
                    ->schema([
                        Group::make([
                            TextEntry::make('name'),
                            TextEntry::make('email'),
                        ])->columns(2),
                        TextEntry::make('body'),
                    ])->columnSpanFull()
            ]);
    }
}
