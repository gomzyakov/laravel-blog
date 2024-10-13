@php
    /** @var \App\Models\Post $post */
@endphp

<div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
    <div class="col">
        <h2>Latest posts</h2>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    @foreach($posts as $post)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $post->preview_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="card-link text-black link-underline link-underline-opacity-0" href="{{ route('post.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h5>
                    <p class="card-text">
                        {{ $post->shortBody() }}
                    </p>
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
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row mt-3">
    <div class="mx-auto">
        {{ $posts->links() }}
    </div>
</div>

