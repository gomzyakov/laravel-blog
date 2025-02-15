<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4"></div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{ route('main.index') }}"
                    style="font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1.95rem;">
                    My Personal Blog
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                @auth
                    <div class="dropdown">
                        <a class="btn btn-sm btn-outline-primary dropdown-toggle gap-2 rounded-pill px-4 d-flex align-items-center"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg rounded-3">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2"
                                    href="{{ route('personal.main.index') }}">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center gap-2">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="btn btn-sm bg-primary text-white gap-2 rounded-pill px-4 d-flex align-items-center"
                        href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right"></i> Log in
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('main.index') }}">Home</a>
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('about.index') }}">About author</a>
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('contact.index') }}">Contact</a>
        </nav>
    </div>
</div>