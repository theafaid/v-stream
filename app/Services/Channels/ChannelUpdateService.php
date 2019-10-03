<?php

namespace App\Services\Channels;

use App\Repositories\ChannelRepository;

class ChannelUpdateService
{
    protected $channels;

    public function __construct(ChannelRepository $channels)
    {
        $this->channels = $channels;
    }

    public function handle($channel, $data)
    {
        $this->channels->update($channel, $data);
    }
}
