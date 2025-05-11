<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Filament\Forms\Components\FileUpload;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;
    protected static ?string $slug = 'galeri';
    public static ?string $label = 'Galeri';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    public static ?string $pluralLabel = 'Galeri';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->label('Deskripsi')
                    ->required(),
                Forms\Components\TextInput::make('post_by')
                    ->label('Di Posting Oleh')
                    ->required(),
                Forms\Components\Select::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])
                    ->required(),
                FileUpload::make('path_img')
                    ->disk('public')
                    ->directory('galeri')
                    ->label('galeri')
                    ->required()
                    ->preserveFilenames()
                    ->image()
                    ->imageEditor()
                    ->helperText('Unggah gambar dengan ukuran 1080x608 px.')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend('galeri-'),
                    )
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('post_by')
                    ->label('Di Posting Oleh')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('is_active')
                    ->getStateUsing(fn(Galeri $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                    ->color(fn(Galeri $record) => $record->is_active ? 'success' : 'danger')
                    ->badge()
                    ->label('Status')
                    ->sortable(),
                ImageColumn::make('path_img')
                    ->getStateUsing(fn(Galeri $record) => asset('storage/' . $record->path_img))
                    ->label('Gambar')
                    ->circular(),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
