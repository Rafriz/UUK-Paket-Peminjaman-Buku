<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('role')
                    ->options(['admin' => 'Admin', 'siswa' => 'Siswa'])
                    ->required()
                    ->default('siswa'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                
                TextInput::make('password')
                    ->password()
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $operation) => $operation === 'create'),
            ]);
    }
}
