<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiPublikDetailResource\Pages;
use App\Filament\Resources\InformasiPublikDetailResource\RelationManagers;
use App\Models\InformasiPublikDetail;
use App\Models\InformasiPublik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
// use Filament\Forms\Components\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiPublikDetailResource extends Resource
{
    protected static ?string $model = InformasiPublikDetail::class;
    protected static ?string $slug = 'informasi-publik-detail';
    protected static ?string $label = 'Jenis Informasi Publik Detail';
    // protected static ?string $navigationGroup = 'Manajemen Konten';


    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('informasi_publik_id')
                    ->label('Informasi Publik')
                    ->options(function () {
                        return InformasiPublik::pluck('nama_informasi', 'id')->toArray();
                    })
                    ->searchable()
                    ->required(),
                Textarea::make('description')
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
        return $table->columns([
            TextColumn::make('informasiPublik.nama_informasi')->label('Informasi Publik')
                ->searchable()
                ->sortable(),
            TextColumn::make('description')->limit(50)
                ->searchable()
                ->sortable(),
            TextColumn::make('is_active')
                ->getStateUsing(fn(InformasiPublikDetail $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                ->color(fn(InformasiPublikDetail $record) => $record->is_active ? 'success' : 'danger')
                ->badge()
                ->label('Status')
                ->sortable(),
        ])

            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasiPublikDetails::route('/'),
            'create' => Pages\CreateInformasiPublikDetail::route('/create'),
            'edit' => Pages\EditInformasiPublikDetail::route('/{record}/edit'),
        ];
    }
}
