@extends('layouts.employee')

@section('title', 'План мероприятий')

@section('content')
    <div class="d-flex align-items-center justify-content-between">
        <h2>План мероприятий</h2>
        <div class="d-flex align-items-center ms-3">
            <button type="button" class="btn btn-outline-primary me-2">Скачать</button>
            <button type="button" class="btn btn-outline-primary me-2">Сохранить</button>
            <button type="button" class="btn btn-outline-success">
                Загрузить excel таблицу
                <div class="spinner-border spinner-border-sm ms-2" role="status"></div>
            </button>
        </div>
    </div>
    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>Мероприятие</th>
            <th>Срок проведения</th>
            <th>Ответственные</th>
            <th>Требуемый объем финансовых средств</th>
        </tr>
        <tr>
            <td contenteditable=""></td>
            <td contenteditable=""></td>
            <td contenteditable=""></td>
            <td contenteditable=""></td>
        </tr>
    </table>
    <div class="d-flex justify-content-center align-items-center">
        <button class="btn btn-primary d-block me-2">Добавить ряд</button>
        <button class="btn btn-danger d-block">Убрать ряд</button>
    </div>
@endsection