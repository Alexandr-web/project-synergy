@extends('layouts.empty')

@section('title', 'Вход')

@section('content')
<x-alert />
<div class="mx-auto w-50 d-flex justify-content-center flex-column" style="height: 100vh">
  <h2 class="mb-3 text-center">Вход</h2>
  <form class="bg-light p-3 rounded" id="form-login">
      <div class="mb-3">
        <label for="login" class="form-label">Логин</label>
        <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Роль</label>
        <select class="form-select" id="role" aria-label="role" name="role">
          <option value="student" selected>Студент</option>
          <option value="employee">Сотрудник</option>
          <option value="boss">Руководитель</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary mx-auto d-block">Войти</button>
  </form>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/auth/index.js'])
@endsection