@extends('Panel.panel')

@section('title', 'Novos Achados')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Novos Achados</h1>
    <p class="text-gray-600 mt-1">Itens enviados pelo formulário e ainda não avaliados</p>
    <div class="mt-2 text-sm text-gray-500">Gerencie aqui os itens antes de validar e mover para o painel principal.</div>
</div>

@include('Panel.partials.filters')
@include('Panel.partials.pending')
@endsection
