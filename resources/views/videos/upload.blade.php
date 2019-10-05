@extends('layouts.app')

@section('title')
Upload Video
@endsection

@section('content')
    <div class="my-3 my-md-2 mt-lg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <video-upload :playlists="{{$playlists}}" :channel="{{$channel}}"></video-upload>
                </div>
            </div>
        </div>
    </div>
@endsection
