<?php

namespace App\Services\Channels;

use App\Repositories\ChannelRepository;
use App\Services\Uploads\Uploader;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ChannelUpdateService
{
    const IMAGE_PATH = 'channels/images';
    protected $channels, $uploader;

    public function __construct(ChannelRepository $channels, Uploader $uploader)
    {
        $this->channels = $channels;
        $this->uploader = $uploader;
    }

    public function handle($channel, $request)
    {
        $this->channels->update($channel, $this->handleData($request));

        session()->flash('success', 'Channel updated successfully');
    }

    protected function handleData($data)
    {
        $data['image_filename'] = isset($data['image']) ? $this->handleUploadFile($data['image']) : null;
        $data['slug'] = Str::slug($data['name']);

        return Arr::only($data, $this->fields());
    }

    protected function handleUploadFile($file)
    {
        return $this->uploader->upload($file, self::IMAGE_PATH);
    }

    protected function fields()
    {
        return ['image_filename', 'name', 'description', 'slug'];
    }
}
