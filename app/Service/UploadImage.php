<?php

namespace App\Service;

use Illuminate\Support\Facades\Storage;

class UploadImage
{
    static function ImageUpload($validated, $keys)
    {
        foreach ($keys as $key) {
            if (!empty($validated[$key])){
                $validated[$key] = Storage::disk('public')->put('/uploads', $validated[$key]);
            }
        }
        return $validated;
    }
}
