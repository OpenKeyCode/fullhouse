<?php

namespace App\Http\Service;

class EditorUploadImage
{

    static function ImageUpload($validated)
    {
        $dom = new \DomDocument();
        $dom->loadHtml(mb_convert_encoding($validated['description'], 'HTML-ENTITIES', 'utf-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/storage/uploads" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }
        $validated['description'] = $dom->saveHTML();
        return $validated;
    }

}
