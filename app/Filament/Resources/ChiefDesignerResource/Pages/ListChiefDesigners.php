<?php

namespace App\Filament\Resources\ChiefDesignerResource\Pages;

use App\Filament\Resources\ChiefDesignerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChiefDesigners extends ListRecords
{
    protected static string $resource = ChiefDesignerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
