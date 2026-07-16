<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'image',
    ];

   public function getImageUrlAttribute(): ?string
    {
        if (! $this->image) {
            return null;
        }

        // Jangan crash kalau konfigurasi bucket belum diisi
        if (blank(config('filesystems.disks.s3.bucket'))) {
            return null;
        }

        try {
            /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
            $disk = Storage::disk('s3');

            return $disk->url($this->image);
        } catch (\Throwable) {
            return null;
        }
    }
}