<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.styles')
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/employee/documents">Общая информация</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/employee/events">План мероприятий</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/employee/students-info">Движение студентов</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/employee/students">Студенты</a>
              </li>
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