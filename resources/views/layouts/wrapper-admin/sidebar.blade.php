<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary d-flex flex-column flex-shrink-0">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                       href="{{ route('admin.main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#house"/>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.post.index') }}">
                        <svg class="bi">
                            <use xlink:href="#pencil-square"/>
                        </svg>
                        Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2"
                       href="{{ route('admin.category.index') }}">
                        <svg class="bi">
                            <use xlink:href="#list-task"/>
                        </svg>
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.user.index') }}">
                        <svg class="bi">
                            <use xlink:href="#people"/>
                        </svg>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.tag.index') }}">
                        <svg class="bi">
                            <use xlink:href="#tags"/>
                        </svg>
                        Tags
                    </a>
                </li>
            </ul>

{{--            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">--}}
{{--                <span>Saved reports</span>--}}
{{--                <a class="link-secondary" href="#" aria-label="Add a new report">--}}
{{--                    <svg class="bi">--}}
{{--                        <use xlink:href="#plus-circle"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </h6>--}}
{{--            <ul class="nav flex-column mb-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Current month--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Last quarter--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Social engagement--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Year-end sale--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text"/>
                        </svg>
                        Blog`s Homepage
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2"
                       href="{{ route('personal.main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#user"/>
                        </svg>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}">
                        <svg class="bi">
                            <use xlink:href="#logout"/>
                        </svg>
                        Sign out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>