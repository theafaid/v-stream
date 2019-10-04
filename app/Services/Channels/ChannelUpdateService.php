<?php

namespace App\Services\Channels;

use App\Repositories\ChannelRepository;
use App\Services\Uploads\LocalFileUploadService;
use Illuminate\Support\Str;

class ChannelUpdateService
{
    const IMAGE_PATH = 'channels/images';
    protected $channels;

    public function __construct(ChannelRepository $channels)
    {
        $this->channels = $channels;
    }

    public function handle($channel, $request)
    {
        dd($request);
        $this->channels->update($channel, array_merge($request, [
                'slug' => Str::slug($request['name']),
                'image_filename' => $this->handleFileUpload($request['image_filename'])->getFileName(),
            ])
        );
    }

    protected function handleFileUpload($file)
    {
        return ( new LocalFileUploadService($file))->save(self::IMAGE_PATH);
    }
}
