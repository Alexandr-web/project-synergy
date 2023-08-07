@extends('layouts.employee')

@section('title', 'Общая информация')

@section('content')
    <div class="w-50 mx-auto">
        <h2>Общая информация</h2>
        <ul class="list-group">
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="w-50">
                    Паспорт
                </div>
                <div class="w-50 d-flex align-items-center justify-content-end">
                    <button class="btn btn-outline-secondary me-2">загрузить</button>
                    <button class="btn btn-outline-warning">скачать</button>
                </div>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="w-50">
                    Трудовой договор
                </div>
                <div class="w-50 d-flex align-items-center justify-content-end">
                    <button class="btn btn-outline-secondary me-2">загрузить</button>
                    <button class="btn btn-outline-warning">скачать</button>
                </div>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="w-50">
                    Договор на оказание платных услуг
                </div>
                <div class="w-50 d-flex align-items-center justify-content-end">
                    <button class="btn btn-outline-secondary me-2">загрузить</button>
                    <button class="btn btn-outline-warning">скачать</button>
                </div>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="w-50">
                    Ученический договор
                </div>
                <div class="w-50 d-flex align-items-center justify-content-end">
                    <button class="btn btn-outline-secondary me-2">загрузить</button>
                    <button class="btn btn-outline-warning">скачать</button>
                </div>
            </li>
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="w-50">
                    Договор С3 на скидку
                </div>
                <div class="w-50 d-flex align-items-center justify-content-end">
                    <button class="btn btn-outline-secondary me-2">загрузить</button>
                    <button class="btn btn-outline-warning">скачать</button>
                </div>
            </li>
        </ul>
    </div>  
@endsection