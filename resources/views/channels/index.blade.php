@extends('layouts.app')

@section('title')
    My Channels
@endsection

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    Gallery
                </h1>
                <div class="page-subtitle">1 - 12 of 1713 photos</div>
                <div class="page-options d-flex">
                    <select class="form-control custom-select w-auto">
                        <option value="asc">Newest</option>
                        <option value="desc">Oldest</option>
                    </select>
                    <div class="input-icon ml-2">
                  <span class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </span>
                        <input type="text" class="form-control w-10" placeholder="Search photo">
                    </div>
                </div>
            </div>
            <div class="row row-cards">
                @forelse($channels as $channel)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card p-3">
                            <a href="javascript:void(0)" class="mb-3">
                                <img src="{{$channel->imagePath}}" alt="{{$channel->name}}" class="rounded">
                            </a>
                            <div class="d-flex align-items-center px-2">
                                <div>
                                    <h2>
                                        <a href="{{route('channels.show', $channel->slug)}}">{{$channel->name}}</a>
                                    </h2>
                                    <small class="d-block text-muted">{{$channel->created_at->diffForHumans()}}</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon"><i class="fe fe-list mr-1"></i>{{$channel->playlists_count}}</a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 42</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">
                        You haven't created any channel yet ! <a href="{{route('channels.create')}}" class="btn btn-default">Create Channel</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
