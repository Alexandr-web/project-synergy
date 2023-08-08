@extends('layouts.employee')

@section('title', 'Студенты')

@section('content')
<h2>Список студентов</h2>
<nav class="navbar bg-body-tertiary rounded-1">
    <div class="container-fluid">
      <form id="form-search" class="d-flex w-100" role="search">
        <input class="form-control me-2" type="text" name="search" placeholder="Поиск по ФИО" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
      </form>
    </div>
</nav>
<div class="d-flex mt-3">
    <aside class="position-sticky bg-body-tertiary p-2 rounded-1" style="width: 25%">
        <div class="container">
            <h3>Фильтры</h3>
            <form id="form-filters">
                <div class="mb-3">
                  <label for="admission" class="form-label">Год поступления</label>
                  <input type="text" name="admission" class="form-control" id="admission">
                </div>
                <div class="mb-3">
                    <label for="subdivision" class="form-label">Структурное подразделение</label>
                    <input type="text" name="subdivision" class="form-control" id="subdivision">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Статус</label>
                    <select class="form-select" id="status" aria-label="status" name="status">
                      <option value="fired">Уволен</option>
                      <option value="working">Работает</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="education" class="form-label">Обучение</label>
                    <select class="form-select" id="education" aria-label="education" name="education">
                      <option value="bak">БАК</option>
                      <option value="vvo">ВВО</option>
                      <option value="mag">МАГ</option>
                      <option value="asp">АСП</option>
                      <option value="mva">МВА</option>
                    </select>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" name="foreigner" id="foreigner">
                  <label class="form-check-label" for="foreigner">Иностранец</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="meeting-is-complete" id="meeting-is-complete">
                    <label class="form-check-label" for="meeting-is-complete">Встреча проведена</label>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn btn-primary d-block me-2">Применить</button>
                    <button type="reset" class="btn btn-outline-primary">Очистить</button>
                </div>
            </form>
        </div>
    </aside>
    <ul class="list-group ms-3 w-100 rounded-1">
        <li class="list-group-item fs-3">Яковлев Александр Николаевич</li>
        <li class="list-group-item fs-3">Иванов Иван Иванович</li>
        <li class="list-group-item fs-3">Иванов Иван Иванович</li>
    </ul>
</div>
@endsection

@section('scripts')
  @vite(['resources/js/pages/employee/students/index.js'])
@endsection