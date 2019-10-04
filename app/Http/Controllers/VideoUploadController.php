<?php

namespace App\Http\Controllers;

use App\Models\Channel;

class VideoUploadController extends Controller
{
    public function index(Channel $channel)
    {
        $this->authorize('update', $channel);

        return view('videos.upload', [
            'channel' => $channel,
            'playlists' => $channel->playlists->pluck('name', 'id')
        ]);
    }
}
