<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PelayananInformasiResource\Pages;
use App\Filament\Resources\PelayananInformasiResource\RelationManagers;
use App\Models\pelayanan_informasi;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelayananInformasiResource extends Resource
{
    protected static ?string $model = pelayanan_informasi::class;

    protected static ?string $navigationGroup = 'Manajemen Konten';

    protected static ?string $slug = 'pelayanan-informasi';

    
    protected static ?string $navigationLabel = 'Pelayanan Informasi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->columnSpanFull()
                    ->required(),
                RichEditor::make('content')
                    ->label('Konten')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Konten')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                
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
            'index' => Pages\ListPelayananInformasis::route('/'),
            'create' => Pages\CreatePelayananInformasi::route('/create'),
            'edit' => Pages\EditPelayananInformasi::route('/{record}/edit'),
        ];
    }
}
