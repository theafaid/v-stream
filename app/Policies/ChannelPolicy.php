<?php

namespace App\Policies;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChannelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any channels.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the channel.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Channel  $channel
     * @return mixed
     */
    public function view(User $user, Channel $channel)
    {
        //
    }

    /**
     * Determine whether the user can create channels.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the channel.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Channel  $channel
     * @return mixed
     */
    public function update(User $user, Channel $channel)
    {
        return $channel->ownedBy($user);
    }

    /**
     * Determine whether the user can delete the channel.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Channel  $channel
     * @return mixed
     */
    public function delete(User $user, Channel $channel)
    {
        //
    }

    /**
     * Determine whether the user can restore the channel.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Channel  $channel
     * @return mixed
     */
    public function restore(User $user, Channel $channel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the channel.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Channel  $channel
     * @return mixed
     */
    public function forceDelete(User $user, Channel $channel)
    {
        //
    }
}
