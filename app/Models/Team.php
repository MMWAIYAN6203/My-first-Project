<?php

namespace App\Models;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getForm()
    {
        return [
            Grid::make(
                [
                    'md' => 2
                ]
            )
                ->schema([
                    Section::make('Team Members')
                        ->description('You can create a blog here')
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->rules('required|string')
                                ->maxLength(255),
                            TextInput::make('role')
                                ->required()
                                ->rules('required|string')
                                ->maxLength(255),
                            Textarea::make('bio')
                                ->required()
                                ->rules('required|string')
                                ->rows(5)
                                ->columnSpanFull(),
                        ])->columnSpan(1),
                    Section::make()
                        ->description('Smile !')
                        ->schema([
                            FileUpload::make('photo')
                                ->label('Member Photo')
                                ->required()
                                ->maxSize(1024 * 1024 * 2)
                                ->disk('public')
                                ->visibility('public')
                                ->directory('memberphotos')
                                ->image()
                                ->preserveFilenames()
                                ->rules('required'),
                        ])->columnSpan(1),
                ])
        ];
    }
}
