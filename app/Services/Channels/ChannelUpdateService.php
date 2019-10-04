<?php

namespace App\Services\Channels;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Repositories\ChannelRepository;
use App\Jobs\Channels\UploadChannelImage;

class ChannelUpdateService
{
    const IMAGE_PATH = 'channels/images';

    protected $channels, $uploader;

    /**
     * ChannelUpdateService constructor.
     * @param ChannelRepository $channels
     */
    public function __construct(ChannelRepository $channels)
    {
        $this->channels = $channels;
    }

    /**
     * @param $channel
     * @param $request
     */
    public function handle($channel, $request)
    {
        $this->channels->update($channel, $this->handleData($request));

        if(isset($request['image']) && $request['image']) {
            $this->handleUploadFile($channel, $request['image']);
        }

        session()->flash('success', 'Channel updated successfully');
    }

    /**
     * @param $data
     * @return array
     */
    protected function handleData($data)
    {
        $data['slug'] = Str::slug($data['name']);

        return Arr::only($data, $this->fields());
    }

    /**
     * @param $channel
     * @param $file
     */
    protected function handleUploadFile($channel, $file)
    {
        $file->move(storage_path('uploads'), $fileId = uniqid(true));

        UploadChannelImage::dispatch($channel, $fileId, self::IMAGE_PATH);
    }

    /**
     * @return array
     */
    protected function fields()
    {
        return ['name', 'description', 'slug'];
    }
}
