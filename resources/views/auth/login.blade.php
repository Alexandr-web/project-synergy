@extends('layouts.auth')

@section('title', 'Вход')

@section('content')
<div class="auth__content">
	<h1 class="auth__title m-b-15">Вход</h1>
	@if ($role === "directorate")
	<p class="text-directorate auth__login-text-directorate m-b-15">Только для сотрудников Дирекции программы «Кадровый резерв»</p>
	@endif
	<form class="form" id="login-form">
		<div class="form__field">
			<input class="form__input" type="text" placeholder="Логин" name="username">
		</div>
		<div class="form__field">
			<input class="form__input" type="password" placeholder="Пароль" name="password">
		</div>
		<button class="form__submit" type="submit">Войти</button>
	</form>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/auth.js'])
@endsection