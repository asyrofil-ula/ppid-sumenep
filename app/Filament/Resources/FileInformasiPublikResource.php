<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FileInformasiPublikResource\Pages;
use App\Filament\Resources\FileInformasiPublikResource\RelationManagers;

use App\Models\FileInformasiPublik;
use Faker\Core\File;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
// use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\InformasiPublik;
use Filament\Forms\Components\Hidden;

class FileInformasiPublikResource extends Resource
{
    protected static ?string $model = FileInformasiPublik::class;

    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $slug = 'file-informasi-publik';
    protected static ?string $label = 'File Informasi Publik';
    protected static ?string $pluralLabel = 'File Informasi Publik';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('informasi_publik_detail_id')
                ->label('Informasi Publik Detail')
                ->options(function () {
                    return InformasiPublik::with('informasiPublikDetails')->get()->mapWithKeys(function ($info) {
                        return [$info->nama_informasi => $info->informasiPublikDetails->pluck('description', 'id')->toArray()];
                    })->toArray();
                })
                ->searchable()
                ->required(),
            Textarea::make('deskripsi')
                ->nullable()
                ->required(),
            FileUpload::make('file')
                ->disk('public')
                ->directory('lampiran-informasi')
                ->label('File Informasi Publik')
                ->required()
                ->preserveFilenames()
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                        ->prepend('lampiran_informasi-'),
                )
                ->helperText('Unggah file dengan format .pdf dan ukuran maksimal 5MB.')
                ->columnSpan(2),
            Select::make('is_active')
                ->label('Status')
                ->options([
                    '0' => 'Tidak Aktif',
                    '1' => 'Aktif',
                ])
                ->required(),
            Hidden::make('post_by')->default(Auth::user()->name),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('informasiPublikDetail.informasiPublik.nama_informasi')
                ->label('Nama Informasi')
                ->searchable()
                ->sortable(),
            TextColumn::make('informasiPublikDetail.description')
                ->label('Detail Informasi')
                ->searchable()
                ->sortable(),
            TextColumn::make('deskripsi')
                ->label('deskripsi')
                ->searchable()
                ->sortable(),
            ViewColumn::make('file')
                ->view('filament.columns.custom-view')
                ->label('File')
                ->getStateUsing(function (FileInformasiPublik $record) {
                    return $record->file ? asset('storage/' . $record->file) : null;
                })
                ->sortable(),
            TextColumn::make('post_by')
                ->label('Post By')
                ->searchable()
                ->sortable(),
            TextColumn::make('is_active')
                ->label('Status')
                ->getStateUsing(fn (FileInformasiPublik $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                ->color(fn(FileInformasiPublik $record) => $record->is_active ? 'success' : 'danger')
                ->badge()
                ->searchable()
                ->sortable(),
        ])
            ->filters([
                
            ])
            ->searchable()
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
            'index' => Pages\ListFileInformasiPubliks::route('/'),
            'create' => Pages\CreateFileInformasiPublik::route('/create'),
            'edit' => Pages\EditFileInformasiPublik::route('/{record}/edit'),
        ];
    }
}
