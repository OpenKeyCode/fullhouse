<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\Storage;

class UploadImage
{
    static function ImageUpload($validated)
    {
        if (!empty($validated['image'])){
            $validated['image'] = Storage::disk('public')->put('/categories', $validated['image']);
        }
//        dd();
//        ;
        return $validated;
    }
}
