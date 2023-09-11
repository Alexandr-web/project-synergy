@extends('layouts.auth')

@section('title', 'Авторизация')

@section('content')
<div class="auth__content">
    <h1 class="auth__title m-b-35">Авторизация</h1>
    <ul class="auth__roles-list">
        <li class="auth__role">
            <a class="auth__role-link" href="/auth/login?role=directorate">Вход</a>
            <p class="text-directorate auth__role-info"> Только для сотрудников Дирекции программы «Кадровый резерв»</p>
        </li>
        <li class="auth__role">
            <a class="auth__role-link" href="/auth/login?role=student">Студент</a>
        </li>
        <li class="auth__role">
            <a class="auth__role-link" href="/auth/login?role=supervisor">Руководитель</a>
        </li>
    </ul>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/auth/index.js'])
@endsection