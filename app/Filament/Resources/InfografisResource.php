<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfografisResource\Pages;
use App\Models\Infografis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Console\View\Components\Info;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class InfografisResource extends Resource
{
    protected static ?string $model = Infografis::class;

    protected static ?string $slug = 'infografis';
    public static ?string $label = 'Infografis';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_infografis')
                    ->label('Nama Infografis')
                    ->required(),
         
                TextInput::make('description')
                    ->label('Keterangan')
                    ->required(),
                TextInput::make('post_by')
                    ->label('Post By')
                    ->required(),
                Select::make('is_active')
                    ->label('Status')
                    ->options([
                        '0' => 'Tidak Aktif',
                        '1' => 'Aktif',
                    ])
                    ->required(),
                FileUpload::make('path_dokumen')
                    ->disk('public')
                    ->directory('infografis')
                    ->label('File Infografis')
                    ->required()
                    ->preserveFilenames()
                    ->image()
                    ->imageEditor()
                    ->helperText('Unggah gambar dengan ukuran 1080x1350 px.')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                            ->prepend('infografis-'),
                    )

                    ->columnSpan(2),
                TextInput::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama_infografis')
                    ->label('Nama Infografis')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('post_by')
                    ->label('Di Posting Oleh')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('nama_dokumen')
                    ->label('Nama Dokumen')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('path_dokumen')
                    ->getStateUsing(fn(Infografis $record) => asset('storage/' . $record->path_dokumen))
                    ->label('File Infografis')
                    ->circular(),
                TextColumn::make('is_active')
                    ->getStateUsing(fn(Infografis $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                    ->color(fn(Infografis $record) => $record->is_active ? 'success' : 'danger')
                    ->badge()
                    ->label('Status')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListInfografis::route('/'),
            'create' => Pages\CreateInfografis::route('/create'),
            'edit' => Pages\EditInfografis::route('/{record}/edit'),
        ];
    }
}
