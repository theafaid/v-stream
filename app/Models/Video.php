<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return "uid";
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function playlist()
    {
        return $this->belongsTo(Playlist::class);
    }

    /**
     * @return mixed
     */
    public function channel()
    {
        return $this->playlist->channel;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function votes()
    {
        return $this->morphMany(Vote::class,'votable');
    }
}
