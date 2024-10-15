@extends('layouts.wrapper', ['title' => 'My personal blog'])

@section('content')
    <div class="container-lg">

        @include('post.index.latest_posts')
        @include('post.index.liked_posts')

    </div>
@endsection
