<div class="container mt-5">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">
            <strong>My Personal Blog</strong>
        </p>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link px-2 text-body-secondary">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link px-2 text-body-secondary">
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about.index') }}" class="nav-link px-2 text-body-secondary">
                    About author
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link px-2 text-body-secondary">
                    Contacts
                </a>
            </li>
        </ul>
    </footer>
</div>
