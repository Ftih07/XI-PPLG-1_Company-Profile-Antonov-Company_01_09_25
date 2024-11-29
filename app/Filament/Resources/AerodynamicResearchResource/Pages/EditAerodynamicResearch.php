<?php

namespace App\Filament\Resources\AerodynamicResearchResource\Pages;

use App\Filament\Resources\AerodynamicResearchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAerodynamicResearch extends EditRecord
{
    protected static string $resource = AerodynamicResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
