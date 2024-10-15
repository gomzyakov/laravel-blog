@extends('layouts.wrapper', ['title' => 'Категории'])

@section('content')
    <main class="blog">
        <div class="container mb-5">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="featured-posts-section">
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item list-group-item-action">
                            <a href="{{ route('category.post.index', $category->id) }}"
                               class="text-dark text-decoration-none">
                                <h5>{{ $category->title }}</h5>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </main>

@endsection
