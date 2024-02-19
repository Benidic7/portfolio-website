@include('layouts.partials._header')

<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.partials._navbar')

    @include('layouts.partials._sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('layouts.partials._footer')
</body>
</html>
