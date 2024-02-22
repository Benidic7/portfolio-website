@include('layouts.partials._header')

<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.partials._navbar')

    @include('layouts.partials._sidebar')

    <div class="content-wrapper">
        <div class="container-fluid p-3">
            @yield('content')
        </div>
    </div>

    @include('layouts.partials._footer')
</body>
</html>
