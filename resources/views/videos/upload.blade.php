@extends('layouts.app')

@section('title')
Upload Video
@endsection

@section('content')
    <div class="my-3 my-md-5 mt-lg-9 mt-md-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <video-upload :playlists="{{$playlists}}"></video-upload>
                </div>
            </div>
        </div>
    </div>
@endsection
