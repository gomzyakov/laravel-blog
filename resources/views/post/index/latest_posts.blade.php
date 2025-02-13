@php
    /** @var \App\Models\Post $post */
@endphp

<div class="justify-content">
    @if($posts->isNotEmpty())
        @php
            $featuredPost = $posts->first();
            $otherPosts = $posts->slice(1);
        @endphp

        <!-- Featured Post -->
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="fst-italic">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none"
                        href="{{ route('post.show', $featuredPost->id) }}"
                        style="font-family: 'Playfair Display', serif; font-weight: 700; font-size: 2.8rem;">
                        {{ $featuredPost->title }}
                    </a>
                </h1>
                <p class="lead my-3">{{ $featuredPost->shortBody() }}</p>
                <p class="lead mb-0">
                    <a href="{{ route('post.show', $featuredPost->id) }}" class="btn btn-outline-secondary rounded-pill">
                        Continue reading...
                    </a>
                </p>
            </div>
        </div>

        <!-- Other Posts Grid -->
        <div class="row mb-2 g-4">
            @foreach($otherPosts as $post)
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-100">
                        <!-- Image Column -->
                        <div class="col-12 col-md-5">
                            <div class="h-100 overflow-hidden">
                                <img src="{{ $post->preview_image }}" class="img-fluid h-100 object-fit-cover"
                                    alt="{{ $post->title }}" loading="lazy">
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="col-12 col-md-7 p-4 d-flex flex-column position-static">
                            <div class="mb-3">
                                <span class="badge bg-primary rounded-pill">
                                    {{ $post->category->name ?? 'Uncategorized' }}
                                </span>
                            </div>

                            <h3 class="mb-3" style="font-family: 'Playfair Display', serif;">
                                <a href="{{ route('post.show', $post->id) }}" class="text-dark text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <div class="mb-3 text-muted small">
                                <i class="bi bi-calendar me-1"></i>
                                {{ $post->created_at->format('M j, Y') }}
                            </div>

                            <p class="card-text mb-auto">{{ $post->shortBody() }}</p>

                            <a href="{{ route('post.show', $post->id) }}" class="mt-3 align-self-start text-decoration-none">
                                Continue reading →
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="row mt-4">
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

    @else
        <div class="text-center py-5">
            <h2 class="text-muted">No posts available</h2>
        </div>
    @endif
</div>

<style>
    .object-fit-cover {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .shadow-sm {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
        transition: transform 0.2s ease-in-out;
    }

    .shadow-sm:hover {
        transform: translateY(-3px);
    }

    .pagination .page-item .page-link {
        border-radius: 50px;
        padding: 0.5rem 1rem;
        color: var(--bs-primary);
        border: 1px solid var(--bs-primary);
        transition: all 0.3s;
    }

    .pagination .page-item.active .page-link {
        background-color: var(--bs-primary);
        color: #fff;
        border-color: var(--bs-primary);
    }

    .pagination .page-item .page-link:hover {
        background-color: var(--bs-primary);
        color: #fff;
    }

    .pagination .page-item {
        margin-right: 8px;
    }
    
    .pagination .page-item:last-child {
        margin-right: 0;
    }
</style>