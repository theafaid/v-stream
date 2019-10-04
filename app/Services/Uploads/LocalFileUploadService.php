<?php

namespace App\Services\Uploads;

use Illuminate\Http\UploadedFile;
use App\Services\Uploads\Contracts\UploadInterface;

class LocalFileUploadService implements UploadInterface
{
    private $file, $fileName;

    public function __construct(UploadedFile $file)
    {
        $this->file = $file;
    }

    public function save($path)
    {
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
}
