<div class="mt-5">
    <footer class="bg-dark-gradient py-5">
        <div class="container">
            <div class="row">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
                    <span class="fs-3 fw-bold text-white" style="font-family: 'Playfair Display', serif;">
                        <strong>My Personal Blog</strong>
                    </span>

                    <div class="col-6 col-md-2 mb-4">
                        <h5 class="text-white mb-3">Navigation</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="{{ route('main.index') }}" class="nav-link p-0 link-light link-offset-2">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('about.index') }}" class="nav-link p-0 link-light link-offset-2">
                                    About
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="{{ route('contact.index') }}" class="nav-link p-0 link-light link-offset-2">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-4">
                        <h5 class="text-white mb-3">Social</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 link-light link-offset-2">
                                    <i class="bi bi-github me-2"></i>GitHub
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 link-light link-offset-2">
                                    <i class="bi bi-linkedin me-2"></i>LinkedIn
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 link-light link-offset-2">
                                    <i class="bi bi-twitter-x me-2"></i>Twitter
                                </a>
                            </li>
                        </ul>
                    </div>

                </footer>
            </div>

            <div class="border-top border-dark pt-4 mt-4 text-center">
                <p class="text-secondary mb-0">
                    © {{ date('Y') }} My Personal Blog.
                </p>
            </div>
        </div>
    </footer>
</div>

<style>
    .bg-dark-gradient {
        background: linear-gradient(160deg, #1a1a1a 0%, #0d0d0d 100%);
        padding: 2rem 0;
        margin-top: 4rem !important;
        width: 100%;
    }
</style>