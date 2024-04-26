@include('layouts.partials._header')

<body>
    @include('layouts.partials._navbar')
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    @include('layouts.partials._scripts')
</body>
</html>
