@include('admin.partials._header')

<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.partials._navbar')
    @include('admin.partials._sidebar')

    <div class="content-wrapper">
        <div class="container-fluid p-3">
            @yield('content')
        </div>
    </div>

    @include('admin.partials._footer')
    @include('admin.partials._scripts')
</body>
</html>
