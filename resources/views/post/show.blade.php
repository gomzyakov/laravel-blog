@extends('layouts.wrapper', ['title' => $post->title])

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h1>{{ $post->title }}</h1>
                <p>
                    {{ $date->day }} {{ $date->translatedFormat('F') }} {{ $date->year }} {{ $date->format('H:i') }}
                    • {{ $post->comments->count() }} comments
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 mx-auto">
                <img src="{{ $post->main_image }}" alt="featured image">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 mx-auto">
                {!! $post->content !!}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9 mx-auto">
                @foreach($post->tags as $tag)
                    <span class="badge bg-info text-wrap ml-1">{{ $tag->title }}</span>
                @endforeach
            </div>
        </div>

        {{-- TODO Fix sections below --}}
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="py-5 ml-2">
                    @auth()
                        <form action="{{ route('post.likes.store', $post->id) }}" method="post">
                            @csrf
                            <span>{{ $post->liked_users_count }}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="fas fa-heart" style="color: #f64343;"></i>
                                @else
                                    <i class="far fa-heart"></i>
                                @endif
                            </button>
                        </form>
                    @endauth
                    @guest()
                        <div>
                            <span>{{ $post->liked_users_count }}</span>
                            <i class="far fa-heart"></i>
                        </div>
                    @endguest
                </section>
                @if($relatedPosts->count() > 0)
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related posts</h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ $relatedPost->main_image }}" alt="related post"
                                         class="post-thumbnail d-flex h-50">
                                    <p class="post-category">TODO Show categories</p>
                                    <a href="{{ route('post.show', $relatedPost->id) }}"><h5
                                            class="post-title">{{ $relatedPost->title }}</h5></a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
                <section class="comment-list mb-5 fw-bold">
                    <h2 class="section-list mb-5" data-aos="fade-up">Comments ({{ $post->comments->count() }}
                        )</h2>
                    @foreach($post->comments as $comment)
                        <div class="comment-text mb-3">
                            <span class="username">
                                <div>
                                    <b>{{ $comment->user->name }}</b>
                                </div>
                              <span class="text-muted float-right">{{ $comment->dataAsCarbon->diffForHumans() }}</span>
                            </span><!-- /.username -->
                            {{ $comment->message }}
                        </div>
                    @endforeach
                </section>
                @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Добавить комментарий</h2>
                        <form action="{{ route('post.comments.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control"
                                              placeholder="Напишите комментарий" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                @endauth
            </div>
        </div>
    </div>

@endsection
