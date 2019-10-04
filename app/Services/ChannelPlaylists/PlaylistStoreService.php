<?php

namespace App\Services\ChannelPlaylists;

use App\Repositories\PlaylistRepository;

class PlaylistStoreService
{
    protected $playlists;

    /**
     * PlaylistStoreService constructor.
     * @param PlaylistRepository $playlist
     */
    public function __construct(PlaylistRepository $playlist)
    {
        $this->playlists = $playlist;;
    }

    /**
     * @param $channel
     * @param $request
     * @param null $user
     */
    public function handle($channel, $request, $user = null)
    {
        $user = $user ?: auth()->user();

        $playlist = $this->playlists->store($channel, $this->handleData($request, $user));

        session()->flash('success', "{$playlist->name} Playlist has been added successfully in {$channel->name} channel");
    }

    /**
     * @param $data
     * @param $user
     * @return array
     */
    protected function handleData($data, $user)
    {
        return array_merge(
            $data, ['slug' => uniqid(true),]
        );
    }
}
