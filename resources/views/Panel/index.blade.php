@extends('Panel.panel')

@section('title', 'Painel Administrativo')

@section('content')
@include('Panel.partials.actions')
@include('Panel.partials.filters')
@include('Panel.partials.stats')
@include('Panel.partials.table')
@endsection