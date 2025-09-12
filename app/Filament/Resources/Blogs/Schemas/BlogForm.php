<?php

namespace App\Filament\Resources\Blogs\Schemas;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Details')
                ->schema([
                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                return;
                            }

                            $set('slug', Str::slug($state));
                        })
                        ->required(),
                    TextInput::make('slug')
                        ->required(),
                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->label('Categories')
                        ->preload()
                        ->searchable()
                        ->native(false),
                    Textarea::make('heading')
                        ->columnSpanFull(),
                    TextInput::make('author')
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('image')
                        ->label('Blog Image')
                        ->image()
                        ->collection('posts')
                        ->disk('public')
                        ->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                    TextInput::make('alt')
                        ->required(),
                    TinyEditor::make('content')
                        ->required()
                        ->extraAttributes(['class' => 'prose max-w-none'])
                        ->columnSpanFull(),
                    Textarea::make('meta_title')
                        ->required()
                        ->columnSpanFull(),
                    Textarea::make('meta_description')
                        ->required()
                        ->columnSpanFull(),
                    Toggle::make('is_featured'),
                    Toggle::make('status')->default(true)->required(),
                ])->columnSpanFull(),
            ]);
    }
}
