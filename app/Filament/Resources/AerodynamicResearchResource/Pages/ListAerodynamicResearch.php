<?php

namespace App\Filament\Resources\AerodynamicResearchResource\Pages;

use App\Filament\Resources\AerodynamicResearchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAerodynamicResearch extends ListRecords
{
    protected static string $resource = AerodynamicResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
