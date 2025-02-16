@extends('layouts.wrapper-personal', ['title' => 'My Personal Blog'])

@section('content')
    <div class="container-lg mt-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 style="font-family: 'Playfair Display', serif;">Profile</h2>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 justify-content-center">
            <!-- Liked Posts -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow h-100 bg-secondary bg-opacity-10">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title mb-0" style="font-family: 'Playfair Display', serif;">
                                Liked posts
                            </h4>
                            <div class="icon bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-heart-fill fs-5 text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-4">{{ $data['countLiked'] }}</h4>
                        <a href="{{ route('personal.liked.index') }}"
                            class="btn btn-outline-primary rounded-pill align-self-start">
                            Read more <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- My Comments -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow h-100 bg-secondary bg-opacity-10">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title mb-0" style="font-family: 'Playfair Display', serif;">
                                Comments
                            </h4>
                            <div class="icon bg-success rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-chat-dots-fill fs-5 text-white"></i>
                            </div>
                        </div>
                        <h4 class="mb-4">{{ $data['countComments'] }}</h4>
                        <a href="{{ route('personal.comment.index') }}"
                            class="btn btn-outline-success rounded-pill align-self-start">
                            Read more <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .icon {
        transition: background-color 0.3s ease;
    }

    .icon:hover {
        background-color: rgba(0, 0, 0, 0.1) !important;
    }
</style>