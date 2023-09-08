<?php
    $nav_list = [
        ['path' => '?tab=info', 'text' => 'Основное'],
        ['path' => '?tab=attestation', 'text' => 'Аттестация'],
        ['path' => '?tab=documents', 'text' => 'Документы'],
        ['path' => '?tab=mode-service', 'text' => 'Служба режима',],
        ['path' => '?tab=education', 'text' => 'Обучение'],
    ];
?>

@extends('layouts.default')

@section('title', 'Информация о сотруднике')

@section('content')
<x-navbar-component :list="$nav_list" :activeRoute="$active_route" />
@switch($active_route)
    @case('info')
        <x-employee-info-tab-component />
        @break
    @case('attestation')
        <x-employee-attestation-tab-component />
        @break
    @case('documents')
        <x-employee-documents-tab-component />
        @break
    @case('mode-services')
        <x-employee-mode-services-tab-component />
        @break
    @case('education')
        <x-employee-education-tab-component />
        @break
@endswitch
@endsection