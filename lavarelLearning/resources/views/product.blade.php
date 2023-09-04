@extends('layouts.main')

@section('title', 'Produto')

@section('content')
  @if ($id == 1)
    <p>Exibindo Produto id: {{ $id }}</p>
  @endif

@endsection