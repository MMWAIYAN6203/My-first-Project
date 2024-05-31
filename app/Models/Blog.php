<?php

namespace App\Models;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getForm()
    {
        return [
            Section::make('Blog publish')
                ->description('You can create a blog here')
                ->schema([
                    FileUpload::make('photo')
                        ->label('Blog Photo')
                        ->required()
                        ->maxSize(1024 * 1024 * 2)
                        ->rules('required')
                        ->disk('public')
                        ->visibility('public')
                        ->directory('blogphotos')
                        ->image()
                        ->preserveFilenames(),
                    TextInput::make('title')
                        ->required()
                        ->rules('required|string')
                        ->maxLength(255),
                    RichEditor::make('description')
                        ->required()
                        ->rules('required|string')
                        ->columnSpanFull(),
                ])
        ];
    }
}
