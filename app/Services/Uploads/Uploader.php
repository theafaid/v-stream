<?php

namespace App\Services\Uploads;

use App\Services\Uploads\Contracts\UploadInterface;

class Uploader
{
    protected $file;

    public function upload($file, $path)
    {
        if(is_a($service = $this->uploadService(), UploadInterface::class)) {
            return $service->save($file, $path)->getFileName();
        }

        return null;
    }

    protected function fileSystemDriver()
    {
        if($this->driver) return $this->driver;

        return config('filesystems.default');
    }

    protected function uploadService()
    {
        $uploadServiceName =  ucfirst($this->fileSystemDriver()) . "FileUploadService";

        return new $uploadServiceName;
    }
}
