<?php

namespace App\Filament\Resources\FileInformasiPublikResource\Pages;

use App\Filament\Resources\FileInformasiPublikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFileInformasiPublik extends EditRecord
{
    protected static string $resource = FileInformasiPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
