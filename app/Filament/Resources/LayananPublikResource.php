<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananPublikResource\Pages;
use App\Models\AplikasiLayanan;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;


class LayananPublikResource extends Resource
{
    protected static ?string $model = AplikasiLayanan::class;
    protected static ?string $slug = 'aplikasi-layanan-publik';
    public static ?string $label = 'Aplikasi Layanan Publik';
    public static ?string $pluralLabel = 'Aplikasi Layanan Publik';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_aplikasi')
                    ->label('Nama Aplikasi Layanan')
                    ->required(),
                TextArea::make('description')
                    ->label('Deskripsi')
                    ->required(),
                TextInput::make('post_by')
                    ->label('Di Posting Oleh')
                    ->required(),
                Select::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])
                    ->required(),
                TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_aplikasi')
                    ->label('Nama Aplikasi Layanan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('post_by')
                    ->label('Di Posting Oleh')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('is_active')
                    ->getStateUsing(fn(AplikasiLayanan $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                    ->color(fn(AplikasiLayanan $record) => $record->is_active ? 'success' : 'danger')
                    ->badge()
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('url')
                    ->label('URL')
                    ->searchable()
                    ->limit(50)
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
            'index' => Pages\ListLayananPubliks::route('/'),
            'create' => Pages\CreateLayananPublik::route('/create'),
            'edit' => Pages\EditLayananPublik::route('/{record}/edit'),
        ];
    }
}
