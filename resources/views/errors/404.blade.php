@extends('layouts.empty')

@section('title', 'Страница не найдена')

@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh">
        <div class="d-flex flex-column align-items-center mb-4">
            <h1 class="mb-1 fw-bold">404</h1>
            <h2 class="fs-4 text-secondary">Страница не найдена</h2>
        </div>
        <a href="/">На главную</a>
    </div>
@endsection