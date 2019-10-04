<?php

namespace App\Services\Uploads;

use App\Services\Uploads\Contracts\UploadInterface;
use Illuminate\Http\UploadedFile;

class Uploader
{
    protected $file;

    public function upload(UploadedFile $file, $path)
    {
        $this->file = $file;

        if(is_a($service = $this->uploadService(), UploadInterface::class)) {
            return $service->save($path)->getFileName();
        }

        return null;
    }

    protected function fileSystemDriver()
    {
        $driver = config('filesystems.default');

        return in_array($driver, ['local', 'public']) ? 'local' : $driver;
    }

    protected function uploadService()
    {

        $uploadService =  "\\App\Services\\Uploads\\" . ucfirst($this->fileSystemDriver()) . "FileUploadService";
        
        return new  $uploadService ($this->file);
    }
}
