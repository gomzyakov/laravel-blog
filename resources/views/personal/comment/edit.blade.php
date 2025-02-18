@extends('layouts.wrapper-personal', ['title' => 'My personal blog'])

@section('content')
    <div class="container">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center pb-1 mt-5 mb-5">
            <h3 style="font-family: 'Playfair Display', serif;">
                Edit comment
            </h3>
        </div>

        <!-- Card -->
        <div class="card shadow-sm rounded-lg">
            <div class="card-body">
                <form method="post" action="{{ route('personal.comment.update', $comment->id) }}">
                    @csrf
                    @method('patch')

                    <!-- Comment Textarea -->
                    <div class="mb-4">
                        <label for="message" class="form-label">Comment</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message"
                            rows="5">{{ $comment->message }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">
                                This field is required.
                            </div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary rounded-pill px-4">
                            <i class="bi bi-save me-2"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection