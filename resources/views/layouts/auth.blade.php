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
    <div class="layout" id="auth-layout">
        <x-header-component :auth="true" />
        <div class="auth">
            <div class="container">
                <div class="auth__inner">
                    @yield('content')
                </div>
            </div>
        </div>
        <x-footer-component />
    </div>
    @yield('scripts')
</body>
</html>