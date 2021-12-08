<!doctype html>
<html lang="en" dir="ltr">

<head>
    @include('includes.head')
</head>

<body class="layout-default">
    <div class="mdk-header-layout js-mdk-header-layout">

        <div class="mdk-header-layout__content pt-0" style="padding-top:0!important;">
            @include('includes.header')
            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                <div class="mdk-drawer-layout__content page">

                    @yield('content')

                </div>
                {{-- @yield('content') --}}
                @include('includes.sidebar')

            </div>
        </div>

    </div>

    @include('includes.footer')

</body>

</html>
