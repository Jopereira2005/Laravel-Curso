@extends('layouts.main')

@section('title', 'Laravel - Learning')

@section('content')

	<h1>Bom dia :)</h1>

	@if($nome == "O Pai") 
		<p>Salve "{{ $nome }}" :)</p>
	@else
		<p>Não é "{{ $nome }}" :(</p>
	@endif

	<p>Você tem {{ $idade }} anos, e trabalha como {{ $profissao }}.</p>

	@foreach ($nomes as $nome)
		<p>{{ $loop->index }}</p>
		<p>{{ $nome }}</p>
	@endforeach

	@php
		$frase = "Oi.";

		echo $frase;
	@endphp
@endsection

