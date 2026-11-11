<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul buku')
                    ->required()
                    ->maxLength(255),
                TextInput::make('author')
                    ->label('Penulis')
                    ->required()
                    ->maxLength(255),
                TextInput::make('publisher')
                    ->label('Penerbit')
                    ->required()
                    ->maxLength(255),
                TextInput::make('year')
                    ->label('Tahun terbit')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->maxValue((int) now()->format('Y'))
                    ->required(),
                TextInput::make('stock')
                    ->label('Jumlah stok')
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0)
                    ->required(),
            ]);
    }
}
