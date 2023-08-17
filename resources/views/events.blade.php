@extends('layouts.default')

@section('title', 'План мероприятий')

@section('set-btn-back', true)

@section('content-title', 'План мероприятий')

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
    <table id="event-table" class="table mt-2 table-bordered" border="1" cellspacing="0" cellpadding="0"></table>
    <x-nothing-text />
</div>
@endsection

@section('scripts')
    @vite(['resources/js/pages/employee/events/index.js'])
@endsection