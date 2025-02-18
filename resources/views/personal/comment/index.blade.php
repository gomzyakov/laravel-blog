@extends('layouts.wrapper-personal', ['title' => 'My personal blog'])

@section('content')
    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center pb-1 mt-5 mb-5">
            <h3 style="font-family: 'Playfair Display', serif;">
                Comments
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
                            <th class="py-4">Comment</th>
                            <th class="py-4">Post title</th>
                            <th class="py-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                            <tr class="hover-effect">
                                <td class="align-middle py-4">{{ $comment->id }}</td>
                                <td class="align-middle py-4">{{ $comment->message }}</td>
                                <td class="align-middle py-4">{{ $comment->post->title }}</td>
                                <td class="align-middle py-4">
                                    <div class="d-flex gap-2">
                                        <!-- Edit Button -->
                                        <a href="{{ route('personal.comment.edit', $comment->id) }}"
                                            class="btn btn-sm btn-outline-success gap-2 rounded-pill px-4 d-flex align-items-center">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('personal.comment.delete', $comment->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger rounded-pill d-flex align-items-center gap-2 px-4">
                                                <i class="bi bi-trash"></i> Delete
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