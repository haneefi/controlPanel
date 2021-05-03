<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2" src="{{ asset('public/theme/') }}/assets/img/illustrations/logo.png" alt=""
                width="40" /><span class="font-sans-serif">Alhoor</span>
        </div>
    </a>
    <ul class="navbar-nav align-items-center d-none d-lg-block">
        <li class="nav-item">
            <div class="search-box" data-list='{"valueNames":["title"]}'>
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..."
                        aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                </form>
                <button class="btn-close position-absolute end-0 top-50 translate-middle shadow-none p-1 me-1 fs--2"
                    type="button" data-bs-dismiss="search"></button>
                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar-overlay list py-3" style="max-height: 24rem;">
                        <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">
                            Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary"
                            href="app/events/event-detail.html">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                <div class="fw-normal title">Pages <span
                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                        data-fa-transform="shrink-2"></span> Events</div>
                            </div>
                        </a>
                        <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-circle me-2 text-300 fs--2"></span>

                                <div class="fw-normal title">E-commerce <span
                                        class="fas fa-chevron-right mx-1 text-500 fs--2"
                                        data-fa-transform="shrink-2"></span> Customers</div>
                            </div>
                        </a>

                        <hr class="bg-200" />







                    </div>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator"
                href="#."><span class="fas fa-shopping-cart" data-fa-transform="shrink-7"
                    style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator"
                id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6"
                    style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none" style="max-width: 5rem">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto"><a class="card-link fw-normal" href="#">Mark all as
                                    read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem;">
                        <div class="list-group list-group-flush fw-normal fs--1">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="{{ asset('public/theme/') }}/assets/img/team/1-thumb.png" alt="" />

                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                            comment : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just now</span>

                                    </div>
                                </a>

                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                            <strong>Mia Khalifa's</strong> status
                                        </p>
                                        <span class="notification-time"><span
                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                                    </div>
                                </a>

                            </div>
                            <div class="list-group-title border-bottom">EARLIER</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="{{ asset('public/theme/') }}/assets/img/icons/weather-sm.jpg" alt="" />

                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                            California. See today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🌤️</span>1d</span>

                                    </div>
                                </a>

                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="{{ asset('public/theme/') }}/assets/img/logos/oxford.png" alt="" />

                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong> created an
                                            event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>

                                    </div>
                                </a>

                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="{{ asset('public/theme/') }}/assets/img/team/10.jpg" alt="" />

                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to join
                                            the group: United Nations International Children's Fund</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">View all</a></div>
                </div>
            </div>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">



                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    @else
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    @endif
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span> {{ __('Manage Account') }}</span></a>

                    <div class="dropdown-divider"></div>
                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>
                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                            {{ __('Team Settings') }}
                        </x-jet-dropdown-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                {{ __('Create New Team') }}
                            </x-jet-dropdown-link>
                        @endcan

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" />
                        @endforeach

                        <div class="border-t border-gray-100"></div>
                    @endif


                    <div class="dropdown-divider"></div>
                    <x-jet-dropdown-link href="{{ route('users.index') }}">
                        <span class="nav-link-text ps-1"> {{ __('Users') }}</span>
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="{{ route('users.roles.index') }}">
                        <span class="nav-link-text ps-1">{{ __('Roles') }}</span>
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="{{ route('users.permissions.index') }}">
                        <span class="nav-link-text ps-1">{{ __('Permissions') }}</span>
                    </x-jet-dropdown-link>
                    
                 
                    <div class="dropdown-divider"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>
