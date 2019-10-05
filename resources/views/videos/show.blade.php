@extends('layouts.app')

@section('title')
    {{$video->title}}
@endsection

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <video-page :video="{{$video}}"></video-page>
        </div>
    </div>
@endsection
