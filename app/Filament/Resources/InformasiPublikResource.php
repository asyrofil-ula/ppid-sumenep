<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiPublikResource\Pages;
use App\Models\InformasiPublik;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use App\Models\KlasifikasiInformasi;
use App\Models\JenisInformasi;
use App\Models\DetailJenisInformasi;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;

class InformasiPublikResource extends Resource
{
    protected static ?string $model = InformasiPublik::class;
    protected static ?string $slug = 'informasi-publik';
    public static ?string $label = 'Jenis Informasi Publik';
    // protected static ?string $navigationGroup = 'Manajemen Konten';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_informasi')
                    ->label('Nama Informasi')
                    ->required(),
                Select::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_informasi')
                    ->label('Nama Informasi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('is_active')
                    ->label('Status')
                    ->getStateUsing(fn(InformasiPublik $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                    ->color(fn(InformasiPublik $record) => $record->is_active ? 'success' : 'danger')
                    ->badge()
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasiPubliks::route('/'),
            'create' => Pages\CreateInformasiPublik::route('/create'),
            'edit' => Pages\EditInformasiPublik::route('/{record}/edit'),
        ];
    }
}
