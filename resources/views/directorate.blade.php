<?php $role = $_COOKIE['role']; ?>

@extends('layouts.default')

@section('title', 'Дирекция')

@section('content')
    <x-public-info-component idList="public-info-list-documents" />
    <x-action-plan-component />
    <x-student-movement-component />
    <x-students-list-component viewAttestationSheet="{{ $role === 'supervisor' }}" />
@endsection

@section('scripts')
    @vite(['resources/js/pages/directorate/index.js'])
@endsection