@extends('layouts.employee')

@section('title', 'Движение студентов')

@section('content')
<div class="d-flex align-items-center justify-content-between">
    <h2>Движение студентов</h2>
    <div class="d-flex align-items-center ms-3">
        <button type="button" class="js-btn-download btn btn-outline-primary me-2">Скачать</button>
        <button type="button" class="js-btn-save btn btn-outline-primary me-2">Сохранить</button>
        <input class="js-upload-table-input form-control" type="file">
    </div>
</div>
<table id="students-info-table" class="table table-bordered" border="1" cellspacing="0" cellpadding="0"></table>
@endsection

@section('scripts')
    @vite(['resources/js/pages/employee/studentsInfo/index.js'])
@endsection