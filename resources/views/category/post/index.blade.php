@extends('layouts.wrapper', ['title' => $category->title])

@section('content')

    <main class="blog" style="margin-top: -100px;">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категория: {{ $category->title }}</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ $post->preview_image }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">TODO Show categories</p>
                                @auth()
                                    <form action="{{ route('post.likes.store', $post->id) }}" method="post">
                                        @csrf
                                        <span>{{ $post->liked_users_count }}</span>
                                        <button type="submit" class="border-0 bg-transparent">
                                            @if(auth()->user()->likedPosts->contains($post->id))
                                                <i class="fas fa-heart"></i>
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
                            </div>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -100px;">
                        {{ $posts->links() }}
                    </div>
                </div>
            </section>
        </div>

    </main>

@endsection
