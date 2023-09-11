@extends('layouts.empty')

@section('title', 'Студенты')

@section('content')
    <x-student-list-info-component />
    <x-manager-characteristic-component :readonly="true" />
    <x-feedback-component />
@endsection

@section('scripts')
    @vite(['resources/js/pages/students.js'])
@endsection