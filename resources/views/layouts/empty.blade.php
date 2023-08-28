<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.favicon')
    @include('includes.styles')
    @include('includes.csrf')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>