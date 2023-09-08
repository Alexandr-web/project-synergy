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
    <div class="layout" id="empty-layout">
        <main class="main p-t-100 p-b-100">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    @yield('scripts')
</body>
</html>