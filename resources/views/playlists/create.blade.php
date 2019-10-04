@extends('layouts.app')

@section('title')
    Create a playlist
@endsection

@section('content')
    <div class="my-3 my-md-5 mt-lg-9 mt-md-9">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form class="card" enctype="multipart/form-data" method="POST" action="{{route('playlists.store', $channel->slug)}}">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Create a playlist in {{$channel->name}}</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Playlist Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{old('name')}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Playlist</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
