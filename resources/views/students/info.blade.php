@extends('layouts.default')

@section('title', 'Движение студентов')

@section('set-btn-back', true)

@section('content-title', 'Движение студентов')

@section('content')
<x-alert />
<div class="d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <button type="button" class="js-btn-download btn btn-outline-primary me-2">Скачать</button>
        <button type="button" class="js-btn-save btn btn-outline-primary me-2">Сохранить</button>
        <input class="js-upload-table-input form-control" type="file" accept=".xlsx">
    </div>
</div>
<div class="overflow-x-auto">
    <table id="students-info-table" class="table mt-2 table-bordered" border="1" cellspacing="0" cellpadding="0"></table>
    <x-nothing-text />
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/employee/studentsInfo/index.js'])
@endsection