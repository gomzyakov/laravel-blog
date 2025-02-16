@extends('layouts.wrapper', ['title' => $post->title])

@section('content')
<div class="container">
    <!-- Post Header -->
    <div class="row">
        <div class="col-lg-10 mx-auto mt-4">
            <h2 style="font-family: 'Playfair Display', serif;">
                {{ $post->title }}
            </h2>
            <div class="d-flex align-items-center gap-3 bg-light p-3 rounded mb-5 mt-4">
                <i class="bi bi-calendar"></i>
                <span class="text-muted">
                    {{ $date->day }} {{ $date->translatedFormat('F') }} {{ $date->year }} • {{ $date->format('H:i') }}
                </span>
                <i class="bi bi-chat"></i>
                <span class="text-muted">{{ $post->comments->count() }} comments</span>
            </div>
        </div>
    </div>

    <!-- Featured Image -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <img src="{{ $post->main_image }}" alt="featured image" class="img-fluid w-100 rounded mb-5">
        </div>
    </div>

    <!-- Post Content -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            {!! $post->content !!}
        </div>
    </div>

    <!-- Tags -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            @foreach($post->tags as $tag)
                <span class="badge bg-info text-wrap mb-2">{{ $tag->title }}</span>
            @endforeach
        </div>
    </div>

   <!-- Like Section -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <section class="py-5">
                <div class="d-flex align-items-center gap-3">
                    @auth()
                        <form action="{{ route('post.likes.store', $post->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger rounded-pill d-flex align-items-center gap-2">
                                @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="bi bi-heart-fill"></i>
                                @else
                                    <i class="bi bi-heart"></i>
                                @endif
                                <span>{{ $post->liked_users_count }}</span>
                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-heart"></i>
                            <span>{{ $post->liked_users_count }}</span>
                        </div>
                    @endguest

                    <span class="text-muted">
                        {{ $post->liked_users_count == 1 ? 'person likes' : 'people like' }} this post.
                    </span>
                </div>
            </section>
        </div>
    </div>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4">Related posts</h2>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-4 mb-4">
                                <img src="{{ $relatedPost->main_image }}" alt="related post" class="img-fluid rounded mb-2">
                                <a href="{{ route('post.show', $relatedPost->id) }}">
                                    <h5 class="post-title">{{ $relatedPost->title }}</h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    @endif

    <!-- Comments Section -->
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <section class="comment-list mb-5">
                <h2 class="section-title mb-4">Comments ({{ $post->comments->count() }})</h2>
                @foreach($post->comments as $comment)
                    <div class="comment-text bg-light p-4 rounded mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <!-- Ícone de usuário -->
                            <i class="bi bi-person-circle fs-4 text-muted"></i>
                            <div>
                                <span class="username fw-bold">{{ $comment->user->name }}</span>
                                <span class="text-muted ms-2">
                                    <i class="bi bi-clock"></i> {{ $comment->created_at ? $comment->created_at->diffForHumans() : 'Just now' }}
                                </span>
                            </div>
                        </div>
                        <p class="mb-0">{{ $comment->message }}</p>
                    </div>
                @endforeach
            </section>
        </div>
    </div>

    <!-- Add Comment Section -->
    @auth()
    <div class="row mt-5">
        <div class="col-lg-9 mx-auto">
            <section class="comment-section mb-5">
                <h2 class="section-title mb-4">Add a comment</h2>
                <form action="{{ route('post.comments.store', $post->id) }}" method="post">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="comment" class="form-label text-muted small mb-2">Your comment</label>
                        <textarea name="message" id="comment" class="form-control shadow-sm" rows="5"
                                placeholder="Write your comment here..." style="border-radius: 10px;"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary rounded-pill px-4 py-2 d-flex align-items-center gap-2">
                            <i class="bi bi-send"></i> Send
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    @endauth
</div>
@endsection
