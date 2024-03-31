
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }} | Login</title>
  <link rel="stylesheet" href="{{ asset('assets/libs/css/styles.min.css') }}" />
  <link href="{{ asset('assets/img/website.png')}}" rel="icon">
</head>

<body>

  @yield('content')

  <script src="{{ asset('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
