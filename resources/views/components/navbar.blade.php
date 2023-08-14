<?php
    $list_for_employee = [
        [
            'route' => '/students/documents',
            'name' => 'Общая информация',
            'role' => 'employee',
        ],
        [
            'route' => '/events',
            'name' => 'План мероприятий',
            'role' => 'employee',
        ],
        [
            'route' => '/students/info',
            'name' => 'Движение студентов',
            'role' => 'employee',
        ],
        [
            'route' => '/students',
            'name' => 'Студенты',
            'role' => 'employee',
        ]
    ];

    $list_for_boss = [
        [
            'route' => '/employees',
            'name' => 'Сотрудники',
            'role' => 'boss',
        ]
    ];

    $list_for_student = [
        [
            'route' => "/students/$id/attestation-sheet",
            'name' => 'Аттестационный лист',
            'role' => 'student',
        ]
    ];

    $list_nav = [];

    switch ($role) {
        case 'employee':
            $list_nav = array_merge($list_for_employee);
            break;
        case 'boss':
            $list_nav = array_merge($list_for_boss);
            break;
        case 'student':
            $list_nav = array_merge($list_for_student);
            break;
    }
?>

@include('includes.isActiveRoute')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav w-100">
          @foreach ($list_nav as $item)
          <li class="nav-item">
            <a class="nav-link {{ isActiveRoute(preg_replace('/^\//', '', $item['route'])) }}" href="{{ $item['route'] }}">{{ $item['name'] }}</a>
          </li>
          @endforeach
          <li class="nav-item ms-auto">
            <button id="logout-btn" class="btn text-danger">Выйти</button>
          </li>
        </ul>
      </div>
    </div>
</nav>