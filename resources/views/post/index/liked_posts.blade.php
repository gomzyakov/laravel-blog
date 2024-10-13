@php
  /** @var \App\Models\Post $likedPost */
@endphp

<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
    <div class="col">
        <h2>Liked posts</h2>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    @foreach($likedPosts as $likedPost)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $likedPost->preview_image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <a class="card-link text-black link-underline link-underline-opacity-0" href="{{ route('post.show', $likedPost->id) }}">
                            {{ $likedPost->title }}
                        </a>
                    </h5>
                    <p class="card-text">
                        {{ $likedPost->shortBody() }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

