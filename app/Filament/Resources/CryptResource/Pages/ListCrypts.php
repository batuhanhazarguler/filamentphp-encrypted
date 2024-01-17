<?php

namespace App\Filament\Resources\CryptResource\Pages;

use App\Filament\Resources\CryptResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCrypts extends ListRecords
{
    protected static string $resource = CryptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
