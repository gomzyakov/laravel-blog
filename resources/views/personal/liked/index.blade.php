@extends('layouts.wrapper-personal', ['title' => 'My personal blog'])

@section('content')
    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center pb-1 mt-5 mb-5">
            <h3 style="font-family: 'Playfair Display', serif;">
                Liked posts
            </h3>
        </div>

        <!-- Card -->
        <div class="card shadow-sm rounded-lg">

            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="bg-light">
                        <tr>
                            <th class="py-4">ID</th>
                            <th class="py-4">Post title</th>
                            <th class="py-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr class="hover-effect">
                                <td class="align-middle py-4">{{ $post->id }}</td>
                                <td class="align-middle py-4">{{ $post->title }}</td>
                                <td class="align-middle py-4">
                                    <div class="d-flex gap-2">
                                        <!-- View Button -->
                                        <a href="{{ route('post.show', $post->id) }}"
                                            class="btn btn-sm btn-outline-primary gap-2 rounded-pill px-4 d-flex align-items-center">
                                            <i class="bi bi-eye"></i> View
                                        </a>

                                        <!-- Unliked Button -->
                                        <form action="{{ route('personal.liked.delete', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-pill d-flex align-items-center gap-2 px-4">
                                                <i class="bi bi-heart"></i> Unliked
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection