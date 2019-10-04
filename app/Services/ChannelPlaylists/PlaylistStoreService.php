<?php

namespace App\Services\Channels;

use App\Repositories\PlaylistRepository;

class PlaylistStoreService
{
    protected $playlists;

    public function __construct(PlaylistRepository $playlist)
    {
        $this->playlists = $playlist;;
    }

    public function handle($channel, $request, $user)
    {
        $user = $user ?: auth()->user();

        $this->playlists->store($channel, $this->handleData($request, $user));
    }

    protected function handleData($data, $user)
    {
        return array_merge(
            $data, [
                'user_id' => $user->id,
                'slug' => uniqid(true),
            ]
        );
    }
}
