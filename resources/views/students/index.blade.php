@extends('layouts.default')

@section('title', 'Студенты')

@section('content')
    <x-student-list-info-component />
    <x-manager-characteristic-component />
    <x-feedback-component />
@endsection

@section('scripts')
  @vite(['resources/js/pages/employee/students/index.js'])
@endsection