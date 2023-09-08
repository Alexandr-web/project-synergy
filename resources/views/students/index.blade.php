@extends('layouts.empty')

@section('title', 'Студенты')

@section('content')
    <x-student-list-info-component />
    <x-manager-characteristic-component />
    <x-feedback-component />
@endsection