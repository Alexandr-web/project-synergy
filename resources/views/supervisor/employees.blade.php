@extends('layouts.default')

@section('title', 'Сотрудники')

@section('content')
<div class="section employees-section">
    <header class="section__header">
        <h2 class="section__title">Сотрудники</h2>
    </header>
    <aside class="section__aside m-t-15">
        <x-search-student-form-component />
    </aside>
    <div class="section__main">
        <ul class="students-list">
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
            <li class="student">
                <a class="student__link" href="/students/1">Иванов Иван Иванович</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/supervisor/employees.js'])
@endsection