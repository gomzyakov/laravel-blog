@extends('layouts.wrapper-admin', ['title' => $post->title])

@section('content')
    <h1>Post info</h1>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <td>Title</td>
                <td>{{ $post->title }}</td>
            </tr>
            <tr>
                <td>Categories</td>
                <td>TODO Show categories</td>
            </tr>
            <tr>
                <td>Created at</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <td>Updated at</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
