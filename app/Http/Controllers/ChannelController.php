<?php

namespace App\Http\Controllers;

use App\Http\Requests\Channels\ChannelUpdateRequest;
use App\Models\Channel;
use App\Services\Channels\ChannelUpdateService;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('channels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param Channel $channel
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Channel $channel)
    {
        return view('channels.edit', compact('channel'));
    }


    /**
     * @param Channel $channel
     * @param ChannelUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Channel $channel, ChannelUpdateRequest $request)
    {
        app(ChannelUpdateService::class)->handle($channel, $request->validated());

        return back();
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
