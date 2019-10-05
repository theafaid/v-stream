<?php

namespace App\Http\Controllers;

use App\Http\Requests\Videos\VideoUpdateRequest;
use App\Models\Channel;
use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(request()->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store($channel, Playlist $playlist)
    {
        $this->authorize('update', $playlist->channel);

        $uid = uniqid(true);

        $playlist->videos()->create([
            'uid' => $uid,
            'title' => request('title'),
            'description' => request('description'),
            'visibility' => request('visibility'),
            'video_filename' => "{$uid}." . request('extension')
        ]);

        return response(['uid' => $uid], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * @param $channel
     * @param $playlist
     * @param Video $video
     * @param VideoUpdateRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update($channel, Playlist $playlist, Video $video, VideoUpdateRequest $request)
    {
        $this->authorize('update', $video->channel());

        $video->update(array_merge($request->validated(), [
            'allow_votes' => $request->has('allow_votes'),
            'allow_comments' => $request->has('allow_comments'),
            'playlist_id' => $playlist->id,
        ]));

        if(request()->ajax()) {
            return response([], 200);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
