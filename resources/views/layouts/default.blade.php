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
    <div class="layout" id="default-layout">
        <x-header-component :auth="false" />
        <main class="main p-t-85">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <x-footer-component />
    </div>
    @yield('scripts')
</body>
</html>