<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('main.index') }}">
            <strong>My Personal Blog</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('main.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.index') }}">About author</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">Contacts</a>
                </li>
            </ul>
            @auth()
                <a class="btn btn-outline-success" href="{{ route('personal.main.index') }}">Profile</a>
            @endauth
            @guest()
                <a class="btn btn-outline-success" href="{{ route('personal.main.index') }}">Log in</a>
            @endguest
        </div>
    </div>
</nav>
