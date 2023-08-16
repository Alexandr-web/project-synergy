@include('includes.getTokenData')

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
    <x-navbar role="{{ getTokenData()['role'] }}" id="{{ getTokenData()['data_user']['id'] }}" />
    <main class="p-3">
        <div class="container">
            @hasSection ('set-btn-back')
            <div class="d-flex align-items-center">
                <x-btn-back />
                <h2 class="ms-2">@yield('content-title')</h2>
            </div>
            @else
            <h2>@yield('content-title')</h2>
            @endif
            @yield('content')
        </div>
    </main>
    @yield('scripts')
    @vite(['resources/js/scripts/deleteJWTFromCookie.js'])
</body>
</html>