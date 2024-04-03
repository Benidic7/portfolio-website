@include('portfolio.partials._header')

<body class="light-mode">
     @include('portfolio.partials._navbar')

    <main id="main">

        @yield('content')

    </main>

    @include('portfolio.partials._footer')
    @include('portfolio.partials._scripts')
</body>
</html>
