<?php

namespace App\Http\Controllers;

use App\Jobs\Videos\UploadVideo;
use App\Models\Channel;

class VideoUploadController extends Controller
{
    public function index(Channel $channel)
    {
        $this->authorize('update', $channel);

        return view('videos.upload', [
            'channel' => $channel,
            'playlists' => $channel->playlists->pluck('name', 'slug')
        ]);
    }

    public function store()
    {
        $video = \App\Models\Video::whereUid(request('uid'))->firstOrFail();

        request()->file('video')->move(storage_path('uploads'), $video->video_filename);

        UploadVideo::dispatch($video->video);

        return response(null, 200);
    }
}
