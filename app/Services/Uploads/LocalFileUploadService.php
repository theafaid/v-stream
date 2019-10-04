<?php

namespace App\Services\Uploads;

use Illuminate\Http\UploadedFile;
use App\Services\Uploads\Contracts\UploadInterface;

class LocalFileUploadService implements UploadInterface
{
    private $file, $fileName, $path;

    public function __construct(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function save($path)
    {
        // Move to temp location
        $this->file->move(storage_path('uploads'), uniqid(true));
        // Dispatch a job
        $this->path = $path;

        return $this;

        $this->file->storeAs($path, $this->generateFileName());

        return $this;
    }

    protected function generateFileName()
    {
        return $this->fileName = $this->file->hashName();
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function getFilePath()
    {
        return "/storage/" . $this->path . "/" . $this->getFileName();
    }
}
