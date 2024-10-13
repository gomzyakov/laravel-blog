@extends('layouts.wrapper-admin', ['title' => 'Admin panel'])

@section('content')

    <h2>Dashboard</h2>

    <div class="row mt-4">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title display-5">{{ $data['countPost'] }}</h5>
                    <p class="card-text">Posts</p>
                    <a href="{{ route('admin.post.index') }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title display-5">{{ $data['countUser'] }}</h5>
                    <p class="card-text">Users</p>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title display-5">{{ $data['countCategory'] }}</h5>
                    <p class="card-text">Categories</p>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title display-5">{{ $data['countTag'] }}</h5>
                    <p class="card-text">Tags</p>
                    <a href="{{ route('admin.tag.index') }}" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    </div>

@endsection
