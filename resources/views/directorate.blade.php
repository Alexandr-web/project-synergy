@extends('layouts.default')

@section('title', 'Дирекция')

@section('content')
    <x-public-info-component />
    <x-action-plan-component />
    <x-student-movement-component />
    <x-students-list-component />
@endsection