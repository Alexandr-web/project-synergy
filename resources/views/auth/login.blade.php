@extends('layouts.default')

@section('title', 'Вход')

@section('content')
<x-alert />
<div class="mx-auto w-50">
  <h3 class="mb-2">Вход</h3>
  <form id="form-login">
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
      <button type="submit" class="btn btn-primary">Войти</button>
  </form>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/auth/index.js'])
@endsection