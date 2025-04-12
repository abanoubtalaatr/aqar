<?php

namespace App\Services;

use App\Http\Requests\Api\FileRequest;
use App\Models\Ad;
use App\Models\File;
use App\Traits\FileManagementTrait;

class UploadFileForAdService
{
    use FileManagementTrait;
    public function upload(FileRequest $request, Ad $ad, $fileType = null)
    {
        // Create the file entry after validation passes
        $file = File::create([
            'path' => $this->upload_file($request->file('file'), 'Ad'),
            'description' => "",
            'ad_id' => $ad->id,
            'type' => $fileType
        ]);

        return $file;
    }

}
