<?php

namespace App\Jobs\Channels;

use File;
use App\Models\Channel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadChannelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $channel, $fileId, $path;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Channel $channel, $fileId, $path)
    {
        $this->channel = $channel;
        $this->fileId = $fileId;
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Fetch the image from the temp. path
        $image = $this->getImage();

        // Resize the image
        $this->resize($image['path']);

        // Upload The Image To Storage Driver
        if($this->upload($image)) {
            $this->uploadSucceeded($image);
        }
    }

    /**
     * @return array
     */
    protected function getImage()
    {
        return [
            'path' => storage_path("{$this->path}/{$this->fileId}"),
            'fileName' => "{$this->fileId}.png"
        ];
    }

    /**
     * @param $path
     */
    protected function resize($path)
    {
        ini_set('memory_limit', '256M');

        Image::make($path)->encode('png')->fit(500, 333, function ($constraint) {
            $constraint->upsize();
        })->save();
    }

    /**
     * @param $image
     * @return mixed
     */
    protected function upload($image)
    {
        return Storage::put("channels/images/{$image['fileName']}", fopen($image['path'], 'r+'));
    }

    /**
     * @param $image
     */
    protected function uploadSucceeded($image)
    {
        // Delete temp. File
        File::delete($image['path']);

        // Delete old channel image
//        File::delete($channel->image);

        // Update the channel image
        $this->channel->update(['image_filename' => $image['fileName']]);
    }
}
