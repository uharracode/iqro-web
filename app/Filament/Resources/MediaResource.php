<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaResource\Pages;
use App\Models\Media;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile; // Pastikan ini di-import

class MediaResource extends Resource
{
    protected static ?string $model = Media::class;
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('home_setting_id')
                    ->relationship('homeSetting', 'title')
                    ->label('Terkait dengan Pengaturan Home')
                    ->placeholder('Pilih ID Pengaturan Home (Opsional)')
                    ->nullable()
                    ->columnSpan('full'),

                Forms\Components\TextInput::make('label')
                    ->label('Label/Deskripsi')
                    ->maxLength(255)
                    ->nullable()
                    ->columnSpan('full'),

                Forms\Components\Toggle::make('is_main')
                    ->label('Atur sebagai Utama?')
                    ->default(false)
                    ->helperText('Jika diaktifkan, ini mungkin menandakan media utama untuk sesuatu.'),

                Forms\Components\FileUpload::make('file_path')
                    ->label('Unggah File (Foto/Video)')
                    ->required()
                    ->acceptedFileTypes(['image/*', 'video/*'])
                    ->disk('public')
                    ->directory('uploads')
                    ->maxSize(10480) // Ukuran file maksimal 20MB
                    // --- BARIS getUploadedFileNameForStorageUsing DIHAPUS UNTUK SEMENTARA ---
                    // Filament akan menggunakan nama file unik bawaan (UUID)
                    ->visibility('public')
                    ->columnSpan('full')
                   ->afterStateUpdated(function ($state, callable $set) {
                        if ($state instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                            $set('original_name', $state->getClientOriginalName());
                            $set('file_name', $state->hashName());
                            $set('file_type', $state->getMimeType());
                        }
                    }),
                // Ini adalah hidden fields yang akan diisi oleh afterStateUpdated
                Forms\Components\Hidden::make('file_name'),
                Forms\Components\Hidden::make('original_name'),
                Forms\Components\Hidden::make('file_type'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('home_setting_id')
                    ->label('ID Home Setting')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('label')
                    ->label('Label')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_main')
                    ->label('Utama')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('original_name')
                    ->label('Nama File Asli')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_type')
                    ->label('Tipe File')
                    ->sortable(),
                Tables\Columns\TextColumn::make('preview')
                    ->label('Pratinjau')
                    ->html()
                    ->formatStateUsing(function ($record) {
                        if (Str::startsWith($record->file_type, 'image/')) {
                            return '<img src="' . asset('storage/' . $record->file_path) . '" class="h-24 w-auto object-cover rounded-md" />';
                        } elseif ($record->file_type && Str::startsWith($record->file_type, 'video/')) { // Tambahkan $record->file_type && untuk cek null
                            return '<video controls class="h-24 w-auto object-cover rounded-md"><source src="' . asset('storage/' . $record->file_path) . '" type="' . $record->file_type . '"></video>';
                        }
                        // Pastikan ada kondisi fallback jika file_path atau file_type null/kosong
                        if ($record->file_path && $record->file_type) {
                            return 'Format file tidak didukung.';
                        }
                        return 'Tidak ada pratinjau.';
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Diunggah Pada')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_main')
                    ->label('Hanya Tampilkan Utama')
                    ->trueLabel('Ya')
                    ->falseLabel('Tidak')
                    ->nullable(),
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
            'index' => Pages\ListMedia::route('/'),
            'create' => Pages\CreateMedia::route('/create'),
            'edit' => Pages\EditMedia::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'original_name',
            'label',
        ];
    }
}