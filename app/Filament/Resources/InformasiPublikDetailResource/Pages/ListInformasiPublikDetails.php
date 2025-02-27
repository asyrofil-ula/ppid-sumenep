<?php

namespace App\Filament\Resources\InformasiPublikDetailResource\Pages;

use App\Filament\Resources\InformasiPublikDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiPublikDetails extends ListRecords
{
    protected static string $resource = InformasiPublikDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
