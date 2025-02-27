<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $slug = 'manajemen-akun';
    protected static ?string $navigationGroup = 'Manajemen Akun';
    public static ?string $label = 'Manajemen Akun';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->placeholder('Masukkan nama lengkap / Username')
                    ->helperText('Nama yang akan digunakan untuk login')
                    ->columnSpan(2),
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->helperText('Akun hanya bisa didaftarkan 1 kali dengan email yang sama')
                    ->email()
                    ->placeholder('example@gmail.com'),
                Select::make('role')
                    ->label('Permission')
                    ->options([
                        'admin' => 'Admin',
                        'user' => 'User',
                        'pembantu' => 'Pembantu',
                    ])
                    ->required(),
                TextInput::make('perangkat_daerah')
                    ->label('Perangkat Daerah')
                    ->placeholder('Masukkan nama perangkat daerah'),
                Select::make('is_active')
                    ->label('Status Akun')
                    ->default('1')
                    ->options([
                        '1' => 'Aktif',
                        '0' => 'Tidak Aktif',
                    ])
                    ->required(),
                TextInput::make('operator_ppid')
                    ->label('Operator PPID')
                    ->placeholder('Masukkan nama operator PPID'),
                TextInput::make('no_whatsapp')
                    ->label('Nomor WhatsApp')
                    ->tel()
                    ->placeholder('+62 812-3456-7890')
                    ->helperText('Masukkan nomor WhatsApp tanpa menggunakan spasi atau tanda baca'),
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->placeholder('Masukkan password')
                    ->helperText('Password minimal 8 karakter, mengandung huruf besar, huruf kecil, dan angka')
                    ->required()
                    ->minLength(8)
                    ->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/')
                    ->confirmed(), 
                TextInput::make('password_confirmation')
                    ->label('Konfirmasi Password')
                    ->password()
                    ->placeholder('Masukkan password kembali')
                    ->helperText('masukkan password yang sama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->label('Permission')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'admin' => 'success',
                        'user' => 'warning',
                        'pembantu' => 'danger',
                    })
                    ->searchable()
                    ->sortable(),
                TextColumn::make('perangkat_daerah')
                    ->label('Perangkat Daerah')
                    ->searchable()
                    ->getStateUsing(function ($record) {
                        return $record->perangkat_daerah ?? '-'; 
                    })
                    ->sortable(),
                    TextColumn::make('is_active')
                    ->getStateUsing(fn(User $record) => $record->is_active ? 'Aktif' : 'Tidak Aktif')
                    ->color(fn(User $record) => $record->is_active ? 'success' : 'danger')
                    ->badge()
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('operator_ppid')
                    ->label('Operator PPID')
                    ->getStateUsing(function ($record) {
                        return $record->operator_ppid ?? '-'; 
                    })
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
