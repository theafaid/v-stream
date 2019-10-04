<?php

namespace App\Repositories;

use App\Models\Channel;
use Illuminate\Support\Arr;

class ChannelRepository
{
    protected $channel;

    public function __construct(Channel $channel)
    {
        $this->channel = $channel;
    }

    public function update($channel, $data)
    {
        $channel->update($data);

        return $channel;
    }
}
