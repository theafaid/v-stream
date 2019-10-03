@extends('layouts.app')

@section('title')
Edit {{$channel->name}}
@endsection

@section('content')
    <main id="col-main">
        <div class="dashboard-container">
            <div class="container-fluid">
                <form method="POST" action="{{route('channels.update', $channel->slug)}}">
                    @csrf
                    {{method_field('PATCH')}}
                    <div class="row">
                            <div class="col-md-4  col-lg-3">
                                <div id="account-edit-photo">
                                    <div><img src="http://via.placeholder.com/400x400.jpg" alt="Account Image"></div>
                                </div>
                            </div><!-- close .col -->
                            <div class="col-md-8">
                                <h5>{{$channel->name}} Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Channel Name:</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name') ?: $channel->name}}">
                                        </div>
                                    </div><!-- close .col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Channel Image:</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div><!-- close .col -->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Channel Description:</label>
                                            <textarea class="form-control" name="description" rows="12">{{old('description') ?: $channel->description}}</textarea>
                                        </div>
                                    </div><!-- close .col -->
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
                    </div><!-- close .row -->
                </form>
            </div><!-- close .container-fluid -->

        </div><!-- close .dashboard-container -->
    </main>
@endsection
