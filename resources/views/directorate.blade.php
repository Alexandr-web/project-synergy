@extends('layouts.default')

@section('title', 'Дирекция')

@section('content')
    <x-public-info-component idList="public-info-list-documents" />
    <x-action-plan-component />
    <x-student-movement-component />
    <x-students-list-component />
@endsection

@section('scripts')
    @vite(['resources/js/pages/directorate.js'])
@endsection