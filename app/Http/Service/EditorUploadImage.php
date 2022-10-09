<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\Storage;

class EditorUploadImage
{
    static function ImagesUpload($validated)
    {
        $dom = new \DomDocument();
        @$dom->loadHtml(mb_convert_encoding($validated['description'], 'HTML-ENTITIES', 'utf-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            if (strpos($data, 'data:image/') === false) continue;
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/storage/uploads/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $validated['description'] = $dom->saveHTML();
        return $validated;
    }


    static function ImageDelete($description)
    {
        $dom = new \DomDocument();
        @$dom->loadHtml($description);
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            $data = str_replace('storage', 'public', $data);
            Storage::delete($data);
        }
    }
}
