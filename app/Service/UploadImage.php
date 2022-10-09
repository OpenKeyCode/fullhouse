<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadImage
{
    static function ImageUpload($validated)
    {
        if (!empty($validated['image'])){
            $validated['image'] = Storage::disk('public')->put('/uploads', $validated['image']);
        }
        return $validated;
    }
}
