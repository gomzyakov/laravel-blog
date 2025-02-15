@php
    /** @var \App\Models\Post $likedPost */
@endphp

<div class="justify-content">
    <!-- Liked Posts Header -->
    <div class="row mb-4 mt-5">
        <div class="col">
            <h3 class="mb-3 text-center fst-italic" style="font-family: 'Playfair Display', serif;">
                Liked Posts
            </h3>
        </div>
    </div>

    <!-- Liked Posts Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($likedPosts as $likedPost)
            <div class="col">
                <div class="card h-100 shadow-sm border rounded overflow-hidden">
                    <img src="{{ $likedPost->preview_image }}" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-3" style="font-family: 'Playfair Display', serif;">
                            <a class="text-dark text-decoration-none" href="{{ route('post.show', $likedPost->id) }}">
                                {{ $likedPost->title }}
                            </a>
                        </h5>
                        <p class="card-text text-muted mb-3">{{ $likedPost->shortBody() }}</p>
                        <a href="{{ route('post.show', $likedPost->id) }}"
                            class="btn btn-outline-primary rounded-pill mt-auto">
                            Continue reading →
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 1.25rem;
    }

    .btn-outline-primary {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
</style>