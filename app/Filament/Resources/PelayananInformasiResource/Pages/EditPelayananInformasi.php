<?php

namespace App\Filament\Resources\PelayananInformasiResource\Pages;

use App\Filament\Resources\PelayananInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelayananInformasi extends EditRecord
{
    protected static string $resource = PelayananInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
