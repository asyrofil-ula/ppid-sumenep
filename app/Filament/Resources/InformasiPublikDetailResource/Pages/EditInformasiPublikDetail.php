<?php

namespace App\Filament\Resources\InformasiPublikDetailResource\Pages;

use App\Filament\Resources\InformasiPublikDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiPublikDetail extends EditRecord
{
    protected static string $resource = InformasiPublikDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
