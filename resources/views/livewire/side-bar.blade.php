<!-- Begin Left Navigation -->


<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }

    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="{{ asset('public/theme/') }}/index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('public/theme/') }}/assets/img/illustrations/logo.png" alt="" width="40" /><span
                    class="font-sans-serif">falcon</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">

                    <!-- label-->
                    @can('user_access')


                        <!-- parent pages-->
                        <x-jet-nav-link href="#users" 
                            class="nav-link dropdown-indicator" :show="request()->routeIs('users.*')" role="button" data-bs-toggle="collapse"
                            aria-expanded="false" aria-controls="email">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-user"></span></span><span
                                    class="nav-link-text ps-1">{{ __('User Mangement') }}</span>
                            </div>
                        </x-jet-nav-link>

                        <!-- inner pages-->
                        <ul class="nav collapse false" id="users" :show="request()->routeIs('users.*')">
                            <li class="nav-item">
                                <x-jet-nav-link class="nav-link" href="{{ url('users') }}">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                            {{ __('Users') }}
                                        </span>
                                    </div>
                                </x-jet-nav-link>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <x-jet-nav-link class="nav-link" href="{{ url('users.roles') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">{{ __('Roles') }}</span>
                                    </div>
                                </x-jet-nav-link>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <x-jet-nav-link class="nav-link" href="{{ url('users.permission') }}">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                            {{ __('Permissions') }}
                                        </span>
                                    </div>
                                </x-jet-nav-link>
                                <!-- more inner pages-->
                            </li>
                        </ul>
                    @endcan


                    <!-- label-->
                </li>

        </div>
    </div>
</nav>

<!-- Left Navigation End -->
