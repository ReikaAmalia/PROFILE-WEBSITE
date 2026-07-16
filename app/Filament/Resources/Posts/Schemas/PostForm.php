<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug((string) $state))),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('category')
                    ->placeholder('IoT & Smart City / Display Solution'),

                DateTimePicker::make('published_at')
                    ->label('Tanggal Publish')
                    ->native(false)
                    ->helperText('Kosongkan untuk menyimpan sebagai draft.'),

                Textarea::make('excerpt')
                    ->label('Ringkasan')
                    ->rows(3)
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Konten')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->disk('s3')
                    ->directory('posts')
                    ->visibility('public')
                    ->imagePreviewHeight('100')
                    ->maxSize(5120)
                    ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                        $maxWidth = 800;
                        $quality  = 70;

                        $img = @imagecreatefromstring(file_get_contents($file->getRealPath()));

                        if (! $img) {
                            return $file->store('posts', 's3');
                        }

                        $w = imagesx($img);
                        $h = imagesy($img);
                        if ($w > $maxWidth) {
                            $img = imagescale($img, $maxWidth, (int) round($h * $maxWidth / $w));
                        }

                        $filename = 'posts/' . Str::uuid() . '.jpg';

                        ob_start();
                        imagejpeg($img, null, $quality);
                        $binary = ob_get_clean();
                        imagedestroy($img);

                        Storage::disk('s3')->put($filename, $binary);

                        return $filename;
                    }),
            ]);
    }
}