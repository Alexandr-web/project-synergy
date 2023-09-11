@extends('layouts.default')

@section('title', 'Характеристика от руководителя')

@section('content')
<x-manager-characteristic-component :submit="true" />
<x-result-meeting-component :submit="true" />
<x-result-last-meeting-component :checkbox="true" />
<x-development-prospects-component />
@endsection

@section('scripts')
    @vite(['resources/js/pages/supervisor/characteristic.js'])
@endsection