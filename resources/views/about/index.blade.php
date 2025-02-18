@extends('layouts.wrapper', ['title' => 'About author'])

@section('content')
    <div class="container-lg mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-3 p-md-3 rounded text-body-emphasis bg-body-secondary">
                    <div class="card-body p-5">
                        <!-- Author Image -->
                        <div class="text-center mb-4">
                            <i class="bi bi-person-circle fs-2 text-muted"></i>
                        </div>

                        <!-- Header -->
                        <div class="text-center mb-5">
                            <h2 style="font-family: 'Playfair Display', serif;">About the Author</h1>
                                <p class="lead text-muted">Get to know the person behind the posts</p>
                        </div>

                        <!-- Author Bio -->
                        <p class="text-muted text-center mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection