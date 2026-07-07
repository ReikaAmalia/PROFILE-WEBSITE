<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required()
                    ->numeric(),

                TextInput::make('name')
                    ->required(),

                TextInput::make('slug')
                    ->required(),

                TextInput::make('brand')
                    ->required(),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->disk('s3')
                    ->directory('products')
                    ->visibility('public')
                    ->imagePreviewHeight('100')
                    ->maxSize(5120)
                    ->saveUploadedFileUsing(function (TemporaryUploadedFile $file): string {
                        $maxWidth = 800;
                        $quality  = 70;

                        $img = @imagecreatefromstring(file_get_contents($file->getRealPath()));

                        if (! $img) {
                            return $file->store('products', 's3');
                        }

                        $w = imagesx($img);
                        $h = imagesy($img);
                        if ($w > $maxWidth) {
                            $img = imagescale($img, $maxWidth, (int) round($h * $maxWidth / $w));
                        }

                        $filename = 'products/' . Str::uuid() . '.jpg';

                        ob_start();
                        imagejpeg($img, null, $quality);
                        $binary = ob_get_clean();
                        imagedestroy($img);

                        Storage::disk('s3')->put($filename, $binary);

                        return $filename;
                    }),

                Select::make('status')
                    ->options([
                        'baru' => 'Baru',
                        'bekas' => 'Bekas',
                        'digital' => 'Digital License',
                    ])
                    ->native(false)
                    ->required(),
            ]);
    }
}