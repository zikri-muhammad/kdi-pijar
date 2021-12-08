<div class="mdk-drawer js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>
            <div class="sidebar-block p-0 m-0">
                <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light">
                    <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                        <span class="avatar avatar-sm mr-2">
                            <span class="avatar-title rounded-circle bg-soft-secondary text-muted">MM</span>
                        </span>
                        <span class="flex d-flex flex-column">
                            <strong>{{ Session::get('users')['data']['name'] }}</strong>
                            <small
                                class="text-muted text-uppercase">{{ Session::get('users')['data']['role'] }}</small>
                        </span>
                    </a>
                </div>
            </div>

            <div class="sidebar-block p-0">
                <div class="sidebar-heading">{{ Session::get('users')['data']['role'] }}</div>
                <ul class="sidebar-menu mt-0">
                    @if (Session::get('users')['data']['role_code'] == 'headmaster')
                        @include('includes.sidebar_headmaster')
                    @elseif(Session::get('users')['data']['role_code'] == 'teacher')
                        @include('includes.sidebar_teacher')
                    @else
                        @include('includes.sidebar_default')
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
