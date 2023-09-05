@extends('layouts.main')

@section('title', 'Laravel - Learning')

@section('content')

	@foreach($events as $event)
		<p>{{ $event->title }} -- {{ $event->description }}</p>
	@endforeach
@endsection

