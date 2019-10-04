<?php

namespace App\Repositories;

use App\Models\Playlist;

class PlaylistRepository
{
    protected $playlist;

    /**
     * PlaylistRepository constructor.
     * @param Playlist $playlist
     */
    public function __construct(Playlist $playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * Store a newly playlist in a channel
     * @param $channel
     * @param $data
     * @return mixed
     */
    public function store($channel, $data)
    {
        return $channel->playlists()->create($data);
    }
}
