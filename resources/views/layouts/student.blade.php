<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.styles')
    @include('includes.csrf')
    <title>@yield('title')</title>
</head>
<body>
    <main class="p-3">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @yield('scripts')
</body>
</html>