<?php
  $nav_list = [
    [
      'route' => '/employee/documents',
      'name' => 'Общая информация'
    ],
    [
      'route' => '/employee/events',
      'name' => 'План мероприятий'
    ],
    [
      'route' => '/employee/students-info',
      'name' => 'Движение студентов'
    ],
    [
      'route' => '/employee/students',
      'name' => 'Студенты'
    ]
  ];
?>

@include('includes.isActiveRoute')

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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              @foreach ($nav_list as $item)
              <li class="nav-item">
                <a class="nav-link {{ isActiveRoute(preg_replace('/^\//', '', $item['route'])) }}" href="{{ $item['route'] }}">{{ $item['name'] }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
    </nav>
    <main class="mt-3">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @yield('scripts')
</body>
</html>