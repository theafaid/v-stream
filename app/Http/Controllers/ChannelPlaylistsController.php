<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Services\ChannelPlaylists\PlaylistStoreService;
use Illuminate\Http\Request;
use App\Http\Requests\ChannelPlaylists\PlaylistStoreRequest;

class ChannelPlaylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param Channel $channel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Channel $channel)
    {
        $this->authorize('update', $channel);

        return view('playlists.create', compact('channel'));
    }


    public function store(Channel $channel, PlaylistStoreRequest $request)
    {
        $this->authorize('update', $channel);

        app(PlaylistStoreService::class)->handle($channel, $request->validated());

        return redirect()->route('channels.show', $channel->slug);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
