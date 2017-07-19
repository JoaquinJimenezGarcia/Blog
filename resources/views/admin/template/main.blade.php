<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title') | Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
    @include('admin.template.partials.nav')
    <section>
        @include('flash::message')
        @yield('content')
    </section>

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>