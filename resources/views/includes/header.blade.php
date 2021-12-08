<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
            <div class="container-fluid pr-0 ">

                <!-- Navbar toggler -->
                <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button"
                    data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <div class="d-flex sidebar-account flex-shrink-0 mr-auto mr-lg-0">
                    <a href="#" class="flex d-flex align-items-center text-underline-0">
                        <img src="{{ asset('assets/images/logo-square-white.png') }}"
                            style="width: 35px;margin-left: 9px;" alt="">
                    </a>
                </div>


                <ul class="nav navbar-nav d-none d-md-flex ml-auto">

                    <li class="nav-item">
                        @if (Session::get('users')['data']['role_code'] == 'headmaster')
                            <a class="sidebar-menu-button" href="/headmaster/inbox" style="color: white">
                        @elseif(Session::get('users')['data']['role_code'] == 'teacher')
                            <a class="sidebar-menu-button" href="/teacher/inbox" style="color: white">
                        @else
                            <a class="sidebar-menu-button" href="/student/inbox" style="color: white">
                        @endif
                        <span class="sidebar-menu-icon sidebar-menu-icon--left">
                            <svg data-v-66a33815="" aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="mail-bulk" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512" viewBox="0 0 40 40" width="22" height="22">
                                <path data-v-66a33815="" fill="currentColor"
                                    d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z"
                                    class=""></path>
                            </svg>
                        </span>
                        <span class="sidebar-menu-text">Inbox</span>

                        </a>
                    </li>
                </ul>

                <div class="dropdown">

                    <a href="#account_menu"
                        class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar"
                        data-toggle="dropdown">
                        <img src="{{ asset('assets/images/avatar/demi.png') }}" class="rounded-circle" width="32"
                            alt="Frontted">
                        <span class="ml-1 d-flex-inline">
                            <span class="text-light">{{ Session::get('users')['data']['name'] }}</span>
                        </span>
                    </a>
                    <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                        <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">
                            <span class="mr-3">
                                <img src="{{ asset('assets/images/avatar/demi.png') }}" width="43" height="43"
                                    alt="avatar">
                            </span>
                            <span class="flex d-flex flex-column">
                                <strong class="h5 m-0">{{ Session::get('users')['data']['name'] }}</strong>
                                <small
                                    class="text-muted text-uppercase">{{ Session::get('users')['data']['role'] }}</small>
                            </span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center py-2" href="/student/setting">
                            <span class="material-icons mr-2">settings</span> Settings
                        </a>
                        <a class="dropdown-item d-flex align-items-center py-2" href="{{ url('logout') }}">
                            <span class="material-icons mr-2">exit_to_app</span> Logout
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
