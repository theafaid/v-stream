<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoVotesController extends Controller
{
    public function show(Video $video)
    {
        $response = [
            'upCount' => null,
            'downCount' => null,
            'canVote' => $video->votesAllowed(),
            'voted' => false,
        ];

        if($video->votesAllowed()) {
            $response['upCount'] = $video->upVotes()->count();
            $response['downCount'] = $video->downVotes()->count();
        }

        if($user = auth()->user()) {
            $voteFromUser = $video->votes()->where('user_id', auth()->user()->id)->first();
            $response['voted'] = $voteFromUser ? $voteFromUser->up : null;
        }

        return response($response, 200);
    }

    public function store(Video $video)
    {

    }
}
